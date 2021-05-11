<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('contact');
  }

  public function sendMail(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|string',
      'email' => 'required|string|email',
      'subject' => 'required|string',
      'message_content' => 'required|string',
    ]);

    Mail::send('emails/contact-email',
    array(
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'subject' => $request->get('subject'),
      'message_content' => $request->get('message_content'),
    ), function($message) use ($request){
      $message->from($request->email);
      $message->to(env('CONTACT_EMAIL'));
      $message->subject(config('app.name').' - Contact Email');
    });

    return back()->with('success', 'Thank you for your message!');
  }
}
