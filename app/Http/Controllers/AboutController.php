<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }
}
