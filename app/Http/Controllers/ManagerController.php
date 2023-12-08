<?php

namespace App\Http\Controllers;

use App\Models\Mrt;
use App\Models\Wiv;
use Carbon\Carbon;
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
        $wivs = Wiv::whereNull('approved_at')->get();

        return view('manager.man-wiv-req', compact('wivs'));
    }
    public function WIVreview($wiv_id)
    {
        $wiv = Wiv::with('items.rrs')->findOrFail($wiv_id);

        return view('manager.wiv-review', compact('wiv'));
    }

    public function WIVapprove($wiv_id)
    {
        $wiv = Wiv::findOrFail($wiv_id);
        $wiv->approved_at = Carbon::now();
        $wiv->save();

        return redirect()->route('WivRequest.man')->with('success','');
    }


    public function MRTrequest()
    {
        $mrts = Mrt::whereNull('approved_at')->get();
        return view('manager.man-mrt-req', compact('mrts'));
    }

    public function MRTreview($mrt_id)
    {
        $mrt = Mrt::with('items.rrs')->findOrFail($mrt_id);
        return view('manager.mrt-review', compact('mrt'));
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
