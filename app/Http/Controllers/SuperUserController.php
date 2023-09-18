<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    public function Dashboard()
    {
        return view('superuser.sup-dashboard');
    }
    public function CreateUser()
    {
        return view('superuser.sup-create-user');
    }
    public function UnverifiedUser()
    {
        return view('superuser.sup-unverified-user');
    }
    public function UserList()
    {
        return view('superuser.sup-user-list');
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
