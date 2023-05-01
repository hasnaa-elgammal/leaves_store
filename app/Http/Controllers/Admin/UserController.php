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
        return view('admin.users.users', compact('users'));
    }

    public function create()
    {
        return view('admin.users.add-user');
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
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
      
        return view('admin.users.delete-user', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
      
        return view('admin.users.edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'mobile_number'=> 'required',
            'email' => 'required|email',
        ]);
        $data = User::find($id);
        if($request->password)
        {
            $data->update([
                'password' => Hash::make($request['password']),
            ]);
            
        }
        $data->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->route('users.index')->with('success', 'User updated successfully');




    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
