<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="{{request()->url()}}" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileImage" content="{{ Vite::asset('resources/images/favicon.png') }}">
    <meta name="theme-color" content="#1c74b9">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{request()->url()}}" />
    <meta property="og:site_name" content="Digital Boxes" />
    {{-- <meta name="twitter:site" content="@devipuram">
    <meta name="twitter:creator" content="@devipuram"> --}}
    <meta name="keywords" content="Web development company Bangalore, Top web development company Bangalore, Best web development company Bangalore, Website development agency Bangalore, Professional web developers Bangalore, Custom web development Bangalore, E-commerce web development company Bangalore, Responsive web design Bangalore, Mobile app development company Bangalore, UI/UX design services Bangalore, Full-stack web development Bangalore, WordPress development company Bangalore, PHP web development company Bangalore, AngularJS development company Bangalore, ReactJS development company Bangalore, Node.js development company Bangalore, Mobile app development company Bangalore" >

    <meta name="description" content="Discover the leading web development company in Bangalore, offering cutting-edge solutions for your online success. Our expert team combines innovation, expertise, and meticulous attention to detail to deliver exceptional websites tailored to your business needs. From responsive designs to seamless functionality, trust us to transform your online presence into a powerful asset. Contact us today for unrivaled web development services that set you apart from the competition."/>

    <meta property="og:title" content="Best web development company in bangalore - Digital Boxes" />
    <meta property="og:description" content="Discover the leading web development company in Bangalore, offering cutting-edge solutions for your online success. Our expert team combines innovation, expertise, and meticulous attention to detail to deliver exceptional websites tailored to your business needs. From responsive designs to seamless functionality, trust us to transform your online presence into a powerful asset. Contact us today for unrivaled web development services that set you apart from the competition." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ Vite::asset('resources/images/favicon.png') }}" />

    <meta name="twitter:title" content="Best web development company in bangalore - Digital Boxes">
    <meta name="twitter:description" content="Discover the leading web development company in Bangalore, offering cutting-edge solutions for your online success. Our expert team combines innovation, expertise, and meticulous attention to detail to deliver exceptional websites tailored to your business needs. From responsive designs to seamless functionality, trust us to transform your online presence into a powerful asset. Contact us today for unrivaled web development services that set you apart from the competition.">
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/favicon.png') }}">

    <!-- Title -->
    <title>Best web development company in bangalore - Digital Boxes</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&amp;family=Merriweather:wght@700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])

    <style nonce="{{ csp_nonce() }}">
        .main-header .logo img{
            height: 90px;
            object-fit: contain;
        }
        .ml-auto{
            margin-left: auto
        }
        .about-image-new img{
            height: 60vh;
            object-fit: contain;
            width: auto;
        }
        .pl-0{
            padding-left: 0;
        }
    </style>

