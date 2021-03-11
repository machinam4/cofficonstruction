@extends('layouts.base')

@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Project Details</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                    <a href="{{Route('home')}}" title="Home" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <a href="{{Route('projects')}}" title="Projects" rel="home" class="trail-begin">Projects</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Project Details</span>
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
                                                    <a class="zoom" href="assets/img/gallery/1-b.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/1-b.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/2-b.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/2-b.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/3-b.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/3-b.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/4-b.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/4-b.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/1-b.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/1-b.jpg" alt="image" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="wprt-carousel" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="assets/img/gallery/1-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/2-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/3-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/4-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/1-s.jpg" alt="image"></li>
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

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Vestibulum eu libero volutpat, portas quam acc, tempus sem. Donec sodales quam id lorem lobortis, vitae. </p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit.</p>

                                    <div class="wprt-lines style-1 custom-4">
                                        <div class="line-1"></div>
                                    </div>

                                    <ul class="wprt-list style-2 accent-color margin-top-30 margin-bottom-30">
                                        <li><strong>Client:</strong> ThemeForest Builder</li>
                                        <li><strong>Architect:</strong> Richardson and Sandra</li>
                                        <li><strong>Builder:</strong> GraphicRiver Builder Corporate</li>
                                        <li><strong>Budget:</strong> $1 250 000,00</li>
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