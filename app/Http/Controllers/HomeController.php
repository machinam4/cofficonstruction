<?php

namespace App\Http\Controllers;

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
        return view('home');
    }
    public function services()
    {
        return view('services');
    }
    public function projects()
    {
        return view('projects');
    }
    public function details()
    {
        return view('details');
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
