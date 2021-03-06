

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
                        <li class="top-bar-right">
                            <ul class="custom">
                                @auth

                                    <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> {{auth()->user()->username}}<i class="fa fa-caret-down text-white ml-1"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{url('/profile')}}">
                                            <i class="dropdown-icon icon icon-user"></i> MyProfile
                                        </a>
                                        <a class="dropdown-item" href="/logout">

                                            <i class="dropdown-icon icon icon-power"></i> Log out
                                        </a>
                                    </div>
                                    </li>
                                @else


                                    <li>
                                        <a href="{{route('register')}}" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                                    </li>


                                @endauth
                            </ul>
                        </li>
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
                                <h3 class="header-brand-img" style="color: aliceblue">{{Session::get('site_nameHeader')}}</h3>
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
                        <li aria-haspopup="true"><a href="{{url('/')}}">Home</a>

                        </li>
                        <li aria-haspopup="true"><a href="#">Services <span class="fe fe-chevron-down"></span> </a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{url('courses')}}" class="">Courses </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Design and draw strategic plans for institutions </a></li>
                                <li aria-haspopup="true"><a href="{{url('organizing-exhibitions-confrences')}}" class=""> Organizing exhibitions and conferences </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Organizing Qualifying and specialized Courses </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Organizing and supervising media campaigns </a></li>
                                <li aria-haspopup="true"><a href="{{url('/')}}" class="">Providing studies and consultations </a></li>
                            </ul>
                        </li>

                        <li aria-haspopup="true"><a href="/business-areas">Business Areas <span class="fe fe-chevron-down"></span> </a>
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
                        <li aria-haspopup="true"><a href="{{url('courses')}}" class="">Courses </a></li>
                        <li aria-haspopup="true"><a href="{{url('partners')}}">Partners</a></li>
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
