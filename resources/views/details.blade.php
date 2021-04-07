@extends('layouts.base')

@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">{{$project->title}}</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                    <a href="{{Route('home')}}" title="Home" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <a href="{{Route('projects')}}" title="Projects" rel="home" class="trail-begin">Projects</a>
                        <span class="sep">/</span>
                        <span class="trail-end">{{$project->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-8">
                                    <div class="wprt-galleries galleries w-770px" data-width="142" data-margin="15">
                                        <div id="wprt-slider" class="flexslider">
                                            <ul class="slides">
                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="{{Storage::url($project->image1)}}"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="{{Storage::url($project->image1)}}" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="{{Storage::url($project->image2)}}"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="{{Storage::url($project->image2)}}" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="{{Storage::url($project->image3)}}"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="{{Storage::url($project->image3)}}" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="{{Storage::url($project->image4)}}"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="{{Storage::url($project->image4)}}" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="{{Storage::url($project->image5)}}"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="{{Storage::url($project->image5)}}" alt="image" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="wprt-carousel" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="{{Storage::url($project->image1)}}" alt="image"></li>
                                                <li><img src="{{Storage::url($project->image2)}}" alt="image"></li>
                                                <li><img src="{{Storage::url($project->image3)}}" alt="image"></li>
                                                <li><img src="{{Storage::url($project->image4)}}" alt="image"></li>
                                                <li><img src="{{Storage::url($project->image5)}}" alt="image"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>

                                    <h4 class="line-height-normal margin-bottom-10">PROJECT DESCRIPTION</h4>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p>{{ $project->description}} </p>

                                    <div class="wprt-lines style-1 custom-4">
                                        <div class="line-1"></div>
                                    </div>

                                    <ul class="wprt-list style-2 accent-color margin-top-30 margin-bottom-30">
                                        <li><strong>Client:</strong> {{ $project->Client}}</li>
                                        <li><strong>Architect:</strong> {{ $project->architect}}</li>
                                        <li><strong>Builder:</strong> {{ $project->builder}}</li>
                                        <li><strong>Budget:</strong> Ksh {{ ReadableNumber($project->budget)}}</li>
                                    </ul>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection