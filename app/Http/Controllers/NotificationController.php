<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // Mark a specific notification as read
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();

        return response()->json(['message' => 'Notification marked as read.']);
    }
}
