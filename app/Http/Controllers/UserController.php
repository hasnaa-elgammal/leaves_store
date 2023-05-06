<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function edit()
    {
        return view('customer.edit_profile')->with('user', auth()->user());
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->back()->with('message', 'Profile updated successfully');
    }
}
