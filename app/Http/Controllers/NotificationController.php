<?php

namespace App\Http\Controllers;

use App\Models\Notification;


class NotificationController extends Controller
{
    public function index()
    {
        // Fetch unread notifications for the authenticated user
        $notifications = auth()->user()->unreadNotifications;

        return response()->json(['notifications' => $notifications]);
    }

    public function markAsRead($id)
    {
        // Find the notification by ID and mark it as read
        $notification = Notification::find($id);

        if ($notification) {
            $notification->markAsRead();
            return response()->json(['status' => 'success']);
        }

        return response()->json(['status' => 'error', 'message' => 'Notification not found.']);
    }


}
