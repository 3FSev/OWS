<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function StockList()
    {
        return view('manager.man-stock-list');
    }
    public function EditItem()
    {
        return view('manager.man-edit-items');
    }
    //
    public function WIVrequest()
    {
        return view('manager.man-wiv-req');
    }
    public function WIVreview()
    {
        return view('manager.wiv-review');
    }

    //
    public function MRTrequest()
    {
        return view('manager.man-mrt-req');
    }

    public function MRTreview()
    {
        return view('manager.mrt-review');
    }

    public function RRrequest()
    {
        return view('manager.man-rr-request');
    }

    public function RR_review()
    {
        return view('manager.man-rr-review');
    }
    
    public function AccountSettings()
    {
        return view('manager.man-acc-settings');
    }
    
    public function ChangePassword()
    {
        return view('manager.man-change-pswd');
    }

}
