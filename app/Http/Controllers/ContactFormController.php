<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $messages = [
            'clientName.required' => 'We need to know your name!',
            'email.required' => 'not forget your email address!',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'A message is required to submit the form.',
        ];

        $validatedData = $request->validate([
            'clientName' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:10|max:500',
        ], $messages);

        Mail::to('Company_name@gmail.com')->send(new ContactMail($validatedData));
        

        // Here you will handle the form submission, like validating input and sending emails.
        return 'success, Thank you for your message!';
    }
}
