<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::latest()->paginate(8);
        return view('home', [
            'projects' => $projects
        ]);
    }
    public function services()
    {
        return view('services');
    }
    public function projects()
    {
        $projects = Project::latest()->paginate(8);
        return view('projects', [
            'projects' => $projects
        ]);
    }
    public function details(Project $project)
    {
        return view('details', [
            'project' => $project
        ]);
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function contact()
    {
        return view('contact');
    }
}
