<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    }

    public function create()
    {
        //return view('Users.create');
    }

    public function store(UserRequest $request)
    {

        User::create(
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'password' => Hash::make($request['password']),


            ]
        );
        //return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
      
        //return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $data = User::find($id);
       // update if the request has changed or not ************************
        $data->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);


        //return redirect()->route('users.index')->with('success', 'User updated successfully');




    }

    public function destroy($id)
    {
        User::destroy($id);
        // return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
