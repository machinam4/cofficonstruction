@extends('layouts.base')
@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Projects</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                    <a href="{{Route('home')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Projects</span>
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
                    <!-- WORKS -->
                    <section class="wprt-section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="text-center font-size-28 margin-bottom-10">OUR PROJECTS</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="wprt-subtitle">Browse through the variety of top notch Coffi Construction projects both complete and ongoing.</p>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                                        
                                <div class="col-md-12">
                                    <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="15" data-gapv="15">
                                        <div id="project-filter">
                                            <div data-filter="*" class="cbp-filter-item">
                                                <span>All</span>
                                            </div>
                                            <div data-filter=".architecture" class="cbp-filter-item">
                                                <span>Architecture</span>
                                            </div>
                                            <div data-filter=".building" class="cbp-filter-item">
                                                <span>Bungalows</span>
                                            </div>
                                            <div data-filter=".garden" class="cbp-filter-item">
                                                <span>Apartments</span>
                                            </div>
                                            <div data-filter=".interior" class="cbp-filter-item">
                                                <span>Interior</span>
                                            </div>
                                        </div><!-- /#project-filter -->

                                        <div id="projects" class="cbp">
                                            @if ($projects->count())
                                               @foreach ($projects as $project)
                                                <div class="cbp-item {{$project->category}}">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-honey">
                                                                <img src="{{Storage::url($project->image1)}}" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a href="{{Route('details', $project)}}">{{ $project->title}}</a></h2>
                                                                        <p>{{ $project->category}}</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="{{Storage::url($project->image1)}}" data-title="{{ strtoupper($project->title)}}">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.cbp-item -->
                                               @endforeach
                                           @else
                                           There are no Projects available                                              
                                           @endif
                                        </div><!-- /#projects -->
                                    </div><!--/.wprt-project -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-pagination clearfix">
                                        {{$projects->links()}}
                                        {{-- <ul class="page-numbers">
                                            <li><span class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="next page-numbers" href="#"><span class="fa fa-angle-right"></span></a></li>
                                        </ul> --}}
                                    </div>
                    
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection