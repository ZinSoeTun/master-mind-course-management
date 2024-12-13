<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //User function
    //contact form
    public function contactForm(Request $request)
    {

        Validator::make($request->all(), [
            'name' => 'required|max:125',
            'email' => 'required|email',
            'message' => 'required'
        ])->validate();

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        return back()->with(['success' => 'Thanks for sending the message, we will try the best as much as we can!']);
    }

    //Admin function
    //contact list
    public function contactsList()
    {
       $contacts = Contact::paginate(5);
       return view('admin.contact.contactList', compact('contacts'));
    }

    //contact detail
    public function contactDetail($id)
    {
       $contact = Contact::findOrFail($id);
       return view('admin.contact.contactDetail',compact('contact'));
    }

    //delete the contact
    public function contactDele($id)
    {
        Contact::where('id',$id)->delete();
        return back()->with(['success' => 'Contact has been successfully deleted!']);
    }
}
