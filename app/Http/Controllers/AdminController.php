<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Rr;
use App\Models\User;
use App\Models\Wiv;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Dashboard(){

        return view('admin.adm-dashboard');
    }

    public function Employee(){
        $users = User::whereNotNull('approved_at')->get();

        return view('admin.adm-employee', compact('users'));
    }

    public function AccountableItems(){

        return view('admin.adm-accountable-items');
    }

    // manage stock
    public function CreateRR(){
        $categories = Category::all();

        return view('admin.adm-create-rr', compact('categories'));
    }

    public function RRList(){
        $recieving_reports = Rr::all();

        return view('admin.adm-rr-list', compact('recieving_reports',));
    }
    public function EditRRList(){

        return view('admin.adm-rr-edit-list');
    }
    public function ItemList(){
        $items = Item::all();

        return view('admin.adm-item-list', compact('items'));
    }
    public function EditItemList(){

        return view('admin.adm-edit-item-list');
    }

    // manage wiv
    public function CreateWIV(){
        $users = User::where('role_id', 1)->whereNotNull('approved_at')->get();
        $items = Item::where('quantity', '!=', 0)->get();
        $rrs = Rr::all();

        return view('admin.adm-create-wiv', compact('users','items','rrs'));
    }

    public function storeWIV(Request $request){
        $wiv = new Wiv();
        $wiv->user_id = $request->input('user_id');
        $wiv->wiv_number = $request->input('wiv_number');
        $wiv->wiv_date = $request->input('wiv_date');
        $wiv->save();

        $items = $request->input('item_id');
        $quantities = $request->input('quantity');

        foreach ($items as $key => $item) {
            $quantity = $quantities[$key];
            $wiv->items()->attach($item, [
                'quantity' => $quantity]);
        }

        return redirect()->back();
    }

    public function WIVList(){

        return view('admin.adm-wiv-list');
    }

    // manage mrt
    public function CreateMRT(){

        return view('admin.adm-create-mrt');
    }
    public function MRTList(){

        return view('admin.adm-mrt-list');
    }

    // manage request
    public function ItemRequest(){

        return view('admin.adm-item-request');
    }
    public function ReturnItemRequest(){

        return view('admin.adm-return-item-req');
    }   
   
    public function ReviewReturnItemRequest(){

        return view('admin.adm-review-return-item');
    }

    // manage reports
    public function WIVReports(){

        return view('admin.adm-WIV-reports');
    }

    public function MRTReports(){

        return view('admin.adm-MRT-reports');
    }
    public function RRReports(){

        return view('admin.adm-RR-reports');
    }

    public function storeRR(Request $request){
        //---------- GET RR AND SAVE TO DATABASE ---------//
        $rr = new Rr();
        $rr->rr_number = $request->input('rr_number');
        $rr->riv = $request->input('riv_number');
        $rr->cs = $request->input('cs_number');
        $rr->aoc = $request->input('aoc_number');
        $rr->po = $request->input('po_number');
        $rr->cv = $request->input('cv_number');
        $rr->dr = $request->input('dr_number');
        $rr->inv = $request->input('inv_number');
        $rr->or = $request->input('or_number');

        $rr->rr_date = date('Y-m-d', strtotime($request->input('rr_date')));
        $rr->riv_date = date('Y-m-d', strtotime($request->input('riv_date')));
        $rr->cs_date = date('Y-m-d', strtotime($request->input('cs_date')));
        $rr->aoc_date = date('Y-m-d', strtotime($request->input('aoc_date')));
        $rr->po_date = date('Y-m-d', strtotime($request->input('po_date')));
        $rr->cv_date = date('Y-m-d', strtotime($request->input('cv_date')));
        $rr->dr_date = date('Y-m-d', strtotime($request->input('dr_date')));
        $rr->inv_date = date('Y-m-d', strtotime($request->input('inv_date')));
        $rr->or_date = date('Y-m-d', strtotime($request->input('or_date')));
        $rr->supplier = $request->input('supplier');
        $rr->address = $request->input('address');
        $rr->save();

        //---------- GET ITEM FROM FORM -------------///
        $names = $request->input('name');
        $deliveredQuantities = $request->input('delivered');
        $acceptedQuantities = $request->input('accepted');
        $unitCosts = $request->input('unit_cost');
        $extendedCosts = $request->input('extended_cost');
        $freightCosts = $request->input('freight');
        $categories = $request->input('category');

        foreach ($names as $key => $name) {
            $item = new Item();
            $item->name = $name;
            $item->quantity = $acceptedQuantities[$key];
            $item->unit_cost = $unitCosts[$key];
            $item->extended_cost = $extendedCosts[$key];
            $item->freight = $freightCosts[$key];
            $item->category_id = $categories[$key];
            $item->item_status_id = '1';
            $item->save();

            $rr->items()->attach($item, [
                'delivered' => $deliveredQuantities[$key],
                'accepted' => $acceptedQuantities[$key]
            ]);
        }

        return redirect()->back();
    }

    public function getRRData($item_id)
    {
        $rrData = Item::find($item_id)->rrs->first();

        return response()->json($rrData);
    }

 }
