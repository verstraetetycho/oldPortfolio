<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
}
