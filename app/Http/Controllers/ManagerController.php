<?php

namespace App\Http\Controllers;

use App\Models\Rr;
use Carbon\Carbon;
use App\Models\Mrt;
use App\Models\Wiv;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    //
    public function StockList()
    {
        $items = Item::whereHas('rrs', function ($query) {
            $query->whereNotNull('approved_at');
        })->get();

        return view('manager.man-stock-list', compact('items'));
    }

    public function ItemHistory($item_id){
        $item = Item::findOrFail($item_id);

        $wivs = Wiv::whereNotNull('approved_at')->whereHas('items', function ($query) use ($item_id) {
            $query->where('item_id', $item_id);
        })->get();

        $mrts = Mrt::whereNotNull('approved_at')->whereHas('items', function ($query) use ($item_id){
            $query->where('item_id', $item_id);
        })->get();

        $combinedRecords = $wivs->merge($mrts);
        return view('manager.man-item-history');
    }

    public function EditItem()
    {
        return view('manager.man-edit-items');
    }
    //
    public function WIVrequest()
    {
        $wivs = Wiv::whereNull('approved_at')->whereNull('rejected_at')->get();
        $approvedWivs = Wiv::whereNotNull('approved_at')->get();

        return view('manager.man-wiv-req', compact('wivs','approvedWivs'));
    }
    public function WIVreview($wiv_id)
    {
        $wiv = Wiv::with('items.rrs')->findOrFail($wiv_id);

        return view('manager.wiv-review', compact('wiv'));
    }

    public function WIVapprove($wiv_id)
    {
        $user = Auth::user();

        $wiv = Wiv::findOrFail($wiv_id);
        $wiv->approved_by = $user->name;
        $wiv->approved_at = Carbon::now();
        $wiv->save();

        foreach($wiv->items as $item){
            $item->status = "Assigned to {$wiv->user->name}";
            $item->save();
        }

        return redirect()->route('WivRequest.man')->with('success','');
    }

    public function WIVreject($wiv_id)
    {
        $user = Auth::user();

        $wiv = Wiv::findOrFail($wiv_id);
        $wiv->rejected_by = $user->name;
        $wiv->rejected_at = Carbon::now();
        $wiv->save();

        foreach($wiv->items as $item){
            $item->quantity = 1;
            $item->save();
        }

        return redirect()->route('WivRequest.man')->with('success','');
    }


    public function MRTrequest()
    {
        $mrts = Mrt::whereNull('approved_at')->whereNull('rejected_at')->get();
        $approvedMrts = Mrt::whereNotNull('approved_at')->get();
        return view('manager.man-mrt-req', compact('mrts','approvedMrts'));
    }

    public function MRTreview($mrt_id)
    {
        $mrt = Mrt::with('items.rrs')->findOrFail($mrt_id);
        return view('manager.mrt-review', compact('mrt'));
    }

    public function MrtApprove($mrt_id){
        $user = Auth::user();

        $mrt = Mrt::findOrFail($mrt_id);
        $mrt->approved_by = $user->name;
        $mrt->approved_at = now();
        $mrt->save();

        foreach($mrt->items as $item){
            if($item->quantity == 1){
                $item->status = "In stock";
                $item->save();
            }
        }

        return redirect('manager.man-mrt-req');
    }

    public function MrtReject($mrt_id){
        $user = Auth::user();
    
        $mrt = Mrt::findOrFail($mrt_id);
        $mrt->rejected_by = $user->name;
        $mrt->rejected_at = now();
        $mrt->save();
    
        $itemsInMrt = $mrt->items;
    
        foreach ($itemsInMrt as $item) {
            $wiv = Wiv::where('user_id', $mrt->user_id)->first();
    
            if ($wiv && $wiv->items->contains($item->id)) {
                $wiv->items()->updateExistingPivot($item->id, ['quantity' => 1]);
            }
        }
    
        return redirect('manager.man-mrt-req');
    }
    

    public function RRrequest()
    {
        $rrs = Rr::whereNull('approved_at')->whereNull('rejected_at')->get();
        $approvedRrs = Rr::whereNotNull('approved_at')->get();
        return view('manager.man-rr-request', compact('rrs','approvedRrs'));
    }

    public function RR_review($rr_id)
    {
        $rr = Rr::findOrFail($rr_id);
        return view('manager.man-rr-review', compact('rr'));
    }

    public function RRapprove($rr_id){
        $user = Auth::user();

        $rr = Rr::findOrFail($rr_id);
        $rr->approved_at = now();
        $rr->approved_by = $user->name;
        $rr->save();

        return redirect()->route('RRrequest.man')->with('success','');
    }

    public function RRreject($rr_id){
        $user = Auth::user();

        $rr = Rr::findOrFail($rr_id);
        $rr->rejected_at = now();
        $rr->rejected_by = $user->name;
        $rr->save();

        $items = $rr->items;

        foreach($items as $item){
            $item->status = "rejected";
            $item->quantity = 0;
            $item->save();
        }

        return redirect()->route('RRrequest.man')->with('success','');
    }
    
    public function AccountSettings()
    {
        return view('manager.man-acc-settings');
    }
    
    public function ChangePassword()
    {
        return view('manager.man-change-password');
    }

}
