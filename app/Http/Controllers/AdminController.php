<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Dashboard(){

        return view('admin.adm-dashboard');
    }

    public function Employee(){

        return view('admin.adm-employee');
    }

    public function AccountableItems(){

        return view('admin.adm-accountable-items');
    }

    // manage stock
    public function CreateRR(){

        return view('admin.adm-create-rr');
    }

    public function RRList(){

        return view('admin.adm-rr-list');
    }
    public function EditRRList(){

        return view('admin.adm-rr-edit-list');
    }
    public function ItemList(){

        return view('admin.adm-item-list');
    }
    public function EditItemList(){

        return view('admin.adm-edit-item-list');
    }

    // manage wiv
    public function CreateWIV(){

        return view('admin.adm-create-wiv');
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
 }