</head>
<body class="home-two">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header">

           <div class="header-top-wrap bgc-secondary text-white py-5">
               <div class="container">
                   <div class="header-top">
                       <div class="row align-items-center">
                           <div class="col-lg-4">
                               <div class="top-left text-center text-lg-start">
                                   <ul>
                                    <li><i class="far fa-envelope"></i> <a href="mailto:contact@digitalboxes.co.in">contact@digitalboxes.co.in</a></li>
                                    </ul>
                               </div>
                           </div>
                           <div class="col-lg-8">
                               <div class="top-right text-center text-lg-end">
                                   <ul>
                                        <li><i class="far fa-phone"></i> <a href="callto:+916362168038">+91-6362168038</a></li>
                                    </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner rel d-flex justify-content-center align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="#"><img src="{{ Vite::asset('resources/images/logos/logo.png') }}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer d-lg-none d-xl-none clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                   <div class="mobile-logo py-2">
                                       <a href="#">
                                            <img src="{{ Vite::asset('resources/images/logos/logo.png') }}" alt="Logo" title="Logo">
                                       </a>
                                   </div>
                                </div>
                            </nav>
                        </div>






                        <!-- Menu Button -->
                        {{-- <div class="menu-btns">
                           <a href="#" class="menu-sidebar theme-btn m-0">Contact Us <i class="fas fa-angle-double-right"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center px-3">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Contact Us</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" id="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" value="" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="What are you looking for?" name="message" id="message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="contact-inner">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <span id="captcha_container">{!!captcha_img()!!} </span>
                                    <span class="btn-captcha" id="btn-captcha" title="reload captcha"><i class="fas fa-redo"></i></span>
                                </div>
                                <input name="captcha" id="captcha" type="text" placeholder="Enter you captcha">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="SubmitBtn" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <div class="contact-info">
                    <div class="contact-info-item style-two flex-wrap justify-content-center py-2 px-3">
                        <div class="icon m-0">
                            <i class="far fa-envelope-open-text"></i>
                        </div>
                        <div class="content w-100">
                            <span class="title">email address</span>
                            <span class="text">
                                <a href="mailto:contact@digitalboxes.co.in">contact@digitalboxes.co.in</a>
                            </span>
                        </div>
                    </div>
                    <div class="contact-info-item style-two flex-wrap justify-content-center py-2 px-3">
                        <div class="icon m-0">
                            <i class="far fa-phone"></i>
                        </div>
                        <div class="content w-100">
                            <span class="title">Phone Number</span>
                            <span class="text">
                                Call <a href="telto:+916362168038">+91-6362168038</a><br>
                                Whatsapp : +91-6362168038
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Hidden Sidebar -->


        <!-- Hero Section Start -->
        <section class="hero-area bgc-dark-blue rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 align-self-center">
                        <div class="hero-content text-white my-120 rmb-0 wow fadeInLeft delay-0-2s">
                            <span class="sub-title mb-35">5+ Years of Experience in digital solutions</span>
                            <h1>Website development company in bangalore</h1>
                            <p>We are website design experts in understanding your needs, planning, budgeting and forecasting. Let’s talk to our web development experts.</p>
                            <div class="hero-btns pt-10">
                                <a href="#" class="menu-sidebar theme-btn mt-15">Let's Talk <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <div class="hero-images mt-75 wow fadeInRight delay-0-2s">
                            <img src="{{ Vite::asset('resources/images/hero/hero-two.png') }}" alt="Hero">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-shapes">
                <img class="shape one" src="{{ Vite::asset('resources/images/shapes/hero1.png') }}" alt="Wave Shape">
                <img class="shape two" src="{{ Vite::asset('resources/images/shapes/hero2.png') }}" alt="Wave Shape">
            </div>
        </section>
        <!-- Hero Section End -->


        <!-- About Area start -->
        <section class="about-area py-130 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-image-new m-0 p-0 text-center rmb-65 wow fadeInUp delay-0-2s">
                            <img src="{{ Vite::asset('resources/images/logos/logo.png') }}" class="height-300" alt="About">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-content wow fadeInUp delay-0-4s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">About Digital Boxes</span>
                                <h2>Unveiling Bangalore's Premier Web Development Company</h2>
                            </div>
                            <p>Digital Boxes specializes in creating, designing, and maintaining websites for various clients. We have a team of skilled professionals, including web developers, designers, and digital marketers, who collaborate to deliver high-quality websites tailored to the specific needs of our clients.</p>
                            <p>The primary focus is to build functional, user-friendly, and visually appealing websites. We work closely with clients to understand their requirements, goals, and target audience, ensuring that the website aligns with the client's brand identity and objectives.</p>
                            <div class="client-satisfactions counter-text-wrap pt-10 pb-10">
                                <img src="{{ Vite::asset('resources/images/about/hands.png') }}" alt="Hands">
                                <span class="count-text" data-speed="3000" data-stop="78">0</span>
                                <span class="heading">Clients Satisfactions</span>
                            </div>
                            <a href="#" class="menu-sidebar theme-btn mt-15">Learn More About Us <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->


        <!-- Mission Visson Area start -->
        <section class="mission-visson-area pb-130 rel z-1">
            <div class="container">
                <div class="row large-gap align-items-center">
                    <div class="col-lg-8">
                        <div class="mission-visson-content rmb-65 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-35">
                                <span class="sub-title mb-15">Mission and Vision</span>
                                <h2>We aim to deliver quality creative solutions</h2>
                                <p>
                                    Our mission as a website development company is to empower businesses and individuals by creating innovative and impactful digital solutions. We strive to deliver exceptional websites that enhance our clients' online presence, drive growth, and create meaningful user experiences. We are dedicated to staying at the forefront of technological advancements and leveraging our expertise to help our clients succeed in the ever-evolving digital landscape.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-0">
                        <div class="mission-visson-image wow fadeInUp delay-0-4s">
                            <img src="{{ Vite::asset('resources/images/about/mission-visson.png') }}" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p>
                            Our vision is to be a leading website development company recognized for our creativity, technical excellence, and customer-centric approach. We aim to be a trusted partner for businesses of all sizes, providing them with cutting-edge websites that not only meet their specific needs but also exceed their expectations. We envision a future where our clients thrive in the digital realm, reaching their target audience effectively and achieving their business goals through the power of exceptional web solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wave-shapes">
                <img class="shape one" src="{{ Vite::asset('resources/images/shapes/mission-vision1.png') }}" alt="Wave Shape">
                <img class="shape two" src="{{ Vite::asset('resources/images/shapes/mission-vision2.png') }}" alt="Wave Shape">
            </div>
        </section>
        <!-- Mission Visson Area end -->

        <!-- Services Area start -->
        <section class="services-area-four bgc-black pt-130 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center text-white mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title style-two mb-20">Services We Provide</span>
                            <h2>Discover Our In-Demand Web Services for Your Digital Success</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item-four wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/services/service-four1.png') }}" alt="Service">
                            </div>
                            <h5>Website Development</h5>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item-four wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/services/service-four2.png') }}" alt="Service">
                            </div>
                            <h5>Mobile App Development</h5>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item-four wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/services/service-four3.png') }}" alt="Service">
                            </div>
                            <h5>eCommerce Development</h5>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item-four wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/services/service-four4.png') }}" alt="Service">
                            </div>
                            <h5>Responsive Websites (UI/UX) Design</h5>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item-four wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/services/service-four5.png') }}" alt="Service">
                            </div>
                            <h5>SEO (Search Engine Optimization)</h5>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item-four wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/services/service-four6.png') }}" alt="Service">
                            </div>
                            <h5>Digital Product Design and Development</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area end -->

        <!-- Why Choose Us Area start -->
        <section class="why-choose-area py-120 rpb-130 rel z-1 overflow-hidden">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="why-choose-content pt-10 rmb-65 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-35">
                                <span class="sub-title mb-15">Why Choose Us</span>
                                <h2>Web design company that you can trust</h2>
                            </div>
                            <ul class="list-style-one">
                                <li>
                                    <div class="content">
                                        <h5>Competitive rates</h5>
                                        <p>We use strategic marketing tactics that have been proven programming for most complex functions.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <h5>Premium Development</h5>
                                        <p>An emphasis on cutting-edge design and modern usability standards strategic marketing tactics proven.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <h5>Retina Ready & Super Flexible</h5>
                                        <p>Devices show more pixels square inch resulting sharperes images Content moves freely across all screen</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <h5>No contracts needed</h5>
                                        <p>You can increase, pause or stop our services at any time leaving you completely marketing budgets.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-choose-image wow fadeInUp delay-0-4s">
                            <img src="{{ Vite::asset('resources/images/about/why-choose-us.png') }}" alt="why choose us">
                        </div>
                    </div>
                </div>
            </div>
            <div class="circle-shapes">
                <span class="shape one wow slideInDown delay-0-2s"></span>
                <span class="shape two wow slideInDown delay-0-4s"></span>
                <span class="shape three wow slideInDown delay-0-6s"></span>
                <span class="shape four wow slideInDown delay-0-8s"></span>
            </div>
        </section>
        <!-- Why Choose Us Area end -->

        <!-- Features Area start -->
        <section class="features-area pb-100 rel z-1">
            <div class="container">
               <div class="section-title text-center mb-50">
                    <span class="sub-title mb-15">Technology Features</span>
                    <h2>Full Potential Modern Features</h2>
                </div>
                <div class="row row-cols-xl-7 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 justify-content-center">
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/logo2.png') }}" alt="Logo">
                            </div>
                            <h5>HTML</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/logo3.png') }}" alt="Logo">
                            </div>
                            <h5>CSS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/logo1.png') }}" alt="Logo">
                            </div>
                            <h5>Bootstrap</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/tailwind.png') }}" alt="Logo">
                            </div>
                            <h5>Tailwind</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/chakra.png') }}" alt="Logo">
                            </div>
                            <h5>Chakra UI</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/jquery.webp') }}" alt="Logo">
                            </div>
                            <h5>JQuery</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/logo4.png') }}" alt="Logo">
                            </div>
                            <h5>Javascript</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/typescript.png') }}" alt="Logo">
                            </div>
                            <h5>Typescript</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/logo6.png') }}" alt="Logo">
                            </div>
                            <h5>React JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/react-native.png') }}" alt="Logo">
                            </div>
                            <h5>React Native</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/next.png') }}" alt="Logo">
                            </div>
                            <h5>Next JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/nuxt.png') }}" alt="Logo">
                            </div>
                            <h5>Nuxt JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/ionic.png') }}" alt="Logo">
                            </div>
                            <h5>Ionic JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/node.png') }}" alt="Logo">
                            </div>
                            <h5>Node JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/express.webp') }}" alt="Logo">
                            </div>
                            <h5>Express JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/adonis.png') }}" alt="Logo">
                            </div>
                            <h5>Adonis JS</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/php.png') }}" alt="Logo">
                            </div>
                            <h5>PHP</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/laravel.png') }}" alt="Logo">
                            </div>
                            <h5>Laravel</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/python.png') }}" alt="Logo">
                            </div>
                            <h5>Python</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/django.png') }}" alt="Logo">
                            </div>
                            <h5>Django</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ Vite::asset('resources/images/features/mysql.png') }}" alt="Logo">
                            </div>
                            <h5>MySql</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Area end -->


        <!-- Project Area start -->
        <section class="project-area pb-100 rel z-1">
            <div class="container-fluid gap-wide">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-2s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/1.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://amrita-janani.org" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Amrita Janani</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-4s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/2.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://cotton-culture.com" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Cotton Culture</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-6s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/3.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://mentorslab.in" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Mentorslab</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-2s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/4.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://aaaedu.in" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Arjunaa Academy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-4s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/5.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://manyaketha.digisole.in/" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Manyaketha</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-6s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/6.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://detox-folks.digisole.in/" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Detox Folks</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-6s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/7.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://www.snnrajcorp.com/" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>SNN Raj Corp</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-6s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/8.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://manyaketha.digisole.in/admin/login" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Manyaketha Dashboard</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item wow fadeInUp delay-0-6s">
                            <div class="project-iamge">
                                <img src="{{ Vite::asset('resources/images/projects/9.png') }}" alt="Project">
                                <div class="project-over">
                                    <a class="details-btn" href="https://mentorslab.in/auth/login" target="_blank"><i class="far fa-arrow-right"></i></a>
                                    <h3>Mentorslab Dashboard</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area end -->


        <!-- Statistics Area start -->
        <section class="statistics-area bgc-dark-blue text-white pb-130 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-20">Company Statistics</span>
                            <h2>Unmatched Excellence: Your Top Web Development Partner</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-6 col-small text-center">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-6s">
                            <i class="flaticon-rating"></i>
                            <span class="count-text" data-speed="3000" data-stop="5">0</span>
                            <span class="counter-title">Years Of Experience</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 col-small text-center">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-4s">
                            <i class="flaticon-global"></i>
                            <span class="count-text" data-speed="3000" data-stop="78">0</span>
                            <span class="counter-title">Clients Served</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 col-small text-center">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-2s">
                            <i class="flaticon-startup"></i>
                            <span class="count-text" data-speed="3000" data-stop="112">0</span>
                            <span class="counter-title">Projects Completed</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 col-small text-center">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-8s">
                            <i class="flaticon-trophy"></i>
                            <span class="count-text" data-speed="3000" data-stop="12">0</span>
                            <span class="counter-title">Ongoing Projects</span>
                        </div>
                    </div>
                </div>
                <div class="counter-cta mt-65 wow fadeInUp delay-0-2s">
                    <h4>Interested ! Let’s work together</h4>
                    <a href="#" class="menu-sidebar theme-btn style-three white-btn">Get Started Now <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="wave-shapes">
                <img class="shape one" src="{{ Vite::asset('resources/images/shapes/counter1.png') }}" alt="Wave Shape">
                <img class="shape two" src="{{ Vite::asset('resources/images/shapes/counter2.png') }}" alt="Wave Shape">
            </div>
        </section>
        <!-- Statistics Area end -->

         <!-- Working Process Area start -->
    <section class="work-process-area pt-130 pb-95 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Working Process</span>
                        <h2>Our Web Development Process: How We Make It Happen</h2>
                    </div>
                </div>
            </div>
            <div class="work-process-wrap rel z-1">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item mt-30 wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <span class="number">01</span>
                                <i class="flaticon-optimization"></i>
                            </div>
                            <h4>Info Gathering</h4>
                            <p>Gather valuable insights and requirements to build your dream website with our comprehensive info gathering process.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <span class="number">02</span>
                                <i class="flaticon-link"></i>
                            </div>
                            <h4>Idea Planning</h4>
                            <p>Transform your vision into reality with our expert idea planning for your website development needs.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item mt-55 wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <span class="number">03</span>
                                <i class="flaticon-data"></i>
                            </div>
                            <h4>Design & Development</h4>
                            <p>Transforming visions into exceptional digital experiences through innovative design and development solutions.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item mt-45 wow fadeInUp delay-0-8s">
                            <div class="icon">
                                <span class="number">04</span>
                                <i class="flaticon-star"></i>
                            </div>
                            <h4>Testing & Lunch</h4>
                            <p>Ensure a flawless launch with comprehensive testing and a seamless website deployment process from our experienced web development team.</p>
                        </div>
                    </div>
                </div>
                <div class="work-process-shape">
                    <img src="{{ Vite::asset('resources/images/shapes/worp-process-step.png') }}" alt="Shape">
                </div>
            </div>
        </div>
    </section>
    <!-- Working Process Area end -->


        <!-- Pricing Area start -->
        <section class="pricing-area bgc-dark-blue text-white py-130 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-20">Pricing Plan</span>
                            <h2>Best Pricing Package</h2>
                        </div>
                    </div>
                </div>
                <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                    <div class="price-features">
                        <h4>Basic Plan</h4>
                        <ul class="list-style-two">
                            <li>Static website &nbsp;<u> (5 pages)</u></li>
                            <li>100% Responsive Design</li>
                            <li>Social Media Integration</li>
                            <li>Whatsapp Integration</li>
                            <li>Chatbot Integration</li>
                            <li>Contact Form Submission</li>
                            <li>Hosting</li>
                            <li>Domain</li>
                            <li>Business Email ID</li>
                        </ul>
                        <span class="badge">BASIC</span>
                    </div>
                    <div class="price-and-btn">
                        <div class="content">
                            <a href="#" class="menu-sidebar theme-btn style-three">Get Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                    <div class="price-features">
                        <h4>Standard Plan</h4>
                        <ul class="list-style-two">
                            <li>Dynamic website &nbsp;<u>(10 pages)</u></li>
                            <li><u>Content Management System</u></li>
                            <li>100% Responsive Design</li>
                            <li>Contact Form Submission</li>
                            <li>Social Media Integration</li>
                            <li>Whatsapp Integration</li>
                            <li>Chatbot Integration</li>
                            <li>Hosting</li>
                            <li>Domain</li>
                            <li>Business Email ID</li>
                        </ul>
                        <span class="badge">Popular</span>
                    </div>
                    <div class="price-and-btn">
                        <div class="content">
                            <a href="#" class="menu-sidebar theme-btn style-three">Get Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                    <div class="price-features">
                        <h4>Ecommerce Plan</h4>
                        <ul class="list-style-two">
                            <li><u>Ecommerce website</u></li>
                            <li>Content Management System</li>
                            <li>100% Responsive Design</li>
                            <li>Contact Form Submission</li>
                            <li>Social Media Integration</li>
                            <li>Whatsapp Integration</li>
                            <li>Chatbot Integration</li>
                            <li><u>Payment Gateway Integration</u></li>
                            <li>Hosting</li>
                            <li>Domain</li>
                            <li>Business Email ID</li>
                        </ul>
                        <span class="badge">Ecommerce</span>
                    </div>
                    <div class="price-and-btn">
                        <div class="content">
                            <a href="#" class="menu-sidebar theme-btn style-three">Get Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                    <div class="price-features">
                        <h4>Ecommerce Gold Plan</h4>
                        <ul class="list-style-two">
                            <li>Ecommerce website</li>
                            <li>Content Management System</li>
                            <li>100% Responsive Design</li>
                            <li>Contact Form Submission</li>
                            <li>Social Media Integration</li>
                            <li>Whatsapp Integration</li>
                            <li>Chatbot Integration</li>
                            <li>Payment Gateway Integration</li>
                            <li><u>Android & IOS Application</u></li>
                            <li>Hosting</li>
                            <li>Domain</li>
                            <li>Business Email ID</li>
                        </ul>
                        <span class="badge">Gold</span>
                    </div>
                    <div class="price-and-btn">
                        <div class="content">
                            <a href="#" class="menu-sidebar theme-btn style-three">Get Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                    <div class="price-features">
                        <h4>Premium Plan</h4>
                        <ul class="list-style-two">
                            <li><u>Ecommerce / Business website</u></li>
                            <li>Content Management System</li>
                            <li>100% Responsive Design</li>
                            <li>Contact Form Submission</li>
                            <li>Social Media Integration</li>
                            <li>Whatsapp Integration</li>
                            <li>Chatbot Integration</li>
                            <li>Payment Gateway Integration</li>
                            <li>Android & IOS Application</li>
                            <li>Hosting</li>
                            <li>Domain</li>
                            <li>Business Email ID</li>
                            <li><u>Custom Requirements</u> **</li>
                        </ul>
                        <span class="badge">Premium</span>
                    </div>
                    <div class="price-and-btn">
                        <div class="content">
                            <a href="#" class="menu-sidebar theme-btn style-three">Get Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-shapes">
                <img class="shape one" src="{{ Vite::asset('resources/images/shapes/pricing1.png') }}" alt="Wave Shape">
                <img class="shape two" src="{{ Vite::asset('resources/images/shapes/pricing2.png') }}" alt="Wave Shape">
            </div>
        </section>
        <!-- Pricing Area end -->

        <!-- Support & Features Area start -->
        <section class="support-features-area bgs-cover bgc-lighter pt-130 pb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7">
                        <div class="support-features-wrap rmb-65 wow fadeInUp delay-0-2s">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon"><i class="flaticon-responsive"></i></div>
                                        <h5><a href="#">Responsive design</a></h5>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon"><i class="flaticon-feature"></i></div>
                                        <h5><a href="#">Powerful Customization</a></h5>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon"><i class="flaticon-aim"></i></div>
                                        <h5><a href="#">Cool & modern animations</a></h5>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon"><i class="flaticon-seo"></i></div>
                                        <h5><a href="#">SEO Friendly Coding</a></h5>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon"><i class="flaticon-search-location"></i></div>
                                        <h5><a href="#">Best Technical supports</a></h5>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="service-item style-two">
                                        <div class="icon"><i class="flaticon-settings"></i></div>
                                        <h5><a href="#">Varied Layouts & parallax</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="support-features-content mb-30 wow fadeInUp delay-0-4s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Support & Features</span>
                                <h2>Amazing web design development features</h2>
                            </div>
                            <p>When it comes to web design and development, there are several amazing features that can enhance the functionality, user experience, and visual appeal of a website. These features are designed to captivate visitors, drive engagement, and leave a lasting impression.</p>
                            <a href="#" class="menu-sidebar theme-btn mt-25">Get Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support & Features Area end -->

    <!-- CTA Area start -->
    <section class="call-to-action-area rel z-2">
        <div class="container">
            <div class="cta-inner bgs-cover">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-item wow fadeInLeft delay-0-2s">
                            <div class="icon"><i class="flaticon-target"></i></div>
                            <h4>Ready to Bring Your Vision to Life? Share Your Idea with Us!</h4>
                            <a href="#" class="menu-sidebar theme-btn ml-auto">Get In Touch <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area end -->


        <!-- Footer Area Start -->
        <footer class="main-footer bgc-dark-blue text-white rel z-1 pt-100">
            <div class="container">
                <div class="row large-gap justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="footer-cta text-center my-100 wow fadeInUp delay-0-2s">
                            <div class="section-title">
                                <h2>Let’s Design Your New Website</h2>
                                <p>Do you want to have a website that stands out and impresses your clients? Then we are ready to help! Click the button below to contact us and discuss your ideas.</p>
                            </div>
                            <a href="#" class="menu-sidebar theme-btn mt-15">Let's Discuss <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="copyright-area text-center pt-30 pb-15">
                    <p>© Copyright 2023 Digital Boxes. All right reserved</p>
                </div>
            </div>
            <div class="wave-shapes">
                <img class="shape one" src="{{ Vite::asset('resources/images/shapes/footer1.png') }}" alt="Wave Shape">
                <img class="shape two" src="{{ Vite::asset('resources/images/shapes/footer2.png') }}" alt="Wave Shape">
            </div>
        </footer>
        <!-- Footer Area End -->


        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

    </div>
    <!--End pagewrapper-->


    <!-- Jquery -->
    <script src="{{ asset('js/iziToast.min.js') }}"></script>

    <script src="{{ asset('js/just-validate.production.min.js') }}"></script>

    <script src="{{ asset('js/axios.min.js') }}"></script>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('js/appear.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- Image Loader -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Type Writer -->
    <script src="{{ asset('js/jquery.animatedheadline.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript" nonce="{{ csp_nonce() }}">
        const errorToast = (message) =>{
            iziToast.error({
                title: 'Error',
                message: message,
                position: 'bottomCenter',
                timeout:0
            });
        }
        const successToast = (message) =>{
            iziToast.success({
                title: 'Success',
                message: message,
                position: 'bottomCenter',
                timeout:0
            });
        }
    </script>

<script type="text/javascript" nonce="{{ csp_nonce() }}">

    const validationModal = new JustValidate('#contactForm', {
        errorFieldCssClass: 'is-invalid',
    });

    validationModal
    .addField('#name', [
    {
        rule: 'required',
        errorMessage: 'Name is required',
    },
    {
        rule: 'customRegexp',
        value: /^[a-zA-Z\s]*$/,
        errorMessage: 'Name is invalid',
    },
    ])
    .addField('#email', [
    {
        rule: 'required',
        errorMessage: 'Email is required',
    },
    {
        rule: 'email',
        errorMessage: 'Email is invalid!',
    },
    ])
    .addField('#phone', [
    {
        rule: 'required',
        errorMessage: 'Phone is required',
    },
    {
        rule: 'customRegexp',
        value: /^[0-9]*$/,
        errorMessage: 'Phone is invalid',
    },
    ])
    .addField('#message', [
    {
        rule: 'required',
        errorMessage: 'Message is required',
    },
    {
        rule: 'customRegexp',
        value: /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i,
        errorMessage: 'Message is invalid',
    },
    ])
    .addField('#captcha', [
    {
        rule: 'required',
        errorMessage: 'Captcha is required',
    }
    ])
    .onSuccess(async (event) => {
        event.target.preventDefault;

        var submitBtn = document.getElementById('SubmitBtn')
        submitBtn.innerHTML = `
            <span class="d-flex align-items-center">
                <span class="spinner-border flex-shrink-0" role="status">
                    <span class="visually-hidden"></span>
                </span>
                <span class="flex-grow-1 ms-2">
                    &nbsp; Submiting...
                </span>
            </span>
            `
        submitBtn.disabled = true;
        try {
            var formData = new FormData();
            formData.append('name',document.getElementById('name').value)
            formData.append('email',document.getElementById('email').value)
            formData.append('phone',document.getElementById('phone').value)
            formData.append('message',document.getElementById('message').value)
            formData.append('captcha',document.getElementById('captcha').value)
            const response = await axios.post('{{route('contact_ajax')}}', formData)
            successToast(response.data.message)
            event.target.reset()
        } catch (error) {
            if(error?.response?.data?.errors?.name){
                errorToast(error?.response?.data?.errors?.name[0])
            }
            if(error?.response?.data?.errors?.email){
                errorToast(error?.response?.data?.errors?.email[0])
            }
            if(error?.response?.data?.errors?.phone){
                errorToast(error?.response?.data?.errors?.phone[0])
            }
            if(error?.response?.data?.errors?.message){
                errorToast(error?.response?.data?.errors?.message[0])
            }
            if(error?.response?.data?.message){
                errorToast(error?.response?.data?.message)
            }
        } finally{
            submitBtn.innerHTML =  `
                Submit Now
                `
            submitBtn.disabled = false;
            await reload_captcha()
            document.getElementById('captcha').value='';
        }
    })
    </script>

<script type="text/javascript" nonce="{{ csp_nonce() }}">
    document.getElementById('btn-captcha').addEventListener("click", reload_captcha);
    async function reload_captcha(){
        try {
            const response = await axios.get('{{route('captcha_ajax')}}')
            document.getElementById('captcha_container').innerHTML = response.data.captcha
        } catch (error) {
            if(error?.response?.data?.error){
                errorToast(error?.response?.data?.error)
            }
            if(error?.response?.data?.message){
                errorToast(error?.response?.data?.message)
            }
        } finally{}
    }
</script>

</body>

</html>
