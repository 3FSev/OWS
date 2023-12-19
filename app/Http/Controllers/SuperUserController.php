<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\District;
use App\Models\Department;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use App\Mail\AccountApproved;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

class SuperUserController extends Controller
{
    public function Dashboard()
    {
        $verefied_count = User::whereNotNull('approved_at')->count();
        $unverefied_count = User::whereNull('approved_at')->count();
        return view('superuser.sup-dashboard', compact('verefied_count', 'unverefied_count'));
    }

    public function ChangePassword(){
        return view('superuser.sup-change-password');
    }
    public function CreateUser()
    {
        $departments = Department::all();
        $districts = District::all();
        $users = User::withTrashed()->get();
        $roles = Role::all();
        return view('superuser.sup-manage-user', compact('departments','districts','users', 'roles'));
    }
    public function UnverifiedUser()
    {
        $users = User::whereNull('approved_at')->get();
        return view('superuser.sup-unverified-user', compact('users'));
    }
    public function UserList()
    {
        $users = User::whereNotNull('approved_at')->get();
        $roles = Role::all();
        $districts = District::all();
        $departments = Department::all();
        return view('superuser.sup-user-list', compact('users', 'roles', 'districts', 'departments'));
    }
    public function EditUserList($user_id)
    {
        $user = User::findOrFail($user_id);
        $roles = Role::all();
        $districts = District::all();
        $departments = Department::all();
        return view('superuser.sup-edit-user', compact('user', 'roles', 'districts', 'departments'));
    }
    public function ManageDepartment()
    {
        $departments = Department::all();
        return view('superuser.sup-manage-department', compact('departments'));
    }
    public function ManageDistricts()
    {
        $districts = District::all();
        return view('superuser.sup-manage-districts', compact('districts'));
    }
    public function UserActivities()
    {
        $activities = UserActivity::latest()->get();

        return view('superuser.sup-user-activities', compact('activities'));
    }
    public function RestoreData()
    {
        return view('superuser.sup-restore-data');
    }
    public function RestoreAccounts()
    {
        $users = User::onlyTrashed()->get();
        return view('superuser.sup-restore-accounts', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'district' => 'required|exists:district,id',
            'department' => 'required|exists:department,id',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->district_id = $validatedData['district'];
        $user->department_id = $validatedData['department'];
        $user->role_id = $request->input('role');
        $user->approved_at = now();
        $user->save();

        return redirect()->back()->with('success','User created successfully');
    }

    public function storeDepartment(Request $request){
        $department = new Department();
        $department->name = $request->input('department');
        $department->save();

        return redirect()->back();
    }

    public function EditUser(Request $request, $user_id){

        $user = User::findOrFail($user_id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->filled('password')){
            $user->password = bcrypt($request->input('password'));
        }
        $user->district_id = $request->input('district');;
        $user->department_id = $request->input('department');;
        $user->role_id = $request->input('role');
        $user->approved_at = now();
        $user->save();

        return redirect('sup-create-user');
    }

    public function storeDistrict(Request $request){
        $district = new District();
        $district->name = $request->input('district');
        $district->save();

        return redirect()->back();
    }

    public function updateDistrict(Request $request, $id){
        $district = District::findOrFail($id);
        $district->name = $request->input('districtName');
        $district->save();

        return redirect()->back();
    }

    public function updateDepartment(Request $request, $id){
        $department = Department::findOrFail($id);
        $department->name = $request->input('departmentName');
        $department->save();

        return redirect()->back();
    }

    public function approve($user_id)
    {
        $user = User::withTrashed()->findOrFail($user_id);
           if ($user->approved_at === null) {
        // Update approved_at if it's null
        $user->update(['approved_at' => now()]);
        Mail::to($user->email)->send(new AccountApproved());
        return redirect()->back()->with('success', 'User approved successfully.');
        }
        if ($user->deleted_at) {
            // Restore the user if it's soft-deleted
            $user->restore();
        }
        return redirect()->back()->with('success','');
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect()->back()->with('warning','User deleted successfully');
    }

    public function destroyDepartment($department_id)
    {
        $department = Department::findOrFail($department_id);
        $department->delete();
        return redirect()->back()->with('warning','Department deleted successfully');
    }

    public function destroyDistrict($district_id)
    {
        $district = District::findOrFail($district_id);
        $district->delete();
        return redirect()->back()->with('warning','District deleted successfully');
    }

    public function restore($user_id)
    {
        $trashedUser = User::onlyTrashed()->findOrFail($user_id);
        $trashedUser->restore();

        return redirect()->back()->with('success','User restored successfully');
    }

    public function restore_item($item_id)
    {
        $trashedItem = Item::onlyTrashed()->findOrFail($item_id);
        $trashedItem->restore();

        return redirect()->back()->with('success','User restored successfully');
    }

    public function getUserData($user_id)
    {
        $user = User::find($user_id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Include 'name' and 'email' properties in the response
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            // Include other properties as needed
        ]);
    }

}
