<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Http\Requests\ContactRequest;

class ContactMessageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function store(ContactRequest $request)
    {
        $message = ContactMessage::create([
            "email"=> $request->email,
            "subject"=> $request->subject,
            "message"=> $request->message
        ]);
        // update to redirect after ui
        return back()->with('success', 'Thanks for contacting us, we will get back to you soon!');
    }

}
