<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Captcha;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'g-recaptcha-response' => new Captcha()
        ]);

        $name = $request->input('name');
        $fname = $request->input('fname');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Contact Form <form@tychoverstraete.be>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        $bericht = "<p>Bericht ($subject) van $fname $name via het contactformulier:</p><br><br><p>$message</p><br><br><p>email: $email</p>";

        if (mail("tycho@tychoverstraete.be", "$subject", "$bericht", "$headers")) {
            return redirect()->back()->withErrors(['Mail sent successfully!']);
        }
        else {
            return redirect()->back()->withErrors(['Mail was not sent successfully, please try again!']);
        }
    }
}
