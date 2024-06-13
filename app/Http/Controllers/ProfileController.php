<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function __invoke(){
        return view('dashboard.profile');
    }

    public function update_password(Request $request)
    {
        // Validate the request data
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        // Check if the current password matches
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        // Redirect with a success message
        return redirect()->back()->with('password_status', 'Password updated successfully.');
    }
}
