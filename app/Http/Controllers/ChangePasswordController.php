<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function updatePassword(Request $request){
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|password',
            'new_password' => 'required|min:6|different:current_password',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the current password matches the entered current password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
        }

        // Check if the new password is the same as the current password
        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->withErrors(['new_password' => 'The new password must be different from the current password.'])->withInput();
        }

        // Update the user's password
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->back()->with('toastApproveWiv', 'Password changed successfuly');
    }
}
