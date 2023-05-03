<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = ContactMessage::all();
      return view('admin.contacts.contact', compact('contacts'));
    }
    public function show($id)
    {
        $contact = ContactMessage::find($id);
       
        return view('admin.contacts.delete-contact', compact('contact'));
    }
    public function destroy($id)
    {
        ContactMessage::destroy($id);
         return redirect()->route('contacts.index')->with('success', 'Message deleted successfully');
    }
}
