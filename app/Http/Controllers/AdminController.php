<?php

namespace App\Http\Controllers;

use App\Project;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private static function meSecureRoute($route)
    {
        if (Auth::user()->name === 'Tycho') {
            return $route;
        } else {
            return 'home';
        }
    }

    public function index()
    {
        return view($this->meSecureRoute('admin.index'));
    }

    public function addProject()
    {
        return view($this->meSecureRoute('admin.addProject'));
    }
    public function postProject(Request $request)
    {
        $this->validate($request, [
            'titel' => ['required'],
            'year' => ['required'],
            'url' => ['required'],
            'smalldescr' => ['required'],
            'descr' => ['required'],
            'company' => ['required'],
        ]);
        DB::table('projects')->insert([
            [
                'titel' => $request->input('titel'), 
                'year' => $request->input('year'),
                'url' => $request->input('url'),
                'smalldescr' => $request->input('smalldescr'),
                'descr' => $request->input('descr'),
                'company' => $request->input('company'),
                'technologies' => implode(", ", $request->input('technologiescheck')),
            ],
        ]);

        return redirect()->back()->withErrors(['Project made successfully!']);
    }
}
