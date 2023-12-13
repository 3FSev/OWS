<?php

namespace App\Http\Controllers;

use App\Models\Wiv;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    //
    public function PendingWIV()
    {
        $user = Auth::user()->id;
        $wivs = Wiv::whereNotNull('approved_at')
            ->whereNull('received_at')
            ->where('user_id', $user)
            ->get();
        return view('employee.em-pending-wiv', compact('wivs'));
    }

    public function AcceptWIV($wiv_id){
        $wiv = Wiv::findOrFail($wiv_id);
        $wiv->received_at = now();
        $wiv->save();

        return redirect()->back();
    }
    public function PendingRIV()
    {
        return view('employee.em-pending-mrt');
    }
    public function ListView()
    {
        $user = Auth::user()->id;
        $wivs = Wiv::whereNotNull('approved_at')
                    ->whereNotNull('received_at')
                    ->where('user_id', $user)
                    ->get();

        return view('employee.em-List', compact('wivs'));
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
