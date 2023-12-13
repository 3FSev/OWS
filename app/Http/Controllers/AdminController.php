<?php

namespace App\Http\Controllers;

use App\Models\Rr;
use App\Models\Mrt;
use App\Models\Wiv;
use App\Models\Item;
use App\Models\User;
use BaconQrCode\Writer;
use App\Models\Category;
use Illuminate\Http\Request;
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\Image\Png;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewRrNotification;

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

    public function AccountableItems($user_id)
    {
        $user = User::findOrFail($user_id);

        //Check if the user has related Wivs
        if ($user->wivs->isNotEmpty()) {
            foreach ($user->wivs as $wiv) {
                $items = $wiv->items;
            }
        } else {
            //Handle the case if the user does not have related Wivs/Items
            $items = [];
        }

        return view('admin.adm-accountable-items', compact('items','user'));
    }

    // manage stock
    public function CreateRR(){
        $categories = Category::all();
        $rrs = Rr::all();

        return view('admin.adm-create-rr', compact('categories','rrs'));
    }

    public function RRList(){
        $recieving_reports = Rr::all();

        return view('admin.adm-rr-list', compact('recieving_reports',));
    }
    public function EditRRList(){

        return view('admin.adm-rr-edit-list');
    }
    public function ItemList(){
        $items = Item::whereHas('rrs', function ($query) {
            $query->whereNotNull('approved_at');
        })->get();

        return view('admin.adm-item-list', compact('items'));
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


        return view('admin.adm-item-history', compact('item','wivs','mrts'));
    }
    public function CreateItemCategories(){
        return view('Admin.adm-create-items-categories');
    }
    public function EditItemList($item_id){
        $item = Item::findOrFail($item_id);
        $category = Category::all();

        return view('admin.adm-edit-item-list', compact('item','category'));
    }

    public function UpdateItem(Request $request, $item_id){
        $item = Item::findOrFail($item_id);
        $item->name = $request->input('name');
        $item->quantity = $request->input('quantity');
        $item->category_id = $request->input('category');
        $item->unit_cost = $request->input('unit_cost');
        $item->status = $request->input('status');
        $item->save();

        return redirect('/admin/adm-item-list');
    }

    // manage wiv
    public function CreateWIV(){
        $users = User::where('role_id', 1)->whereNotNull('approved_at')->get();
        $items = Item::whereHas('rrs', function ($query) {
            $query->whereNotNull('approved_at');
        })->where('quantity', '!=', 0)->get();
        $rrs = Rr::all();
        $wivs = Wiv::all();

        return view('admin.adm-create-wiv', compact('users','items','rrs','wivs'));
    }

    public function storeWIV(Request $request){
        $user = Auth::user();

        $wiv = new Wiv();
        $wiv->generateUniqueIdentifier();
        $wiv->user_id = $request->input('user_id');
        $wiv->wiv_date = now();
        $wiv->created_by = $user->name;
        $wiv->save();

        $items = $request->input('item_id');

        foreach ($items as $key => $item) {
            $itemModel = Item::find($item);
            $itemModel->decrement('quantity', 1);

            $wiv->items()->attach($item);
        }

        return redirect()->back();
    }

    public function WIVList(){

        return view('admin.adm-wiv-list');
    }

    // manage mrt
    public function CreateMRT(){
        $users = User::whereNotNull('approved_at')->where('role_id', 1)->get();
        $mrts = Mrt::all();
        return view('admin.adm-create-mrt', compact('users','mrts'));
    }

    public function storeMRT(Request $request){
        $user = Auth::user();

        $mrt = new Mrt();
        $mrt->generateUniqueIdentifier();
        $mrt->mrt_date = now();
        $mrt->user_id = $request->input('user_id');
        $mrt->created_by = $user->name;
        $mrt->save();

        // Attach items to MRT with usable status
        foreach ($request->input('items') as $index => $itemId) {
            $usable = isset($request->input('usable')[$index]); // Check if the checkbox is checked
            $mrt->items()->attach($itemId, ['usable' => $usable]);

            //Find wivs connected to selected item
            $item = Item::find($itemId);
            $wivs = $item->wivs;
            foreach ($wivs as $wiv) {
                $wiv->pivot->update(['quantity' => 0]);
            }

            //If usable is true, set the item's quantity to 1
            if ($usable) {
                $item->update(['quantity' => 1]);
            }
        }

        return redirect()->back();
    }

    public function getItemsForUser($userId)
    {
        // Get all WIVs associated with the user
        $wivs = Wiv::where('user_id', $userId)
                    ->whereNotNull('approved_at')
                    ->whereNotNull('received_at')
                    ->get();

        // Filter items with quantity equal to 1 in the pivot table
        $items = $wivs->flatMap(function ($wiv) {
            return $wiv->items->where('pivot.quantity', 1);
        });

        return response()->json($items);
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
        $user = Auth::user();
        //---------- GET RR AND SAVE TO DATABASE ---------//
        $rr = new Rr();
        $rr->generateUniqueIdentifier();
        $rr->riv = $request->input('riv_number');
        $rr->cs = $request->input('cs_number');
        $rr->aoc = $request->input('aoc_number');
        $rr->po = $request->input('po_number');
        $rr->cv = $request->input('cv_number');
        $rr->dr = $request->input('dr_number');
        $rr->inv = $request->input('inv_number');
        $rr->or = $request->input('or_number');

        $rr->rr_date = now();
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
        $rr->created_by = $user->name;
        $rr->save();

        //---------- SEND NOTIFICATION -------------//
        // $usersToNotify = User::where('role_id', 4)->get();

        // foreach ($usersToNotify as $user) {
        //     try {
        //         $user->notify(new NewRrNotification($rr));
        //     } catch (\Exception $e) {
        //         \Log::error('Notification sending failed: ' . $e->getMessage());
        //     }
        // }

        //---------- GET ITEM FROM FORM -------------///
        $names = $request->input('name');
        $unitCosts = $request->input('unit_cost');
        $extendedCosts = $request->input('extended_cost');
        $freightCosts = $request->input('freight');
        $categories = $request->input('category');

        foreach ($names as $key => $name) {
            $item = new Item();
            $item->name = $name;
            $item->quantity = '1';
            $item->unit_cost = $unitCosts[$key];
            $item->extended_cost = $extendedCosts[$key];
            $item->freight = $freightCosts[$key];
            $item->category_id = $categories[$key];
            $item->save();

            $rr->items()->attach($item);
        }

        return redirect()->back();
    }

    public function getRRData($item_id)
    {
        $rrData = Item::find($item_id)->rrs->first();

        return response()->json($rrData);
    }

    public function generateBarcode($item_id)
    {
        // Fetch the item details based on the provided item ID
        $item = Item::findOrFail($item_id);

        // Create a QR code writer
        $writer = new Writer(new Png());

        // Generate the QR code using the item details (convert to JSON or use a specific attribute)
        $qrCode = $writer->writeString($item->toJson());

        return response($qrCode)
            ->header('Content-Type', $writer->getContentType());
    }

 }
