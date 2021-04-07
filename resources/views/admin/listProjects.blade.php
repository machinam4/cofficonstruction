@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-8 mb-2">
                <div class="d-flex color-white-a float-right">
                <a class="btn btn-primary position-relative" href="{{route('admin.projectForm')}}">Add Project</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-image">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Personnels</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Date Added</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($projects->count())
                        @foreach ($projects as $project)
                            <tr>
                        <td class="col-md-2">
                            <img src="{{Storage::url($project->image1)}}" class="img-fluid " alt="Sheep">
                        </td>
                        <td class="col-md-4">
                            <h4>{{ $project->title}} &nbsp; <sub><i>{{ $project->category}}</i></sub></h4>
                            <p>{{ str_limit($project->description, 100)}}</p>
                        </td>
                        <td class="col-md-3">
                            <h6><b>Client:</b> {{ $project->client}}</h6>
                            <h6><b>Architect:</b> {{ $project->architect}}</h6>
                            <h6><b>Builder:</b> {{ $project->builder}}</h6>
                        </td>
                        <td class="col-md-2">
                            <p>Ksh {{ ReadableNumber($project->budget)}}</p>
                        </td>
                        <td class="col-md-2">
                            <p>{{ $project->updated_at->toDateString()}}</p>
                        </td>
                        <td>
                            <div>
                                <form action="{{route('admin.editprojectForm', $project)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-success  mx-2 my-2" type="submit"><i class="fa fa-edit"></i></button>
                                </form>
                            </div>                            <div>
                                <form action="{{route('admin.deleteproject', $project)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger  mx-2 my-2" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    @else
                        <tr class="wow slideInUp animated">
                                <td>There are no Properties Available
                                </td>
                                </tr>
                    @endif
                </tbody>
            </table>
            <div class="mx-auto d-table wow slideInUp animated">
                        {{$projects->links()}}
                    </div>
        </div>
    </div>
</div>
@endsection