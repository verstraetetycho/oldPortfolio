<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.portfolio');
    }
    public function projects()
    {
        return response()->json(Project::get(), 200);
    }
    public function project($id)
    {
        return response()->json(Project::find($id), 200);
    }
}
