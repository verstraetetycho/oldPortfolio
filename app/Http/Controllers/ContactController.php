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

        return redirect()->back()->withErrors(['Mail sent successfully!']);
    }
}
