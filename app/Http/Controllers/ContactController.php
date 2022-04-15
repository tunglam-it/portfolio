<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function store(ContactRequest $request)
  {
    $contact_form_data = $request->all();
    Mail::to('zonakute1@gmail.com')->send(new ContactFormMail($contact_form_data));
    return redirect()->route('home','/#contact')->with('success',' Your Message has been submitted successfully!!!');
  }
}
