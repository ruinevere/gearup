<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'agreement' => 'accepted',
        ]);

        // Optionally, save the contact message in the database
        $contactMessage = new ContactMessage();
        $contactMessage->name = $request->input('name');
        $contactMessage->email = $request->input('email');
        $contactMessage->message = $request->input('message');
        $contactMessage->save();

        // Send an email to the support team (or to the user for confirmation)
        Mail::to('support@gearup.com')->send(new \App\Mail\ContactFormSubmitted($contactMessage));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you soon!');
    }
}
