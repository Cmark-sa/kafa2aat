<!doctype html>
<html lang="en">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content=" Eudica - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="html rtl, html dir rtl, rtl website template, bootstrap 4 rtl template, rtl bootstrap template, admin panel template rtl, admin panel rtl, html5 rtl, academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- Title -->
    <title> Eudica - Online Education & Learning Courses HTML CSS Responsive Template</title>

    <!-- Bootstrap css -->
    <link href="../assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Font-awesome  css -->
    <link href="../assets/css/icons.css" rel="stylesheet"/>

    <!--Horizontal Menu css-->
    <link href="../assets/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet" />

    <!--Select2 css -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- Cookie css -->
    <link href="../assets/plugins/cookie/cookie.css" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Pscroll bar css-->
    <link href="../assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />

    <!-- Switcher css -->
    <link  href="../assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/color-skins/color8.css" />

</head>

<body>

{{--<!--Loader-->--}}
{{--<div id="global-loader">--}}
{{--    <img src="../assets/images/loader.svg" class="loader-img" alt="img">--}}
{{--</div><!--/Loader-->--}}
<div class="cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
    <!--Topbar-->
    <div class="header-main">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                        <div class="top-bar-left d-flex">
                            <div class="clearfix">
                                <ul class="socials">
                                    <li>
                                        <a class="social-icon text-dark" href="{{Session::get('facebook_linkHeader')}}"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="{{Session::get('twitter_linkHeader')}}"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="{{Session::get('instagram_linkHeader')}}"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                        @auth
                        <li class="dropdown top-bar-right">
                            <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> Logout<i class="fa fa-caret-down text-white ml-1"></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="/logout">
                                    <i class="dropdown-icon icon icon-power"></i> Log out
                                </a>
                            </div>
                        </li>
                        @else
                            <div class="top-bar-right">
                                <ul class="custom">
                                    <li>
                                        <a href="{{route('register')}}" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div><!--/Topbar-->

        <!--Header-->
        <header class="header-search header-logosec p-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="header-search-logo d-none d-lg-block">
                            <a class="header-logo" href="{{url('/')}}">
                                <img src="../assets/images/brand/logo1.png" class="header-brand-img" alt=" logo">
                                <img src="../assets/images/brand/logo.png" class="header-brand-img header-white" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="header-icons float-right">
                            <ul class="header-icons-link">
                                <li class="">
                                    <a href="#" class="header-icons-link1"><i class="fa fa-cog"></i></a>
                                </li>
                                <li class="">
                                    <a href="#" class="header-icons-link1"><i class="fa fa-user"></i></a>
                                </li>
                                <li class="">
                                    <a href="#" class="header-icons-link1"><i class="fa fa-cart-plus"></i>
                                        <span class="main-badge1 badge badge-danger badge-pill">3</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--/Header-->


        <!-- Mobile Header -->
        <div class="sticky">
            <div class="horizontal-header clearfix ">
                <div class="container">
                    <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                    <span class="smllogo"><img src="../assets/images/brand/logo1.png" width="120" alt="img"/></span>
                    <span class="smllogo-white"><img src="../assets/images/brand/logo.png" width="120" alt="img"/></span>
                    <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- /Mobile Header -->

        <!--Horizontal-main -->
        <div class="header-style horizontal-main bg-dark-transparent clearfix">
            <div class="horizontal-mainwrapper container clearfix">
                <nav class="horizontalMenu clearfix d-md-flex">
                    <ul class="horizontalMenu-list">
                        <li aria-haspopup="true"><a href="#">Home</a>

                        </li>
                        <li aria-haspopup="true"><a href="#">Services <span class="fe fe-chevron-down"></span> </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{url('courses')}}" class="">Design and draw strategic plans for institutions </a></li>
                                <li aria-haspopup="true"><a href="{{url('organizing-exhibitions-confrences')}}" class=""> Organizing exhibitions and conferences </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Organizing Qualifying and specialized Courses </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Organizing and supervising media campaigns </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Providing studies and consultations </a></li>
                            </ul>
                        </li>

                        <li aria-haspopup="true"><a href="#">Business Areas <span class="fe fe-chevron-down"></span> </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="#">Administrative field</a></li>
                                <li aria-haspopup="true"><a href="#">Financial field</a></li>
                                <li aria-haspopup="true"><a href="#">Tourist field</a></li>
                                <li aria-haspopup="true"><a href="#">Electronic field</a></li>
                                <li aria-haspopup="true"><a href="#">Computer field</a></li>
                                <li aria-haspopup="true"><a href="#">English field</a></li>
                                <li aria-haspopup="true"><a href="#">Self Development field</a></li>
                                <li aria-haspopup="true"><a href="#">Social field</a></li>

                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="{{url('achievements')}}">Achievements</a></li>
                        <li aria-haspopup="true"><a href="#about-us">About Us </a></li>
                        <li aria-haspopup="true"><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>

                </nav>
            </div>
        </div>
    </div><!--/Horizontal-main -->

    <!--Section-->
    <section>
        <div class="bannerimg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">

{{--                     <h1 class="">Login</h1>--}}
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Section-->
</div>
