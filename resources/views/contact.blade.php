@extends('layouts.base')

@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Contact Us</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                    <a href="{{Route('home')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Contact Us</span>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.401768911258!2d36.82110934712179!3d-1.2922804212075905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1599d55c0e73%3A0x590bb0173444ea7!2sCoffi%20Investments%20Ltd!5e0!3m2!1sen!2ske!4v1615474576800!5m2!1sen!2ske" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        {{-- <div id="gmap" class="wprt-map-1"></div> --}}
                        {{-- <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div> --}}

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-center margin-bottom-20">GET IN TOUCH WITH US</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <h5>Address</h5>
                                    <p>1127 Ngara, 00600 Ngara,<br> Nairobi</p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>Phone number</h5>
                                    <p>+254 (020) 800-029 <br>+254 (720) 277-408</p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>E-mail address</h5>
                                    <a href="mailto:cofficonstruction@gmail.com">cofficonstruction@gmail.com</a>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-8">
                                    <form class="wprt-contact-form" method="post" action="http://vprowand.com/html5/construction/demo/includes/contact/contact-process.php">
                                        <div class="inner">
                                            <div class="left-side">
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="1" placeholder="Name *" name="name" id="name" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="email" value="" tabindex="2" placeholder="Email *" name="email" id="email" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="4" placeholder="Subject *" name="subject" id="subject" required>
                                                </div>
                                                <div class="message-wrap">
                                                    <textarea class="" tabindex="5" placeholder="Message *" name="message" id="message" required></textarea>
                                                </div>
                                                <div class="send-wrap">
                                                    <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- /.wprt-contact-form -->
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
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