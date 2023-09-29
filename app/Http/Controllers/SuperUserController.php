<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('superuser.sup-create-user');
    }
    public function UnverifiedUser()
    {
        $users = User::whereNull('approved_at')->get();
        return view('superuser.sup-unverified-user', compact('users'));
    }
    public function UserList()
    {
        $users = User::whereNotNull('approved_at')->get();
        return view('superuser.sup-user-list', compact('users'));
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
        return view('superuser.sup-restore-accounts');
    }


}
