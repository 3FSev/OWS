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
}
