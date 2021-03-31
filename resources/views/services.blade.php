@extends('layouts.base')

@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Services</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                    <a href="{{Route('home')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Services</span>
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
                    <!-- SERVICES -->
                    <section class="wprt-section services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                                        
                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-drawing"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Construction</a></h3>
                                            <p>We coffi Costruction are the best construction agency available in the market with the best engineers and architects.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-engineer"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Architectural</a></h3>
                                            <p>The best floor plans and architectural plans designed at coffi construction are top notch and distinguishable in the market.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-drawing-compass"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Design</a></h3>
                                            <p>Coffi Construction boast at having the best talented designers in the market in the accuracy and uniqueness of their designs. </p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-drill-2"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Supply</a></h3>
                                            <p>Supply of building and finishing materials, coffi construction gets you the best quality materials at such an affordable price.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-light-bulb"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Interior</a></h3>
                                            <p>Get an iconic look, an award-winning design team, a unique collection and an unrivalled interior design service.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-pipe-11"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Installation</a></h3>
                                            <p>Installation of tiles, bathroom fittings, kitchen sinks, wardrobes and all types of wooden finishes at Coffi Construction.</p>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="92" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- PROMOTION -->
                    <section id="promotion" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="0" data-smobi="0"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">You want the best? Try us ...</h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="{{Route('contact')}}" class="wprt-button white rounded-3px">GET A QUOTE</a></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection