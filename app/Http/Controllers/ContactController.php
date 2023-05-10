<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function sendEmail(ContactFormRequest $request)
    {
        Mail::to('arkhkh@outlook.com')->send(new ContactFormMail($request->all()));
        return redirect()->back()->with('message', 'We will Be In Contact Soon');
    }
}
