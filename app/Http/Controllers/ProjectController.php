<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.listProjects', [
            'projects' => $projects
        ]);
        // return view('admin.listProjects');
    }

    public function imgResize($image, $width = 770, $height = 529)
    {
        $input['imagename'] = time() . rand(9999, null) . '.' . $image->extension();

        $filePath = Storage::path('/public/uploads');
        $img = Image::make($image);
        $img->resize($width, $height)->save($filePath . '/' . $input['imagename']);

        // $filePath = public_path('/storage/uploads');
        // $img->move($filePath, $input['imagename']);

        return '/uploads' . '/' . $input['imagename'];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'client' => 'required',
            'builder' => 'required',
            'architect' => 'required',
            'budget' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        Project::firstOrCreate(
            ['title' => $request->title],
            [
                'category' => $request->category,
                'client' => $request->client,
                'builder' => $request->builder,
                'budget' => $request->budget,
                'architect' => $request->architect,
                'description' => $request->description,
                'image1' => $this->imgResize($request->file('image1')),
                'image2' => $this->imgResize($request->file('image2')),
                'image3' => $this->imgResize($request->file('image3')),
                'image4' => $this->imgResize($request->file('image4')),
                'image5' => $this->imgResize($request->file('image5')),
            ]
        );
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // $project = Project::findorFail($project);
        return view('admin.editProject', [
            'project' => $project
        ]);
    }

    public function imgReplace($image, $width = 770, $height = 529)
    {
        $input['imagename'] = $image->getClientOriginalName();

        $filePath = Storage::path('/public/uploads');
        $img = Image::make($image);
        $img->resize($width, $height)->save($filePath . '/' . $input['imagename']);

        // $filePath = public_path('/storage/uploads');
        // $img->move($filePath, $input['imagename']);

        return '/uploads' . '/' . $input['imagename'];
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->title = $request->title;
        $project->category = $request->category;
        $project->description = $request->description;
        $project->architect = $request->architect;
        $project->client = $request->client;
        $project->builder = $request->builder;
        $project->budget = $request->budget;
        // $project->image1 = $this->imgReplace($request->file('image1'));
        // $project->image2 = $this->imgReplace($request->file('image2'));
        // $project->image3 = $this->imgReplace($request->file('image3'));
        // $project->image4 = $this->imgReplace($request->file('image4'));
        // $project->image5 = $this->imgReplace($request->file('image5'));
        $project->save();
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete(['/public' . $project->image1, '/public' . $project->image2, '/public' . $project->image3, '/public' . $project->image4, '/public' . $project->image5]);
        $project->delete();
        return back();
    }
}
