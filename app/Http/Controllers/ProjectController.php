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
    public function project($project)
    {
        $projectZoek = Project::where('titel', $project)->get();
        return view('pages.project', compact('projectZoek'));
    }
}
