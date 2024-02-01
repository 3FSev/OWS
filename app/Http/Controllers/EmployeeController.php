<?php

namespace App\Http\Controllers;

use App\Models\Mrt;
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

        $admins = User::where('role_id', 2)->get();
        $user = Auth::user();

        foreach ($admins as $admin) {
            $notification = new Notification([
                'user_id' => $admin->id,
                'message' => "{$user->name} has receive Wiv({$wiv->wiv_number})",
                'url' => url('/manager/man-wiv-req'),
                'triggered_by' => $user->id,
            ]);
            $notification->save();
        }

        return redirect()->back();
    }
    public function PendingRIV()
    {
        $user = Auth::user()->id;
        $mrts = Mrt::whereNotNull('approved_at')
            ->whereNull('received_at')
            ->where('user_id', $user)
            ->get();

        
        return view('employee.em-pending-mrt', compact('mrts'))->with('success');
    }

    public function AcceptMRT($mrt_id){
        $mrt = Mrt::findOrFail($mrt_id);
        $mrt->received_at = now();
        $mrt->save();

        $admins = User::where('role_id', 2)->get();
        $user = Auth::user();

        foreach ($admins as $admin) {
            $notification = new Notification([
                'user_id' => $admin->id,
                'message' => "{$user->name} has receive MRT({$mrt->mrt_number})",
                'url' => url('/manager/man-mrt-req'),
                'triggered_by' => $user->id,
            ]);
            $notification->save();
        }

        return redirect()->back()->with('success', 'Your mrt request is successfully in recieved!');
    }
    public function ListView()
    {
        $user = Auth::user()->id;
        $wivs = Wiv::whereNotNull('approved_at')
                    ->whereNotNull('received_at')
                    ->where('user_id', $user)
                    ->get();

        return view('employee.em-list', compact('wivs'));
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