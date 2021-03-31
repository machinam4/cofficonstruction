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

                                    <P>COFFI Construction began as a general works contractor in 2015. Over the years,

                                        the group has undertaken many challenging projects and accumulated skills, know-
                                        how and experiences in design and build solutions, project management services,

                                        building trades and related engineering works.</P>
                                    <P>
                                        Today, COFFI Construction takes on the role of main contractor for small to
                                        medium
                                        size projects and performs project management services to coordinates specialist
                                        trades for industrial/commercial projects. We also provide design inputs and
                                        engineering solutions as value-add services to our clients.</P>
                                    <P>
                                        Our objective is to provide our clients with an “I am assured” experience when
                                        we are

                                        chosen to execute their projects. Our emphasis on clear communication and
                                        follow-
                                        through procedures ensures that client’s objectives are top priority in the
                                        planning

                                        and execution of all our processes.
                                        Our project management and execution philosophy are:
                                        <ul>
                                            <li> create detail schedule and resources plan to meet client’s project
                                                objective,</li>
                                            <li> communicate clearly with all project stakeholders,</li>
                                            <li> track project progress and fine-tune deviations,</li>
                                            <li> supervise closely on quality of work done,</li>
                                            <li> complete and commission the project on time.</li>
                                        </ul>

                                        We take pride in our delivery; thus, our clients can always be assured that only the
                                        most experienced and qualified people are serving them, all the time.</P>

                                    <h3 class="line-height-normal margin-bottom-10">Our Vision:</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>
                                    <P>To be a respectable building contractor delivering beyond expectation, always.
                                        <P>
                                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>
                                            <h3 class="line-height-normal margin-bottom-10">Our Mission:</h3>
                                            <div class="wprt-lines style-1 custom-3">
                                                <div class="line-1"></div>
                                            </div>
                                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>
                                            <P>To procure projects at competitive pricing, provide safe working conditions and
                                                deliver quality work within reasonable time frame.</P>
                                            <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <h3 class="line-height-normal margin-bottom-10">Our Management Team:</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class=" margin-bottom-25">The business is driven by our working directors,
                                        collectively they
                                        accumulated more than 60 years of work experience in the building industry.
                                        They are involved in the business development, procurement, project
                                        management and administration of the company.</p>
                                    <p>
                                        The management team proactively gathers feedback, identifies changes in
                                        business environment, reviews work processes and communicates key
                                        learning points and company policy to all staff at regular meetings.</p>


                                    <h3 class="line-height-normal margin-bottom-10">Our People:</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class=" margin-bottom-25">Our people are crucial in the delivery of our services
                                        and solution to our
                                        clients. In order to ensure that everyone is equipped with the right skill,
                                        knowledge and attitude, a comprehensive training programme is put in place
                                        to constantly upgrade our people in technical and management skills.</p>
                                    <p>
                                        We believe firmly in providing the right training, accredited certification and
                                        practical knowledge for our people, in order for them to execute their duties
                                        and responsibilities confidently. Our aim is to stay relevant to the ever-
                                        changing market place and client’s requirement.</p>


                                    <a class="wprt-button small rounded-3px" href="{{Route('contact')}} ">GET A
                                        QOUTE</a>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection