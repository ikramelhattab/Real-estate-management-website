<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
class ContactController extends Controller
{
        public function contact()
    {
        return view('contact');
    }

public function contactPost(Request $request)
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    Contact::create($request->all());

    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'bodyMessage' => $request->get('message')
       ), function($message)
   {
       $message->from('bobby@bobbyiliev.com');
       $message->to('bobby@bobbyiliev.com', 'Bobby')->subject('Bobby Site Contect Form');
   });
    return back()->with('success', 'Thank you for contacting me!');
   }


}
