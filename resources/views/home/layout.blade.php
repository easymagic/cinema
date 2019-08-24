<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edukin</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="{{ url('stylesheet/font-awesome.css') }}"> 
    <link rel="stylesheet" href="{{ url('stylesheet/animate.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/style.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/jquery-fancybox.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/flexslider.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/jquery.mCustomScrollbar.min.css') }}">
    
    <link href="{{ url('icon/favicon.ico') }}" rel="shortcut icon">
</head>
<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrap-header">
        <header class="header flat-header lh-header header-style1">
            <div class="site-header-inner">
                <div class="container">
                    <div id="logo" class="logo" style="margin-bottom: 0;">
                        {{-- <a href="index.html"><img src="images/logo/02.png" alt="images"></a> --}}
                        <div style="
                        font-size: 48px;
                        font-weight: bold;
                        color: #fff;
                        letter-spacing: 10px;
                        text-shadow: 2px 2px #444;

                    ">
                           DCL
                        </div>

                        <div style="
                        color: #fff;
                        font-size: 11px;
                        /* background-color: #5f5a5a; */
                        display: inline-block;
                        /* margin-top: 9px; */
                        border-radius: 10px;
                        text-shadow: 2px 2px #444;
                    ">
                            Dolphins Cinema Ltd
                        </div>
                        <div style="
                        color: #fff;
                        font-style: italic;
                        letter-spacing: 2px;
                        word-spacing: 4px;
                        text-shadow: 2px 2px #444;
                        font-size: 13px;
                    ">
                            coming soon 2020...
                        </div>
                    </div>
                    <div class="mobile-button"><span></span></div>
                    <div class="header-menu">
                            {{-- coming soon 2020... --}}
                        <nav id="main-nav" class="main-nav">
                            <ul class="menu">
                                <li><a href="#">Home</a>
                                    
                                    {{-- <ul class="sub-menu">
                                        <li class="menu-item active"><a href="index.html">Home 1</a></li>
                                        <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                        <li class="menu-item"><a href="home3.html">Home 3</a></li>
                                        <li class="menu-item"><a href="home4.html">Home 4</a></li>
                                        <li class="menu-item"><a href="home5.html">Home 5</a></li>
                                    </ul> --}}
                                    
                                    <!-- sub-menu -->
                                </li>
                                <li><a href="#">Interiors & Exteriors</a>

                                    {{-- <ul class="sub-menu">
                                        <li class="menu-item"><a href="course.html">Course</a></li>
                                        <li class="menu-item"><a href="course-list.html">Course list</a></li>
                                        <li class="menu-item"><a href="course-single.html">Course single</a></li>
                                    </ul> --}}
                                    
                                    <!-- sub-menu -->
                                </li>

                                {{-- <li><a href="#">Explore</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about.html">About</a></li>
                                    </ul>
                                </li> --}}

                                <!-- sub-menu -->
                                
                                {{-- <li><a href="#">Degrees</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                                        <li class="menu-item"><a href="blog-single.html">Blog single</a></li>
                                    </ul>
                                </li> --}}

                                <!-- sub-menu -->
                                
                                {{-- <li class="nav-sing">
                                    <a class="sing-in" href="#">Sing In</a>
                                    <a class="sing-up" href="#">Sing Up</a>
                                </li> --}}

                            </ul>
                        </nav>
                    </div> 
                </div>
            </div>
        </header><!-- header -->
    </div><!-- wrap-header -->
    


    @yield('content')




    <footer id="footer" class="footer-type1">
        <div class="form-send-email">
            <div class="container">                
                <form action="#" class="form-send">
                    <input type="search" placeholder="Enter your email ...">
                    <button class="btn send-button bg-clff5f60">
                        Send
                    </button>
                </form>                
            </div>
        </div>
        <div id="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-footer">
                       <div class="logo-footer">
                           <img src="images/logo/04.png" alt="images">
                       </div>
                    </div>

                    @yield('boardOfMembers')


                    <div class="col-lg-2 col-media">
                        <h3 class="widget widget-title">
                            Social Media
                        </h3>
                        <ul class="widget-social-media">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom" class="bottom-type1 clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">
                            © 
                            <span class="text-year">
                                2018
                            </span>
                            <span class="text-name">
                                Roy Design.
                            </span>
                            <span class="license">
                                <a href="#">All Rights Reserved</a>
                            </span>
                        </div>
                    </div>
                    <div class="bottom-bar-menu">
                        <ul class="bottom-nav">
                            <li class="menu-item"><a href="#">About Company</a></li>
                            <li class="menu-item"><a href="#">Privacy Policy</a></li>
                            <li class="menu-item"><a href="#">Help Center</a></li>
                            <li class="menu-item"><a href="#">Terms</a></li>
                            <li class="menu-item"><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->
    
    <script src="{{ url('javascript/jquery.min.js') }}"></script>
    <script src="{{ url('javascript/rev-slider.js') }}"></script>
    <script src="{{ url('javascript/plugins.js') }}"></script>
    <script src="{{ url('javascript/jquery-countTo.js') }}"></script>
    <script src="{{ url('javascript/jquery-ui.js') }}"></script>
    <script src="{{ url('javascript/jquery-fancybox.js') }}"></script>
    <script src="{{ url('javascript/flex-slider.min.js') }}"></script>
    <script src="{{ url('javascript/scroll-img.js') }}"></script>
    <script src="{{ url('javascript/owl.carousel.min.js') }}"></script>
    <script src="{{ url('javascript/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('javascript/parallax.js') }}"></script>
    <script src="{{ url('javascript/jquery-isotope.js') }}"></script>
    <script src="{{ url('javascript/equalize.min.js') }}"></script>
    <script src="{{ url('javascript/main.js') }}"></script>

    <!-- slider -->
    <script src="{{ url('rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ url('rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}"></script>

</body>
</html>