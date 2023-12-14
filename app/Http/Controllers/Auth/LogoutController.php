<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = Auth::id();

        UserActivity::create([
            'user_id' => $user,
            'name' => 'Logged out',
        ]);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Custom logic after logging out

        return response()->redirectToRoute('login');
    }
}
