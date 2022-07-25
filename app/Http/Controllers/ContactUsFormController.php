<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller
{   public function createForm(Request $request){
    return view('contact');
}
    //Store Contact Form
    public function ContactUsForm (Request $request){
    //Form Validation
    $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|regex:/^[0-9\s\-\+\(\)]*)$/|min:10',
        'message'=>'required'
    ]); 
    $contact = new Contact;

    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone_number;
    $contact->message = $request->message;

    $contact->save();
    return back()->with('Success','We have received your message and would like to thank you for writing to us.');
    }
}
