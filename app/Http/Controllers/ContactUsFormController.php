<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactUsFormController extends Controller{     
    
    public function index() { 
    return view('ContactUs'); 
  } 

   public function save(Request $request) { 
     $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'phone' => 'required',
         'message' => 'required'
     ]);

     $contact = new Contact;

     $contact->name = $request->name;
     $contact->email = $request->email;
     $contact->phone = $request->phone;
     $contact->message = $request->message;

     $contact->save();

     \Mail::send('contact-email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('phone'),
                 'messages' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('admin@example.com');
               });
     
     return back()->with('success', 'Thank you for contact us! We will reply to you as soon as possible.');

 }
}
