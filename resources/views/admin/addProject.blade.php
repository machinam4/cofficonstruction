@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Add New Project') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.addproject') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-3 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-8">
                                <select id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category">
                                    <option selected>--Select Category--</option>
                                    <option value="architecture">Architecture</option>
                                    <option value="bungalow">Bungalow</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="interior">Interior</option>
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="client" class="col-md-3 col-form-label text-md-right">{{ __('Client') }}</label>

                            <div class="col-md-8">
                                <input id="client" type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{ old('client') }}" required autocomplete="client">

                                @error('client')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="architect" class="col-md-3 col-form-label text-md-right">{{ __('Architect') }}</label>

                            <div class="col-md-8">
                                <input id="architect" type="text" class="form-control @error('architect') is-invalid @enderror" name="architect" value="{{ old('architect') }}" required autocomplete="new-architect">

                                @error('architect')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="builder" class="col-md-3 col-form-label text-md-right">{{ __('Builder') }}</label>

                            <div class="col-md-8">
                                <input id="builder" type="text" class="form-control @error('builder') is-invalid @enderror" name="builder" value="{{ old('builder') }}" required autocomplete="new-builder">

                                @error('builder')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="budget" class="col-md-3 col-form-label text-md-right">{{ __('Budget') }}</label>

                            <div class="col-md-8">
                                <input id="budget" type="number" min="1" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{ old('budget') }}" required autocomplete="new-budget">

                                @error('budget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-8">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="new-description"> {{__('Project Description')}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="image1" class="col-md-3 col-form-label text-md-right">{{ __('Main Image') }}</label>

                            <div class="col-md-8">
                                <input id="image1" type="file" class="form-control @error('image1') is-invalid @enderror" name="image1" required autocomplete="new-image1">

                                @error('image1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="image2" class="col-md-3 col-form-label text-md-right">{{ __('Image 2') }}</label>

                            <div class="col-md-8">
                                <input id="image2" type="file" class="form-control @error('image2') is-invalid @enderror" name="image2" required autocomplete="new-image2">

                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="image3" class="col-md-3 col-form-label text-md-right">{{ __('Image 3') }}</label>

                            <div class="col-md-8">
                                <input id="image3" type="file" class="form-control @error('image3') is-invalid @enderror" name="image3" required autocomplete="new-image3">

                                @error('image3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="image4" class="col-md-3 col-form-label text-md-right">{{ __('Image 4') }}</label>

                            <div class="col-md-8">
                                <input id="image4" type="file" class="form-control @error('image4') is-invalid @enderror" name="image4" required autocomplete="new-image4">

                                @error('image4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="image5" class="col-md-3 col-form-label text-md-right">{{ __('Image 5') }}</label>

                            <div class="col-md-8">
                                <input id="image5" type="file" class="form-control @error('image5') is-invalid @enderror" name="image5" required autocomplete="new-image5">

                                @error('image5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-danger mr-2" type="reset" href="{{route('admin')}} ">cancel</a>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection