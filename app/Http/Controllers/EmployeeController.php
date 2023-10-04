<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function PendingWIV()
    {
        return view('employee.em-pending-wiv');
    }
    public function PendingRIV()
    {
        return view('employee.em-pending-mrt');
    }
    public function ListView()
    {
        return view('employee.em-List');
    }
    public function ItemRequest()
    {
        return view('employee.em-item-req');
    }
    public function ReturnItemReq()
    {
        return view('employee.em-return-item-req');
    }
    
}
