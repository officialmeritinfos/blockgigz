@extends('waitlist.layout.base')
@section('content')

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
    <livewire:watlist.join-waitlist/>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Contact Page 3 Main section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="contact-3_main-section section-padding-120" id="contact-us">
        <div class="container">
            <div class="row justify-content-center gutter-y-default">
                <div class="col-lg-6 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="{{asset('waitlist/image/contact-details/feature-icon-1.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title">Chat with us</h3>
                            <p>We're waiting to help you every Monday-Friday from 9 am to 5 pm EST easily.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="">
                    <div class="feature-card">
                        <div class="feature-card__icon">
                            <img src="{{asset('waitlist/image/contact-details/feature-icon-3.svg')}}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title">Email Us</h3>
                            <p>Drop us an email at <span>{{$web->email}}</span> and you'll receive a reply within 24 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
