@extends('layouts.base')

@section('content')
<!-- Hero Background SlideShow -->
            <div id="hero-section" data-number="3" data-image-1="assets/img/coffi/cofficonstruction2.webp" data-image-2="assets/img/coffi/cofficonstruction3.webp" data-image-3="assets/img/coffi/cofficonstruction4.webp" data-effect="fade">
                <div class="hero-content">
                    <div class="hero-title">
                        <h1>WE DESIGN.</h1>
                        <h1>WE SUPPLY.</h1>
                        <h1>WE FIT.</h1>
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
                                                    <div class="thumb"><img src="assets/img/coffi/cofficonstruction.webp" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Architectural and structural drawings</a></h3>
                                                        <p class="desc">We are equiped with skilled and talented architects with high qualifications to deliver you the best design for your construction project.</p>
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
                                                    <div class="thumb"><img src="assets/img/coffi/cofficonstruction6.webp" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Construction &amp; Recconstruction</a></h3>
                                                        <p class="desc">With our top engineers we assure the best construction from the ground leveling, foundation to the finishing. Top notch constructions and reconstruction is our expertise.</p>
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
                                                    <div class="thumb"><img src="assets/img/coffi/cofficonstruction7.webp" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="#">Supply &amp; Installation</a></h3>
                                                        <p class="desc">We supply buiding materials such as tiles, bathroom fittings, kitchen sinks, wardrobes and all types of wooden finishes.
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

                                                <p class="wprt-subtitle">We Coffi Construction offer the best in all contruction fields, architectural and designs. You want the best? Try us.</p>
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
                                                    <h3><a href="#">SUPPLY</a></h3>
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
                                                    <h3><a href="#">DESIGN</a></h3>
                                                </div>
                                            </div>
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
                                                   You want the best? Try us...</h2>
                                                <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                            </div><!-- /.col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="text-right text-center-mobile"><a href="{{route('contact')}}" class="wprt-button white rounded-3px">GET A QUOTE</a></div>
                                            </div><!-- /.col-md-4 -->

                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </section>

                                
                                <!-- WHY US-->
                                <section id="why-us" class="wprt-section">
                                    <div class="container-fluid no-padding">
                                        <div class="row no-margin">
                                            <div class="col-md-6 no-padding">
                                                <img src="assets/img/coffi/cofficonstruction5.webp" alt="image">
                                            </div><!-- /.col-md-6 -->

                                            <div class="col-md-6 no-padding">
                                                <div class="wprt-content-box style-2">
                                                    <h2 class="margin-bottom-20">WHY CHOOSE US?</h2>
                                                    <div class="wprt-lines style-1 custom-2">
                                                        <div class="line-1"></div>
                                                    </div>
                                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                                    <div class="wprt-toggle bg-white active style-1">
                                                        <h3 class="toggle-title">Employees have many years of experience
                                                        </h3>
                                                        <div class="toggle-content">Coffi Construction boast at their high number of qualified and experienced architects, engineers and project manager with many completed and outstanding buildings in different regions of the country.</div>
                                                    </div>

                                                    <div class="wprt-toggle bg-white style-1">
                                                        <h3 class="toggle-title">Quality construction continues after
                                                            the project</h3>
                                                        <div class="toggle-content">To ensure safety and quality of the constructions, Coffi Constructions does quality checkups before, during the construction and even after the construction to ensure customer satisfaction.</div>
                                                    </div>

                                                    <div class="wprt-toggle bg-white style-1">
                                                        <h3 class="toggle-title">Employees are continually trained on
                                                            safety issues</h3>
                                                        <div class="toggle-content">At Coffi Construction, employee training doesnt end at hiring, continous trainings are done to ensure safety and new tecnology and skills are arbsorbed to adapt to the changing and evolving engineering world.</div>
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