<?php

namespace App\Http\Controllers;

use App\Models\Notification;


class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;

        return response()->json(['notifications' => $notifications]);
    }

    public function markAsRead($id)
    {
        $notification = Notification::find($id);

        if ($notification) {
            $notification->markAsRead();
            return response()->json(['status' => 'success']);
        }

        return response()->json(['status' => 'error', 'message' => 'Notification not found.']);
    }


}
