<?php

namespace App\Http\Controllers;

use App\Models\Wiv;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewUserNotification;

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
        return view('employee.em-pending-wiv', compact('wivs'))->with('success','Item successfully received');
    }

    public function ChangePassword(){
        return view('employee.em-change-password');
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
        $user = auth()->user();
        return view('employee.em-item-req', compact('user'));
    }
    public function ReturnItemReq()
    {
        $user = Auth::id();
        $wivs = Wiv::where('user_id', $user)
            ->whereNotNull('approved_at')
            ->whereNotNull('received_at')
            ->get();

        return view('employee.em-return-item-req', compact('wivs'));
    }

    public function sendReqItem(Request $request){
        $user = auth()->user();

        $request = $user->requests()->create([
            'request_type' => $request->input('type'),
            'details' => $request->input('details'),
            'request_status' => 'Waiting for approval',
        ]);

        // Notification
        $managers = User::where('role_id', 3)->get();

        foreach ($managers as $manager) {
            $notification = new Notification([
                'user_id' => $manager->id,
                'message' => 'A new user has registered!',
                'url' => url('/sup-create-user'),
                'triggered_by' => $user->id,
            ]);
            $notification->save();
        }


        return redirect()->back()->with('success', 'Your requested item is successfully in process!');
        // ->with('success', 'Your returned item is successfully in process!')
    }
}