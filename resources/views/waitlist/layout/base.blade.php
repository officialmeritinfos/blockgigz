
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
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 7 : Hero Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-7_hero-section">
        <div class="container">
            <div class="row row--custom">
                <div class="col-xxl-auto col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-8 col-8" data-aos-duration="1000"
                     data-aos="fade-left" data-aos-delay="300">
                    <div class="home-7_hero-image">
                        <img class="hero-image" src="{{asset('waitlist/image/home-7/hero1.svg')}}" alt="hero image">
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-8 col-lg-8 col-md-10" data-aos-duration="1000" data-aos="fade-right" data-aos-delay="300">
                    <div class="home-7_hero-content">
                        <div class="home-7_hero-content-text">
                            <span class="badge badge--white">Top-Rated Freelancer Marketplace</span>
                            <h4 class="hero-content__title heading-xl fw-700">
                                Fast & reliable Freelancer Marketplace & Jobboard
                            </h4>
                            <p>
                                Looking for top-tier freelancers and talent in the Web3, Web2, and AI industries? Save time
                                and money in your hiring processes with {{$siteName}}. Our platform simplifies finding the
                                perfect talent, making the process seamless and efficient. Post your jobs or gigs and watch
                                as applications roll in within minutes. We also streamline the process of sorting through
                                applications and interviewing the best candidates for your job, contract, or gig.
                                {{$siteName}} makes hiring so easy that you'll wonder how you managed without it.
                            </p>
                        </div>
                        <div class="home-7_hero-content-button">
                            <a href="{{route('wait-list.home')}}#join-waitlist" class="btn-masco btn-primary-l07 rounded-pill btn-shadow">
                                Join Wait-list
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
    Home 7 : Fact Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-7_fact-section">
        <div class="container">
            <div class="row row--custom  fact-widget-divider">
                <div class="col-xxl-auto  col-lg-3 col-md-6 col-sm-8 col-xs-9">
                    <div class="fact-widget">
                        <div>
                            <img src="{{asset('waitlist/image/home-7/fact-icon-1.svg')}}" alt="image alt">
                        </div>
                        <div>
                            <h3 class="fact-widget_title">
                                Fast & Simple
                            </h3>
                            <p>
                                {{$siteName}} is designed to streamline the hiring process, making it incredibly fast and
                                simple. Post your job or gig, and watch as qualified applications pour in within minutes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-lg-3 col-md-6 col-sm-8 col-xs-9">
                    <div class="fact-widget">
                        <div>
                            <img src="{{asset('waitlist/image/home-7/fact-icon-2.svg')}}" alt="image alt">
                        </div>
                        <div>
                            <h3 class="fact-widget_title">Service response</h3>
                            <p>
                                At {{$siteName}}, we prioritize exceptional customer service. Our dedicated support team is
                                available around the clock to assist you with any queries or issues.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto  col-lg-3 col-md-6 col-sm-8 col-xs-9">
                    <div class="fact-widget last-child">
                        <div>
                            <img src="{{asset('waitlist/image/home-7/fact-icon-3.svg')}}" alt="image alt">
                        </div>
                        <div>
                            <h3 class="fact-widget_title">Global acceptance</h3>
                            <p>
                                {{$siteName}} connects you to a global network, enabling employers to hire skilled
                                professionals worldwide and freelancers to find international projects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5 col-xs-6 col-auto">
                    <div class="home-7_fact-navigation-image">
                        <div class="fact-round-image">
                            <img class="" src="{{asset('waitlist/image/home-7/text-circle.png')}}" alt="image alt">
                        </div>
                        <img src="{{asset('waitlist/image/home-7/fact-arrow-icon.png')}}" alt="image alt">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 7  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-7_content-section-1 padding-top-120 padding-bottom-150 bg-light-2" id="about-us">
        <div class="container">
            <div class="row row--custom ">
                <div class=" col-xl-6 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="home-7_content-image-1 content-image--mobile-width">
                        <img src="{{asset('waitlist/image/home-7/content-image-1.png')}}" alt="alternative text">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-9 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <span class="badge badge--yellow"> About {{$siteName}}</span>
                            <h2 class="content-title heading-lg heading-lg--cabin text-l7-primary">
                                Who we are, mission and Vision
                            </h2>
                            <p>
                                {{$siteName}} was born out of the need to address the challenges faced by job seekers and employers
                                in the Web3, and AI industries. We recognized the difficulty in securing jobs due
                                to high costs and the expensive fees charged by other job boards. Traditional platforms
                                often present barriers that hinder both talent and companies from connecting effectively.
                            </p>
                            <p>
                                We built {{$siteName}} to eliminate these obstacles. Our mission is to create an affordable
                                and efficient platform that bridges the gap between skilled professionals and innovative
                                companies. By offering lower fees and a user-friendly experience, {{$siteName}} makes it easier
                                for job seekers to find opportunities and for employers to access top talent without breaking
                                the bank. <br/>
                                We do not want to be Jack of all trades - which is why we are focused on the Web3 & AI industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-7_content-section-1 padding-top-120 padding-bottom-150 bg-light-2" id="how-it-works">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-md text-black">
                            How {{$siteName}} works
                        </h2>
                        <p>
                            {{$siteName}} is designed to simplify and streamline the hiring process for both job seekers and
                            employers in the Web3, Web2, and AI industries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row--custom ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-auto" data-aos-duration="2000" data-aos="fade-left">
                    <span class="badge badge badge--purple">For Freelancers & Job Seekers</span>
                    <div class="content">
                        <div class="content-list-block">
                            <ul class="content-list">
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Sign up - and complete profile
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Browse Jobs & Gigs
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Apply - & get Interviewed
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Secure Payment & Start working
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-auto" data-aos-duration="2000" data-aos="fade-left">
                    <span class="badge badge badge--purple">For Employers & Recruiters</span>
                    <div class="content">
                        <div class="content-list-block">
                            <ul class="content-list">
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Sign up - and complete profile
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Post Jobs & Gigs
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Review Applications - & Interview
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('waitlist/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Secure Payment & Talent Management
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 7 : Service Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-7_service-section padding-bottom-150 bg-light-2">
        <div class="container">
            <div class="section-heading-wrapper mt-5">
                <div class="row justify-content-center text-center">
                    <div class="col-xxl-6 col-lg-7 col-md-9">
                        <div class="section-heading">
                            <span class="badge badge badge--blue">Unchallenged Features</span>
                            <h2 class="section-heading__title heading-lg heading-lg--cabin text-l7-primary">
                                All the hiring features you will ever need.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutter-y-default">
                <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="800">
                    <div class="service-card-2">
                        <div class="service-card-2__icon">
                            <img src="{{asset('waitlist/image/home-7/feature-1.svg')}}" alt="image alt">
                        </div>
                        <div class="service-card-2__body">
                            <h3 class="service-card-2__title ">Job Listing</h3>
                            <p>
                                Comprehensive job listings across Web3, Web2, and AI industries. Find full-time, part-time,
                                and freelance opportunities tailored to your skills.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="700">
                    <div class="service-card-2">
                        <div class="service-card-2__icon">
                            <img src="{{asset('waitlist/image/home-7/feature-2.svg')}}" alt="image alt">
                        </div>
                        <div class="service-card-2__body">
                            <h3 class="service-card-2__title ">Freelance Gigs</h3>
                            <p>
                                Access to short-term and long-term freelance projects. Perfect for professionals looking
                                to work on multiple projects or transition into freelancing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="600">
                    <div class="service-card-2">
                        <div class="service-card-2__icon">
                            <img src="{{asset('waitlist/image/home-7/feature-3.svg')}}" alt="image alt">
                        </div>
                        <div class="service-card-2__body">
                            <h3 class="service-card-2__title ">Talent Management</h3>
                            <p>
                                Tools to manage your hired talent efficiently. From onboarding to project management,
                                {{$siteName}} provides everything you need to manage your team.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="500">
                    <div class="service-card-2">
                        <div class="service-card-2__icon">
                            <img src="{{asset('waitlist/image/home-7/feature-4.svg')}}" alt="image alt">
                        </div>
                        <div class="service-card-2__body">
                            <h3 class="service-card-2__title ">Career Resources</h3>
                            <p>
                                Access a wealth of resources, including resume tips, interview preparation, and career
                                advice to help you succeed in your job search.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~
    Home 7 : CTA
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cta-home-7" id="join-waitlist">
        <div class="container">
            <div class="cta-content-block">
                <div class="cta-text-block">
                    <h2 class=" heading-lg heading-lg--cabin text-white">
                        Sign up today for a slot in the innovative solution
                    </h2>
                </div>
                <div class="cta-form-wrapper">
                    <form action="#">
                        <div class="cta-form__input-block">
                            <input type="text" placeholder="Enter your email">
                            <button class="btn-masco btn-primary-l07 rounded-pill"><span>Get Started</span></button>
                        </div>
                        {!! NoCaptcha::display() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>
