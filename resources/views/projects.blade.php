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

                                    <h2 class="text-center font-size-28 margin-bottom-10">PORTFOLIO GRID FULL</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="wprt-subtitle">Cras id justo eget sapien scelerisque lacinia non a eros. In a volutpat magna. Vivamus pretium urna at condimentum porta. Phasellus mollis mauris dolor, a tincidunt mauris fringilla.</p>

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
                                                <span>Building</span>
                                            </div>
                                            <div data-filter=".garden" class="cbp-filter-item">
                                                <span>Garden</span>
                                            </div>
                                            <div data-filter=".interior" class="cbp-filter-item">
                                                <span>Interior</span>
                                            </div>
                                            <div data-filter=".office" class="cbp-filter-item">
                                                <span>Office</span>
                                            </div>
                                            <div data-filter=".workspace" class="cbp-filter-item">
                                                <span>Workspace</span>
                                            </div>
                                        </div><!-- /#project-filter -->

                                        <div id="projects" class="cbp">
                                            <div class="cbp-item architecture interior workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-zoe">
                                                            <img src="assets/img/projects/1.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/1-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item building office workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-honey">
                                                            <img src="assets/img/projects/2.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/2-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item architecture garden interior">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-oscar">
                                                            <img src="assets/img/projects/3.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/3-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item building interior workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-sadie">
                                                            <img src="assets/img/projects/4.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/4-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item garden office workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-zoe">
                                                            <img src="assets/img/projects/5.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/5-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item architecture garden office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-honey">
                                                            <img src="assets/img/projects/6.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/6-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item architecture garden office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-oscar">
                                                            <img src="assets/img/projects/7.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/7-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->

                                            <div class="cbp-item architecture garden office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-sadie">
                                                            <img src="assets/img/projects/8.jpg" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a   href="{{Route('details')}}">LUXURY BUILDINGS</a></h2>
                                                                    <p>Construction</p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="assets/img/projects/8-full.html" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->
                                        </div><!-- /#projects -->
                                    </div><!--/.wprt-project -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-pagination clearfix">
                                        <ul class="page-numbers">
                                            <li><span class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="next page-numbers" href="#"><span class="fa fa-angle-right"></span></a></li>
                                        </ul>
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