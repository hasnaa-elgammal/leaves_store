<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function edit()
    {
        $u=User::all();
        return response()->json($u,200);

        // return view('Users.edit')->with('user',auth()->user());
    }
    public function Update(UpdateProfileRequest $request,$user_id)
    {
        $user=Auth::user();
        $user->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'role'=>$request->role,
            'password'=>Hash::make($request->password),
            'updated_at' => now()
        ]);
        return 'updated';
    }
}
