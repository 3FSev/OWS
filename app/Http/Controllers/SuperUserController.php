<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\District;
use App\Models\Department;
use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    public function Dashboard()
    {
        $verefied_count = User::whereNotNull('approved_at')->count();
        $unverefied_count = User::whereNull('approved_at')->count();
        return view('superuser.sup-dashboard', compact('verefied_count', 'unverefied_count'));
    }
    public function CreateUser()
    {
        $departments = Department::all();
        $districts = District::all();
        return view('superuser.sup-create-user', compact('departments','districts'));
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
    public function ManageDepartment()
    {
        return view('superuser.sup-manage-department');
    }
    public function ManageDistricts()
    {
        return view('superuser.sup-manage-districts');
    }
    public function UserActivities()
    {
        return view('superuser.sup-user-activities');
    }
    public function RestoreItem()
    {
        return view('superuser.sup-restore-item');
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
        $user->save();

        return redirect()->back()->with('success','User created successfully');
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);
        return redirect()->back()->with('success','User approved successfully');
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect()->back()->with('warning','User deleted successfully');
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
