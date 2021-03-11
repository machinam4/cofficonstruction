@extends('layouts.base')

@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">About Us</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                    <a href="{{Route('home')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">About Us</span>
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
                    <!-- GALLERY -->
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    <h2 class="text-center margin-bottom-20">OUR HISTORY & PHILOSOPHY</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit.<br> Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>

                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <h3 class="line-height-normal margin-bottom-10">WHY CHOOSE US</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class=" margin-bottom-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Vestibulum eu libero volutpat, portas quam acc, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam suscipit, elit quis facilisis dictum, diam justo volutpat dui. Cras id justo eget sapien scelerisque lacinia non a eros. In a volutpat magna. Vivamus pretium urna at condimentum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Vestibulum eu libero volutpat, portas quam acc, tempus sem. Cras id justo eget sapien scelerisque lacinia non a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat.</p>

                                    <a class="wprt-button small rounded-3px" href="{{Route('contact')}}">GET A QOUTE</a>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                        <div id="wprt-slider" class="flexslider">
                                            <ul class="slides">
                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/1.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/2.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/3.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/3.jpg" alt="image" />
                                                </li>

                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="assets/img/gallery/4.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="assets/img/gallery/4.jpg" alt="image" />
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="wprt-carousel" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="assets/img/gallery/1-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/2-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/3-s.jpg" alt="image"></li>
                                                <li><img src="assets/img/gallery/4-s.jpg" alt="image"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>


                    <!-- TEAM -->
                    <section class="wprt-section team">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="margin-bottom-10">MEET OUR TEAM</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-team has-bullets bullet-style-1 has-arrows arrow-style-2 arrow-light" data-layout="slider" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="team-wrap" class="cbp">
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/1.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Richard Wagner</h4>
                                                            <div class="position">Civil Engineer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/2.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Sarah Spence</h4>
                                                            <div class="position">Construction Assistant</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/3.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">John Halpern</h4>
                                                            <div class="position">Construction Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/4.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Tommy Atkins</h4>
                                                            <div class="position">Electricians</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/1.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">John Joe</h4>
                                                            <div class="position">Junior Architect</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/2.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Richard Wagner</h4>
                                                            <div class="position">Civil Engineer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/3.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Sarah Spence</h4>
                                                            <div class="position">Construction Assistant</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/4.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">John Halpern</h4>
                                                            <div class="position">Construction Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/1.jpg" alt="image" />
                                                            </div>
                                                             <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Tommy Atkins</h4>
                                                            <div class="position">Electricians</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /#team-wrap -->
                                    </div><!-- /.wprt-team -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
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