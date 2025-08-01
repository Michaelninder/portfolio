<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('your-email@example.com')->send(new ContactFormMail($validatedData)); // this needs to be set in order for the Mailing to work

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
