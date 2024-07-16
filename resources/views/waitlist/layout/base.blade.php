
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">
    <link rel="icon" type="image/png" href="{{asset($web->favicon)}}">
    <link rel="shortcut icon" href="{{asset($web->favicon)}}" type="image/x-icon">
    <link rel="canonical" href="{{url('/')}}">

    <!-- Meta Tags for SEO -->
    <meta name="robots" content="index, follow">
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="{{$web->keywords}}">
    <meta name="author" content="{{$siteName}}">
    <meta name="url" content="{{route('wait-list.home')}}">

    <!-- Open Graph / Facebook -->
    <meta name="og:type" content="website"/>
    <meta name="og:url" content="{{url('/')}}"/>
    <meta name="og:title" content="{{$web->name}} | {{$pageName}}"/>
    <meta name="og:description" content="{{$web->description}}"/>
    <meta name="og:image" content="{{asset($web->favicon)}}"/>
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url('/')}}">
    <meta property="twitter:title" content="{{$siteName}} - {{$pageName}}">
    <meta property="twitter:description" content="{{$web->description}}">
    <meta property="twitter:image" content="{{asset($web->logo)}}">
    <!-- Prefetch, preconnect, preload -->
    <link rel="dns-prefetch" href="{{url('/')}}">
    <link rel="preconnect" href="{{url('/')}}">
    <link rel="preload" href="{{asset($web->favicon)}}" as="image">
    <link rel="preload" href="{{asset($web->favicon)}}" as="image">

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
    @include('genericCss')
    <title> {{$siteName}} | {{$pageName}}</title>
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
            <div class="row row--footer-main justify-content-center">

                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="footer__content-block">
                        <div class="footer__content-text">
                            <div class="footer-brand">
                                <img src="{{asset($web->logo2)}}" alt="image alt">
                            </div>
                            <p>
                                {{$siteName}} is a forward-thinking platform designed to connect top talent with groundbreaking
                                opportunities in the rapidly evolving fields of blockchain and artificial intelligence (AI).
                            </p><br/>
                            <p>
                                HeadQuarters: {{$web->address}}
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
@include('basicInclude')
</body>
</html>
