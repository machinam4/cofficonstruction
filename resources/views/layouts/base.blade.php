<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="COFFI Construction began as a general works contractor in 2015. Over the years, the group has undertaken many challenging projects and accumulated skills, know- how and experiences in design and build solutions, project management services, building trades and related engineering works.">
    <meta name="keywords" content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="evoton.co.ke">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css')}}">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/coffi_logo.jpg')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/coffi_logo.jpg')}}">

    <!-- -- css scripts -- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animsition.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vegas.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rev-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rev-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rev-slider/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/woocommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="front-page no-sidebar site-layout-full-width menu-has-cart menu-has-search header-sticky">
    {{-- facebook  --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="hMjPlwqC"></script>


    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">

            <div id="site-header-wrap">
                <!-- Top Bar -->
                <div id="top-bar">
                    <div id="top-bar-inner" class="container">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <span id="top-bar-text">
                                    <i class="fa fa-map-marker"></i>1127 Ngara, 00600 Ngara, Nairobi
                                    <i class="fa fa-phone"></i>+254 (020) 800-029
                                    <i class="fa fa-phone"></i>+254 (720) 277-408
                                </span><!-- /#top-bar-text -->
                            </div><!-- /.top-bar-content -->

                            <div class="top-bar-socials">
                                <div class="inner">
                                    <span class="icons">
                                        <a href="https://www.facebook.com/cofficonstruction" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                        <a href="https://www.instagram.com/coffi_construction/" title="Instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                    </span>
                                </div>
                            </div><!-- /.top-bar-socials -->
                        </div>
                    </div>
                </div><!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header" class="header-front-page style-1">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner">
                            <div id="site-logo" class="clearfix">
                                <div id="site-logo-inner">
                                    {{-- change --}}
                                    <a href="home-hero-slideshow.html" title="Coffi Construction" rel="home" class="main-logo">
                                        <img src="{{ asset('assets/icon/coffi_logo1.png')}}" alt="Coffi Construction" data-retina="{{ asset('assets/icon/coffi_logo1.png')}}" data-width="204" data-height="30">
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li class="menu-item"><a href="{{Route('home')}}">Home</a></li>
                                    <li class="menu-item"><a href="{{Route('services')}}">Services</a></li>
                                    <li class="menu-item"><a href="{{Route('projects')}}">Projects</a></li>
                                    <li class="menu-item"><a href="{{Route('aboutus')}}">About Us</a></li>
                                    <li class="menu-item"><a href="{{Route('contact')}}">Contact</a></li>
                                </ul>
                            </nav><!-- /#main-nav -->
                        </div>
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- /#site-header-wrap -->
            
            @yield('content')
            <!-- Footer -->
            <footer id="footer">
                <div id="footer-widgets" class="container style-1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget widget_about margin-bottom-25">
                                <div class="margin-bottom-35">
                                    <img src="{{ asset('assets/icon/coffi_logo1.png')}}" width="204" height="30" alt="image" />
                                </div>
                                <p>To be a respectable building contractor delivering beyond expectation, always.</p>
                                </section>

                                <section class="widget widget_information">
                                    <ul class="info-wrap">
                                        <li class="address item">1127 Ngara, 00600 Ngara, Nairobi</li>
                                        <li class="phone item">+254 (020) 800-029</li>
                                        <li class="phone item">+254 (720) 277-408</li>
                                        <li class="email item">cofficonstruction@gmail.com</li>
                                    </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_tag_cloud">
                                <h2 class="widget-title">Popular tags</h2>
                                <div class="tagcloud">
                                    <a href="{{Route('aboutus')}}">Architectural</a>
                                    <a href="{{Route('aboutus')}}">Builder</a>
                                    <a href="{{Route('aboutus')}}">Fire</a>
                                    <a href="{{Route('aboutus')}}">Building</a>
                                    <a href="{{Route('aboutus')}}">Garden design</a>
                                    <a href="{{Route('aboutus')}}">Interior</a>
                                    <a href="{{Route('aboutus')}}">Marketing events</a>
                                    <a href="{{Route('aboutus')}}">Coffiinvetments</a>
                                    <a href="{{Route('aboutus')}}">Construction</a>
                                    <a href="{{Route('aboutus')}}">Exterior</a>
                                    <a href="{{Route('aboutus')}}">Highway</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_links">
                                <h2 class="widget-title">Useful links</h2>

                                <ul class="links col2">
                                    <li><a href="{{Route('home')}}">Home</a></li>
                                    <li class="last"><a href="#">Help Center</a></li>
                                    <li><a href="{{Route('projects')}}">Projects</a></li>
                                    <li class="last"><a href="{{Route('aboutus')}}">About Us</a></li>
                                    <li><a href="{{Route('services')}}">Services</a></li>
                                    <li class="last"><a href="{{Route('contact')}}">Contact Us</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="last"><a href="{{Route('aboutus')}}">Company Profile</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_instagram">
                                <div class="fb-page" data-href="https://www.facebook.com/cofficonstruction" data-tabs="timeline,events,messages" data-width="" data-height="360" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cofficonstruction" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cofficonstruction">COFFI Construction</a></blockquote></div>                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Bottom -->
            <div id="bottom" class="clearfix style-1">
                <div id="bottom-bar-inner" class="wprt-container">
                    <div class="bottom-bar-inner-wrap">

                        <div class="bottom-bar-content">
                            <div id="copyright">CONSTRUCTION • ULTIMATE CONSTRUCTION COMPANY.
                            </div><!-- /#copyright -->
                        </div><!-- /.bottom-bar-content -->

                        <div class="bottom-bar-menu">
                            <ul class="bottom-nav">
                                <li><a href="/">HOME</a></li>
                                <li><a href="#/">ABOUT</a></li>
                                <li><a href="#/">SERVICES</a></li>
                                <li><a href="#/">CONTACT</a></li>
                            </ul>
                        </div><!-- /.bottom-bar-menu -->
                    </div>
                </div>
            </div>

        </div><!-- /#page -->
    </div><!-- /#wrapper -->

    <a id="scroll-top">TOP</a>

    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+254 729 484 988", // WhatsApp number
            call: "+254 729 484 988", // Call phone number
            call_to_action: "Message us", // Call to action
            button_color: "#932C8B", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
            pre_filled_message: "Hello, I'm interested in working with you", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/animsition.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/countTo.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fitText.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flexslider.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vegas.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owlCarousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cube.portfolio.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from vprowand.com/html5/construction/demo/home-revolution-slider-full-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 21:26:37 GMT -->

</html>