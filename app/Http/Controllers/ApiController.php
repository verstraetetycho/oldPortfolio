<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Technology;
use App\Category;

class ApiController extends Controller
{
    public function projects()
    {
        return response()->json(Project::get(), 200);
    }
    public function project($id)
    {
        return response()->json(Project::find($id), 200);
    }
    public function technologies()
    {
        return response()->json(Technology::get(), 200);
    }
    public function technologieByCateg($categ)
    {
        return response()->json(Technology::where('type', $categ)->get(), 200);
    }
    public function categories()
    {
        return response()->json(Category::get(), 200);
    }
}
