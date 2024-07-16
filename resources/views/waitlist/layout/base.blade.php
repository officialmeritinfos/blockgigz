
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">
    <title>
        {{$pageName}} - {{$siteName}}
    </title>
    <link rel="shortcut icon" href="{{asset($web->favicon)}}" type="image/x-icon">
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="{{$web->keywords}}">
    <meta name="url" content="{{route('wait-list.home')}}">
    <meta name="og:title" content="{{$web->name}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset($web->favicon)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="{{$web->description}}"/>
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/fonts/typography/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('waitlist/fonts/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/plugins/slick/slick-theme.css')}}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('waitlist/css/demo.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.cdnfonts.com/css/clash-display');
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@500;600;700;800;900&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap');
        @import url('https://fonts.cdnfonts.com/css/clash-display');
    </style>
    @livewireStyles
</head>

<body>
<div class="preloader-wrapper">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="page-wrapper overflow-hidden">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Header Area
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="site-header site-header--transparent site-header--absolute">
        <div class="container">
            <nav class="navbar site-navbar">
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                  Brand Logo
              ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="brand-logo">
                    <a href="{{route('wait-list.home')}}">
                        <!-- light version logo (logo must be black)-->
                        <img class="logo-light" src="{{asset($web->logo2)}}" alt="brand logo">
                        <!-- Dark version logo (logo must be White)-->
                    </a>
                </div>
                <div class="menu-block-wrapper ">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <a href="{{route('wait-list.home')}}">
                                <img src="{{asset($web->logo)}}" alt="brand logo">
                            </a>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item">
                                <a href="{{route('wait-list.home')}}" class="nav-link-item drop-trigger">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('wait-list.home')}}#about-us" class="nav-link-item drop-trigger">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('wait-list.home')}}#how-it-works" class="nav-link-item drop-trigger">How It works</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('wait-list.home')}}#join-waitlist" class="nav-link-item drop-trigger">Join Wait-list</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('wait-list.home')}}#contact-us" class="nav-link-item drop-trigger">Contact Us</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                mobile menu trigger
               ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                  Mobile Menu Hamburger Ends
                ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="header-cta-btn-wrapper">
                    <a href="{{route('wait-list.home')}}#join-waitlist" class="btn-masco btn-masco--header btn-primary-l07 rounded-pill btn-shadow">
                        <span>Join Wait-list</span></a>
                </div>
            </nav>
        </div>
    </header>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     navbar-
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    @yield('content')
    <div class="footer footer-padding-default footer--light footer-l02">
        <div class="container">
            <div class="row row--footer-main">
                <div class="col-md-8 col-lg-5 col-xl-5 col-xxl-4">
                    <div class="footer__content-block">
                        <div class="footer__content-text">
                            <div class="footer-brand">
                                <img src="{{asset($web->logo2)}}" alt="image alt">
                            </div>
                            <p>
                                {{$siteName}} is a forward-thinking platform designed to connect top talent with groundbreaking
                                opportunities in the rapidly evolving fields of blockchain and artificial intelligence (AI).
                            </p>
                        </div>
                        <a href="mailto:{{$web->email}}" class="footer-link">{{$web->email}}</a>
                        <br>
                        <ul class="list-social list-social--hvr-primary-l4">
                            <li>
                                <a href="https://www.linkedin.com/company/blockgigz/">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/blockgigz">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/blockgigz">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-7 col-xl-6 col-xxl-7 offset-xl-1">
                    <div class="row row--list-block">
                        <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                            <h3 class="footer-title">Primary Pages</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#">Demos</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                            <h3 class="footer-title">Utility pages</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#">Instructions</a>
                                </li>
                                <li>
                                    <a href="#"> Style guide</a>
                                </li>
                                <li>
                                    <a href="#"> Licenses</a>
                                </li>
                                <li>
                                    <a href="#"> 404 Not found</a>
                                </li>
                                <li>
                                    <a href="#"> Password protected</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto col-md-4 col-lg-auto col-xl-auto col-xxl-auto">
                            <h3 class="footer-title">Resources</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <a href="#"> Privacy policy</a>
                                </li>
                                <li>
                                    <a href="#"> Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#"> Strategic finance</a>
                                </li>
                                <li>
                                    <a href="#"> Video guide</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-block">
            <div class="container">
                <div class="copyright-inner text-center  copyright-border">
                    <p>© Copyright {{date('Y')}}, All Rights Reserved by {{$siteName}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor Scripts -->
<script src="{{asset('waitlist/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin's Scripts -->
<script src="{{asset('waitlist/plugins/inlineSvg/inlineSvg.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/aos/aos.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/isotope/packery.pkgd.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/isotope/image.loaded.js')}}"></script>
<script src="{{asset('waitlist/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('waitlist/plugins/countdown/jquery.countdown.js')}}" defer></script>
<script src="{{asset('waitlist/js/menu.js')}}"></script>
<script src="{{asset('waitlist/js/custom.js')}}"></script>
<!-- Activation Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"
        integrity="sha512-RmCE+nEdKZ45TpbCJgvYvfEDz3XaiGmTTJl6GfyITW3fouks4lNTOkoMXWJ9WA6aQO+3FV8cjA6fvTosOgbCrg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{!! NoCaptcha::renderJs() !!}

@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
</body>
</html>
