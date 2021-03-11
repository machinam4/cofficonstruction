@extends('layouts.base')

@section('content')
<!-- Hero Background SlideShow -->
            <div id="hero-section" data-number="3" data-image-1="assets/img/slider/1.jpg" data-image-2="assets/img/slider/2.jpg" data-image-3="assets/img/slider/3.jpg" data-effect="fade">
                <div class="hero-content">
                    <div class="hero-title">
                        <h1>BUILDER &amp; REPAIR.</h1>
                        <h1>BUILD SMART BUILDINGS.</h1>
                        <h1>WE ARE CONSTRUCTION.</h1>
                    </div>

                    <div class="links">
                        <a class="wprt-button big rounded-3px" href="{{Route('aboutus')}}">LEARN MORE</a>
                        <a class="link" href="{{Route('projects')}}">OUR PROJECTS</a>
                    </div>
                </div>

                <a class="arrow scroll-target" href="#site-content"></a>
            </div>

    <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <!-- Intro -->
                                <section class="wprt-section intro">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                            </div><!-- /.col-md-12 -->

                                            <div class="col-md-4">

                                                <div class="service-item clearfix text-center">
                                                    <div class="thumb"><img src="assets/img/services/4.jpg" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Construction
                                                                Consultant</a></h3>
                                                        <p class="desc">Sed sit amet sapien sit amet odio lobortis
                                                            ullamcorper quis vel nisl. Nam blandit maximus tristique.
                                                            Vivamus enim quam, tincidunt vel blandit eu, molestie eget
                                                            arcu.</p>
                                                        <div class="link">
                                                            <a href="{{Route('services')}}" class="wprt-button small rounded-3px">READ
                                                                MORE</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="service-item clearfix text-center">
                                                    <div class="thumb"><img src="assets/img/services/5.jpg" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Resconstruction
                                                                Services</a></h3>
                                                        <p class="desc">Sed sit amet sapien sit amet odio lobortis
                                                            ullamcorper quis vel nisl. Nam blandit maximus tristique.
                                                            Vivamus enim quam, tincidunt vel blandit eu, molestie eget
                                                            arcu.</p>
                                                        <div class="link">
                                                            <a href="{{Route('services')}}" class="wprt-button small rounded-3px">READ
                                                                MORE</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="service-item clearfix text-center">
                                                    <div class="thumb"><img src="assets/img/services/6.jpg" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Architectural
                                                                Design</a></h3>
                                                        <p class="desc">Sed sit amet sapien sit amet odio lobortis
                                                            ullamcorper quis vel nisl. Nam blandit maximus tristique.
                                                            Vivamus enim quam, tincidunt vel blandit eu, molestie eget.
                                                        </p>
                                                        <div class="link">
                                                            <a href="{{Route('services')}}" class="wprt-button small rounded-3px">READ
                                                                MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col-md-4 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section>


                                <!-- WORKS -->
                                <section id="works" class="wprt-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                                <h2 class="text-center margin-bottom-20">RECENT WORKS</h2>
                                                <div class="wprt-lines style-2 custom-1">
                                                    <div class="line-1"></div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->

                                    <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="0" data-gapv="0">
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
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item building office workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-honey">
                                                                <img src="assets/img/projects/2.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item architecture garden interior">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-oscar">
                                                                <img src="assets/img/projects/3.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item building interior workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-sadie">
                                                                <img src="assets/img/projects/4.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item garden office workspace">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-zoe">
                                                                <img src="assets/img/projects/5.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item architecture garden office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-honey">
                                                                <img src="assets/img/projects/6.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item architecture garden office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-oscar">
                                                                <img src="assets/img/projects/7.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->

                                            <div class="cbp-item architecture garden office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                            <figure class="effect-sadie">
                                                                <img src="assets/img/projects/8.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank" href="{{Route('aboutus')}}">LUXURY
                                                                                BUILDINGS</a></h2>
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
                                            </div>
                                            <!--/.cbp-item -->
                                        </div><!-- /#projects -->
                                    </div>
                                    <!--/.wprt-project -->
                                </section>

                                <!-- OFFER -->
                                <section id="features" class="wprt-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                                <h2 class="text-center margin-bottom-20">WHAT WE OFFER</h2>
                                                <div class="wprt-lines style-2 custom-1">
                                                    <div class="line-1"></div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                                <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu
                                                    non placerat. Praesent nibh massa varius.</p>
                                                <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                            </div><!-- /.col-md-12 -->

                                            <div class="col-md-2">
                                                <div class="wprt-icon-text">
                                                    <div class="icon">
                                                        <i class="icon-o-helmet"></i>
                                                    </div>
                                                    <h3><a href="#">CONSTRUCTION</a></h3>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="wprt-icon-text">
                                                    <div class="icon">
                                                        <i class="icon-o-paint-roller"></i>
                                                    </div>
                                                    <h3><a href="#">RENOVATION</a></h3>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="wprt-icon-text">
                                                    <div class="icon">
                                                        <i class="icon-o-ruler-2"></i>
                                                    </div>
                                                    <h3><a href="#">CONSULTING</a></h3>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="wprt-icon-text">
                                                    <div class="icon">
                                                        <i class="icon-o-tools-1"></i>
                                                    </div>
                                                    <h3><a href="#">CONSTRUCT</a></h3>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="wprt-icon-text">
                                                    <div class="icon">
                                                        <i class="icon-o-drawing-1"></i>
                                                    </div>
                                                    <h3><a href="#">ARCHITECTURE</a></h3>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="wprt-icon-text">
                                                    <div class="icon">
                                                        <i class="icon-o-light-bulb-1"></i>
                                                    </div>
                                                    <h3><a href="#">ELECTRICAL</a></h3>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="wprt-spacer" data-desktop="118" data-mobi="80" data-smobi="50"></div>

                                                <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                                    <div class="icon-wrap font-size-45">
                                                        <span class="dd-icon icon-drill-2"></span>
                                                    </div>
                                                    <div class="content-wrap">
                                                        <h3 class="dd-title font-size-18"><a href="#">Prepair
                                                                Services</a></h3>
                                                        <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec
                                                            sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                                    </div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="20"></div>

                                                <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                                    <div class="icon-wrap font-size-35">
                                                        <span class="dd-icon icon-tap-1"></span>
                                                    </div>
                                                    <div class="content-wrap">
                                                        <h3 class="dd-title font-size-18"><a href="#">Creative
                                                                Plumbing</a></h3>
                                                        <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec
                                                            sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="wprt-spacer" data-desktop="118" data-mobi="30" data-smobi="20"></div>

                                                <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                                    <div class="icon-wrap font-size-35">
                                                        <span class="dd-icon icon-paint-roller-1"></span>
                                                    </div>
                                                    <div class="content-wrap">
                                                        <h3 class="dd-title font-size-18"><a href="#">Wall Painting</a>
                                                        </h3>
                                                        <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec
                                                            sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                                    </div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="20"></div>

                                                <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                                    <div class="icon-wrap font-size-35">
                                                        <span class="dd-icon icon-roof"></span>
                                                    </div>
                                                    <div class="content-wrap">
                                                        <h3 class="dd-title font-size-18"><a href="#">Metal Roofing</a>
                                                        </h3>
                                                        <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec
                                                            sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                                    </div>
                                                </div>

                                                <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="20"></div>
                                            </div><!-- /.col-md-4 -->

                                            <div class="col-md-4">
                                                <img src="assets/img/man.png" alt="image" />
                                            </div><!-- /.col-md-4 -->

                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section>

                                <!-- PROMOTION -->
                                <section id="promotion" class="wprt-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="wprt-spacer" data-desktop="8" data-mobi="0" data-smobi="0">
                                                </div>
                                                <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">
                                                    Contractors & Construction Managers Since 1981</h2>
                                                <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                            </div><!-- /.col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="text-right text-center-mobile"><a href="#" class="wprt-button white rounded-3px">GET A QUOTE</a></div>
                                            </div><!-- /.col-md-4 -->

                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section>

                                
                                <!-- WHY US-->
                                <section id="why-us" class="wprt-section">
                                    <div class="container-fluid no-padding">
                                        <div class="row no-margin">
                                            <div class="col-md-6 no-padding">
                                                <img src="assets/img/group.jpg" alt="image">
                                            </div><!-- /.col-md-6 -->

                                            <div class="col-md-6 no-padding">
                                                <div class="wprt-content-box style-2">
                                                    <h2 class="margin-bottom-20">WHY CHOOSE US?</h2>
                                                    <div class="wprt-lines style-1 custom-2">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                                    <div class="wprt-toggle bg-white style-1">
                                                        <h3 class="toggle-title">Employees have many years of experience
                                                        </h3>
                                                        <div class="toggle-content">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. In a metus pellentesque,
                                                            scelerisque ex sed, volutpat nisi. Curabitur tortor mi,
                                                            eleifend ornare lobortis non. Nulla porta purus quis iaculis
                                                            ultrices. Proin aliquam sem at nibh hendrerit sagittis.
                                                            Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                            vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                                    </div>

                                                    <div class="wprt-toggle bg-white active style-1">
                                                        <h3 class="toggle-title">Quality construction continues after
                                                            the project</h3>
                                                        <div class="toggle-content">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. In a metus pellentesque,
                                                            scelerisque ex sed, volutpat nisi. Curabitur tortor mi,
                                                            eleifend ornare lobortis non. Nulla porta purus quis iaculis
                                                            ultrices. Proin aliquam sem at nibh hendrerit sagittis.
                                                            Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                            vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                                    </div>

                                                    <div class="wprt-toggle bg-white style-1">
                                                        <h3 class="toggle-title">We use technology to do the job more
                                                            quickly</h3>
                                                        <div class="toggle-content">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. In a metus pellentesque,
                                                            scelerisque ex sed, volutpat nisi. Curabitur tortor mi,
                                                            eleifend ornare lobortis non. Nulla porta purus quis iaculis
                                                            ultrices. Proin aliquam sem at nibh hendrerit sagittis.
                                                            Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                            vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                                    </div>

                                                    <div class="wprt-toggle bg-white style-1">
                                                        <h3 class="toggle-title">Employees are continually trained on
                                                            safety issues</h3>
                                                        <div class="toggle-content">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. In a metus pellentesque,
                                                            scelerisque ex sed, volutpat nisi. Curabitur tortor mi,
                                                            eleifend ornare lobortis non. Nulla porta purus quis iaculis
                                                            ultrices. Proin aliquam sem at nibh hendrerit sagittis.
                                                            Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                            vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                                    </div>
                                                </div><!-- /.wprt-content-box -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                </section>

                            </div><!-- /.page-content -->
                        </div>
                    </div>
                </div>
            </div>

@endsection