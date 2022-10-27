<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

    <title>Contact Us</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/favicon-avidus.svg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-avidus.svg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-avidus.svg')}}">
    <link rel="manifest" href="{{ asset('images/favicons/favicon-avidus.svg')}}">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/dimon-icons/style.css')}}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
</head>

<body>

<section>


<header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="/images/resources/avidus-header-logo.png" class="main-logo" width="60%" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" one-page-scroll-menu navigation-box">
                            <li class="">
                                <a href="/">Home</a>
                                
                            </li>
                            <li class="scrollToLink">
                                <a href="/about">About Us</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="/solutions">Solutions</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="/career">Career</a>
                            </li>
                            <li class="current scrollToLink">
                                <a href="/contact">Contact Us</a>
                          
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    
                </div>
                <!-- /.container -->
            </nav>
</header>
<section class="header-banner" >
            <span class="banner-one__shape-1"></span>
            <span class="banner-one__shape-2"></span>
            <span class="banner-one__shape-3"></span>
            <span class="banner-one__shape-4"></span>
            
                
                <div class="pagename">
                    <h1>Contact Us</h1>
                    <hr style="background-image: linear-gradient(0deg, #FFEC70 0%, #68C766 100%);background-image: linear-gradient(90deg, #FFEC70 0%, #68C766 100%);
                height: 8px;
                width: 250px;">
                </div>
                
            
        </section><!-- /.banner-one -->

    

    <div class="container contactus-section mt-5 pt-5 mb-5 pb-5">
        <div class="row">
            <div class="col-lg-7">
                <img src="/images/resources/contactus-img.png" alt="" width="100%">
                <div class="box p-5">
                    <div class="row align-items-center ">
                        <img src="/images/resources/envelope.svg" alt="" width="50px">
                       &nbsp;&nbsp;&nbsp;<p> hr@avidusinteractive.com</p>
                    </div>
                    <div class="row align-items-center mt-4 mb-4">
                        <img src="/images/resources/phone.svg" alt="" width="35px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p> (307) 555-0133       </p>             
                    </div>
                    <div class="row align-items-center ">
                        <img src="/images/resources/map-marker.svg" alt="" width="35px">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p> South Dakota 83475      </p>             
                     </div>
                </div>
            </div>
            <div class="col-lg-5 form-section">
                <h6 class="mt-5 h6tag">GET IN TOUCH &nbsp;&nbsp;&nbsp;<img src="/images/resources/Line 5.png" alt=""></>
                <h1 class="mt-4 h1tag">Let's Talk And Find<br> Your Solution</h1>
                <form class="mt-5" action="{{route('Sendemail')}}" method="POST">
                @csrf
                @if(session()->has('message'))
                        <div class="alert alert-success">
                        {{ session()->get('message') }}
                        </div>
                    @endif
                    <input  type="text" name="name" id="" placeholder="Full name" required><br>
                    <input class="mt-4 mb-4" type="email" name="email" id="" placeholder="Email address" required><br>
                    <textarea  name="msg" id="" placeholder="Your message" cols="20" rows="5"></textarea><br>
                    <input type="submit" value="Send Message">         
                </form>    
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <h1 class="text-center mt-3 mb-5 h1tag">Our Location</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ">
                <div class="add-section">
                    <img src="/images/resources/square.svg" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <h5 class="h5tag">Bangalore, India</h5>
                        <p class="ptag">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                    </div>
            </div>
            </div>
            <div class="col-lg-8">
               <img src="/images/resources/map.png" alt="" width="100%">
            </div>
        </div>
    </div>
</section>


<x-footer/>



    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

    <!-- template scripts -->
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>