<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta name="twitter:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta property="og:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Quiety - Software & IT Solutions HTML Template</title>

    <!--google fonts-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">-->

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css start-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--custom css end-->
    <style>
        /* General Navbar Styles */
        .navbar {
            background-color: #f8f9fa;
            /* Navbar background color */
            padding: 1rem 2rem;
            /* Add padding to navbar */
        }

        .nav-item .nav-link {
            padding: 18px 24px;
            /* Increased padding for larger text */
            font-size: 1rem;
            /* Adjust font size as needed */
            font-weight: 500;
            /* Slightly bolder font for readability */
        }

        /* Mega Menu Styles */
        .mega-menu {
            display: none;
            /* Initially hide mega menu */
            position: absolute;
            z-index: 1000;
            background-color: #fff;
            /* Background color of the mega menu */
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            /* Softer shadow */
            padding: 1.5rem;
            /* Add padding inside the mega menu */
            min-width: 700px;
            /* Set minimum width to fit content */
        }

        .dropdown:hover .mega-menu {
            display: block;
            /* Show mega menu on hover */
        }

        /* Mega Menu Columns */
        .mega-menu .row>div {
            padding: 0 15px;
            /* Add padding between columns */
        }

        .drop-heading {
            font-size: 1.1rem;
            /* Larger font for headings */
            font-weight: bold;
            color: #333;
            margin-bottom: 12px;
        }

        /* Dropdown Item Styles */
        .dropdown-item {
            padding: 10px 18px;
            /* Increase padding for larger text */
            font-size: 0.95rem;
            /* Adjust font size as needed */
            color: #555;
        }

        .dropdown-item:hover {
            background-color: #e9ecef;
            /* Background color on hover */
            color: #000;
            /* Text color on hover */
        }

        /* Responsive Adjustments */
        @media (max-width: 767px) {
            .mega-menu {
                position: static;
                width: 100%;
                padding: 1rem;
                /* Adjust padding for mobile view */
            }
        }

        .footer-single-col {
            margin-bottom: 20px;
        }

        .footer-nav-list li {
            margin-bottom: 10px;
        }

        input.input-newsletter {
            width: 100%;
        }

        @media (min-width: 768px) {
            .footer-top {
                padding-top: 60px;
                padding-bottom: 60px;
            }

            .footer-single-col {
                margin-bottom: 30px;
            }
        }


        a.d-flex {
            display: flex;
            align-items: center;
        }

        .carousel-control-prev-custom,
        .carousel-control-next-custom {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            cursor: pointer;
            z-index: 2;
        }

        .carousel-control-prev-custom {
            left: -50px;
            /* Adjust to move left button to the outside */
        }

        .carousel-control-next-custom {
            right: -50px;
            /* Adjust to move right button to the outside */
        }

        /* Make icons semi-transparent */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.2);
            /* Slightly transparent background */
            border-radius: 50%;
            padding: 10px;
        }

        /* Hover effect for buttons */
        .carousel-control-prev-custom:hover .carousel-control-prev-icon,
        .carousel-control-next-custom:hover .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .content-image-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
            /* Adjust the gap between content and image */
        }

        a {
            color: orange;
        }

        .tab-content {
            flex: 1;
            text-align: left;
            padding-right: 20px;
        }

        .right-image {
            flex: 0 0 350px;
            /* Set the width of the image container */
        }

        .right-image img {
            max-width: 100%;
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .counters-section .counter-box {
            background-color: #f5f9ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .counter-box .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .counter-box h3 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
        }

        .counter-box p {
            font-size: 1rem;
            color: #6c757d;
        }

        .tabs-section {
            padding: 50px 0;
        }

        .nav-tabs {
            display: flex;
            justify-content: space-around;
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
            border-bottom: 2px solid #ddd;
        }

        .section-heading {
            text-align: center;
        }

        .tabs-section .section-heading {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1.2rem;
            color: #999;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }

        .tab:hover,
        .tab.active {
            color: #000;
            border-bottom: 3px solid orange;
        }

        .tab-content {
            padding: 20px 0;
        }

        .tab-content h2 {
            font-size: 2rem;
            font-weight: bold;
        }

        .tab-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
        }

        .tabs-section {
            padding: 50px 0;
        }

        .nav-tabs {
            display: flex;
            justify-content: space-around;
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
            border-bottom: 2px solid #ddd;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1.2rem;
            color: #999;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }

        .tab:hover,
        .tab.active {
            color: #000;
            border-bottom: 3px solid orange;
        }

        .tab-content {
            padding: 20px 0;
        }

        .tab-content h2 {
            font-size: 2rem;
            font-weight: bold;
        }

        .tab-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
        }
    </style>
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/companies/2.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <?php include 'header.php'; ?>




        <!--header end-->
        <!--header section end-->

        <!-- Hero Start-->
        <section class="digi-hero ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="digi-hero-text mt-5 mt-lg-0">
                            <div>
                                <span class="span-arrow">Best Digital Agency</span>
                                <img src="assets/img/arro-right.svg" alt="arrow" />
                            </div>
                            <h1 class="display-5 fw-bold mb-3">
                                Fastest Rera Registration Made <span class="text-orange fw-bold">Easy</span>

                            </h1>
                            <p class="m-0">
                                Starting at just ₹ 19,000
                            </p>
                            <div class="action-btns mt-4 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="contact-us.html" class="btn rounded-pill bg-orange me-3">Learn More</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 cool-md-6">
                        <div class="digi-hero-img text-center position-relative mt-5">
                            <img src="assets/img/digi-h-boy.png" class="img-fluid" alt="girl" />
                            <ul class="list-unstyled d-none d-xl-block">
                                <li>
                                    <img src="assets/img/digital-marketing/hero-shape-1.png" alt="shape" class="" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/hero-shape-2.png" alt="shape" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/hero-shape-3.png" alt="shape" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/hero-shape-4.png" alt="shape" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero End-->

        <!-- Logo Start -->
        <section class="digtal-marketing-logo pb-120">
            <div class="container">
                <div class="bg-soft-blue py-5 px-4 rounded-3">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <h5 class="mb-4">Trusted by the best companies in the world</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="swiper digi-logo-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/1.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/1-2.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/2.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/2-1.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/3-1.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/4-2.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/5.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/6.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/7.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/8.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/9.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/10.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/11.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/12.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/13.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/14.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/15.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/16.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="assets/img/companies/17.png" class="img-fluid" height="30"
                                                alt="logo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logo End -->
        <h1 class="section-heading">Our Success</h1>

        <section class="counters-section pb-120">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="counter-box">
                            <div class="icon mb-3">
                                <img src="assets/img/icon/rating.png" alt="Project Registered Icon" height="50">
                            </div>
                            <h3 class="counter" data-count="1200">1200+</h3>
                            <p>Project Registered</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-box">
                            <div class="icon mb-3">
                                <img src="assets/img/icon/done.png" alt="Quarterly Progress Report Icon" height="50">
                            </div>
                            <h3 class="counter" data-count="10000">10,000+</h3>
                            <p>Quarterly Progress Report Submitted</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="counter-box">
                            <div class="icon mb-3">
                                <img src="assets/img/icon/deal.png" alt="Home Buyer Consulted Icon" height="50">
                            </div>
                            <h3 class="counter" data-count="500">500+</h3>
                            <p>Home Buyer Consulted</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="tabs-section">
            <div class="container">
                <!-- Tabs -->
                <h1 class="section-heading">About SYTE Consultants</h1>

                <div class="tabs-content-wrapper">
                    <ul class="nav-tabs">
                        <li class="tab active" onclick="openTab('about')">Who we are</li>
                        <li class="tab" onclick="openTab('services')">Our Services</li>
                        <li class="tab" onclick="openTab('apart')">What sets us apart</li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="content-image-wrapper">
                        <div class="tab-content" id="about">
                            <h2>Who we are</h2>
                            <p>SYTE Consultants was founded with a vision to become the go-to partner for all
                                RERA-related matters. Our team comprises dedicated professionals with a deep
                                understanding of the real estate landscape and a commitment to ensuring compliance with
                                RERA regulations.</p>
                            <a href="#" style="color: orange;">Learn more about us</a>

                        </div>

                        <div class="tab-content" id="services" style="display: none;">
                            <h2>Our Services</h2>
                            <p>
                            <ul>
                                <li><strong>Agent Registration:</strong>
                                    <ul>
                                        <li>Individual Registration</li>
                                        <li>Non individual/other Registration</li>
                                        <li>Agent Registration with Consultancy</li>
                                        <li>Agent Renewal</li>
                                    </ul>
                                </li>
                                <li><strong>Project Registration:</strong>
                                    <ul>
                                        <li>Project Registration</li>
                                        <li>Project Registration with Quarterly Progress Reports</li>
                                        <li>RERA Project Packages</li>
                                    </ul>
                                </li>
                                <li><strong>Other Services:</strong>
                                    <ul>
                                        <li>Project Extension</li>
                                        <li>Quarterly Progress Reports</li>
                                        <li>Changes in Bank Account</li>
                                        <li>Changes in Project Name</li>
                                    </ul>
                                </li>
                            </ul>
                            </p>
                        </div>

                        <div class="tab-content" id="apart" style="display: none;">
                            <h2>What sets us apart</h2>
                            <p>Our in-depth knowledge of RERA, combined with our hands-on approach to project
                                management, ensures that we deliver solutions that are not only effective but also
                                sustainable in the long term.</p>
                        </div>

                        <!-- Right Side Image -->
                        <div class="right-image">
                            <img src="./promo.png" alt="RERA News Image">

                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Service Start -->
        <section class="digi-services pb-60 position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <div>
                                <span class="span-arrow"> Our Specialisation </span>
                                <img src="assets/img/arro-right.svg" alt="arrow" />
                            </div>
                            <h2>
                                We have extensive Experience in
                                <span class="text-orange">Following Sectors</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Start of Carousel -->
                <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First slide with 4 cards -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <!-- First 4 Cards -->
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-1.svg" alt="icon" />
                                        <h3 class="h5">Change In Project Name</h3>
                                        <p> Why You Might Need to Change Your Project Name
                                            Rebranding
                                            You may decide to change your project name as part of a broader rebranding
                                            strategy to align with your company’s image or market positioning.</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-2.svg" alt="icon" />
                                        <h3 class="h5">Changes in Bank Account</h3>
                                        <p>Why Update Bank Account Information
                                            RERA Compliance
                                            RERA mandates that all transactions related to real estate projects must
                                            occur through a designated bank account and by syte consultants. </p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-3.svg" alt="icon" />
                                        <h3 class="h5">Quarterly Progress Report</h3>
                                        <p>Our Quarterly Progress Report Services
                                            Data Collection
                                            We gather all the necessary project data, including financial, construction,
                                            and timeline information.
                                            Report Preparation...</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-4.svg" alt="icon" />
                                        <h3 class="h5">Project Extension</h3>
                                        <p>Our Project Extension Expertise
                                            Regulatory Knowledge
                                            We are well-versed in RERA regulations and understand the specific
                                            provisions related to project extension. This knowledge is vital in ensuring
                                            compliance....</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second slide with 4 more cards -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <!-- Additional 4 Cards -->
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-1.svg" alt="icon" />
                                        <h3 class="h5">Change in Project Name</h3>
                                        <p>Why You Might Need to Change Your Project Name
                                            Rebranding
                                            You may decide to change your project name as part of a broader rebranding
                                            strategy to align with your company’s image or market positioning. Legal
                                            Compliance...</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-2.svg" alt="icon" />
                                        <h3 class="h5">Changes in Bank Account</h3>
                                        <p>Why Update Bank Account Information
                                            RERA Compliance
                                            RERA mandates that all transactions related to real estate projects must
                                            occur through a designated bank account. It’s crucial to ensure that the
                                            correct account details...</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-3.svg" alt="icon" />
                                        <h3 class="h5">Quarterly Progress Report</h3>
                                        <p>Our Quarterly Progress Report Services
                                            Data Collection
                                            We gather all the necessary project data, including financial, construction,
                                            and timeline information.
                                            Report Preparation Our professionals prepare...</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-xl-3">
                                    <div class="digi-service-single mb-4 mb-xl-0">
                                        <img src="assets/img/icons/d-8.svg" alt="icon" />
                                        <h3 class="h5">Graphic Design</h3>
                                        <p>Create visually stunning designs to enhance your brand's presence across
                                            platforms.</p>
                                        <a href="services.html" class="read-more-link text-decoration-none">Explore More
                                            <i class="far fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- Transparent Custom Left and Right Buttons -->
                    <button id="customPrevBtn" class="carousel-control-prev-custom">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button id="customNextBtn" class="carousel-control-next-custom">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>



        <!-- Service End -->

        <!-- Newsletter Start -->
        <section class="digi-news-letter">
            <div class="container">
                <div class="bg-dark text-light rounded-custom p-4 p-md-5 p-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="digi-newsletter">
                                <div>
                                    <span class="span-arrow text-pink">Best Yout website</span>
                                    <img src="assets/img/arro-right.svg" alt="arrow" />
                                </div>
                                <h2>Test your Website for Free with Quiety</h2>
                                <p>
                                    Intrinsicly cultivate user-centric collaboration and idea-sharing after value-added
                                    processes
                                    repurpose unique models and global schemas.
                                </p>
                                <form class="mt-4">
                                    <div class="position-relative digi-news-form">
                                        <input type="text" class="form-control" placeholder="Website Url" />
                                        <button class="digi-news-button">Analysis Webiste</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="dg-news-img text-end">
                                <img src="assets/img/d-pie.png" class="img-fluid text-end" alt="pie" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter End -->

        <!-- Why Start -->
        <section class="digi-why pt-120">
            <div class="container">
                <div class="row align-content-center justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="digi-why-left">
                            <img src="assets/img/d-boy-w-p.png" class="img-fluid" alt="Girl" />
                            <ul class="list-unstyled d-none d-md-block">
                                <li>
                                    <img src="assets/img/dg-shape-1.png" class="shadow img-fluid" alt="shape" />
                                </li>
                                <li>
                                    <img src="assets/img/dg-shape-2.png" class="shadow img-fluid" alt="shape" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="digi-why-right pt-4">
                            <div>
                                <span class="span-arrow">Why Choose Us</span>
                                <img src="assets/img/arro-right.svg" class="img-fluid" alt="arrow" />
                            </div>
                            <h2>Why Working With Us?</h2>
                            <p>
                                At SYTE Consultants, we are driven by a singular vision: to be your trusted partner in
                                navigating the complexities of RERA regulations. With a team of dedicated professionals
                                who possess in-depth expertise in the real estate sector, we offer unparalleled guidance
                                in ensuring that your projects are fully compliant with the latest RERA mandates. Our
                                commitment to excellence means that we stay updated on every regulatory change, allowing
                                us to provide you with accurate, timely, and efficient solutions tailored to your
                                specific needs. When you choose SYTE Consultants, you choose peace of mind, knowing that
                                your RERA compliance is in expert hands.
                            </p>
                            <div>
                                <ul class="list-unstyled mb-0 mt-5">
                                    <li class="d-flex p-3 align-items-center">
                                        <div class="me-3">
                                            <img src="assets/img/icons/dw-i-1.svg" alt="icon" />
                                        </div>
                                        <div>
                                            <h4 class="mb-0">250+</h4>
                                            <span>Happy Customer</span>
                                        </div>
                                    </li>
                                    <li class="pe-4 d-flex p-3 align-items-center">
                                        <div class="me-3">
                                            <img src="assets/img/icons/dw-i-2.svg" class="img-fluid" alt="icon" />
                                        </div>
                                        <div>
                                            <h4 class="mb-0">540+</h4>
                                            <span>Succesfull Project</span>
                                        </div>
                                    </li>
                                    <li class="pe-4 d-flex p-3 align-items-center">
                                        <div class="me-3">
                                            <img src="assets/img/icons/dw-i-3.svg" class="img-fluid" alt="icon" />
                                        </div>
                                        <div>
                                            <h4 class="mb-0">80+</h4>
                                            <span> Team Member</span>
                                        </div>
                                    </li>
                                    <li class="pe-4 d-flex p-3 align-items-center">
                                        <div class="me-3">
                                            <img src="assets/img/icons/dw-i-4.svg" class="img-fluid" alt="icon" />
                                        </div>
                                        <div>
                                            <h4 class="mb-0">99%</h4>
                                            <span>Customer Satisfaction</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why End -->

        <!-- How It Works -->
        <section class="digi-how-works bg-white ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="digi-how-works-left">
                            <div>
                                <span class="span-arrow">How It Works</span>
                                <img src="assets/img/arro-right.svg" class="img-fluid" alt="arrow" />
                            </div>
                            <h2>
                                Our Bulletproof Process for
                                <span class="text-orang">RERA Compliance and Real Estate Solutions</span>
                            </h2>
                            <p>
                                SYTE Consultants was founded with a vision to become the go-to partner for all
                                RERA-related matters. Our team comprises dedicated professionals with a deep
                                understanding of the real estate landscape and a commitment to ensuring compliance with
                                RERA regulations. With years of experience and a track record of success, we have
                                established ourselves as a trusted resource in the industry.
                            </p>
                            <a href="request-demo.html" class="btn rounded-pill bg-orange mt-3">
                                Request a Quoate
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="digi-how-works-right mt-5 mt-lg-0">
                            <div class="dig-how-steps">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-md-flex justify-content-between align-items-center mb-3">
                                        <div class="me-3">
                                            <img src="assets/img/icons/st-1.png" class="img-fluid mb-3 mb-md-0"
                                                alt="icons" />
                                        </div>
                                        <div>
                                            <span class="text-orange fw-bold">Step 1</span>
                                            <h6>Agent Registration</h6>
                                            <p class="m-0">
                                                We provide tailored solutions for individual and non-individual agent
                                                registrations, combining consultancy services when needed. We also
                                                handle agent renewals to ensure you remain compliant with all
                                                regulations.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-md-flex justify-content-between align-items-center mb-3">
                                        <div class="me-3">
                                            <img src="assets/img/icons/st-2.png" class="img-fluid mb-3 mb-md-0"
                                                alt="icons" />
                                        </div>
                                        <div>
                                            <span class="text-orange fw-bold">Step 2</span>
                                            <h6>Project Registration</h6>
                                            <p class="m-0">
                                                Our services cover project registration and quarterly progress reports,
                                                ensuring full compliance with RERA. We offer customized RERA project
                                                packages suited to your development needs.

                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-md-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <img src="assets/img/icons/st-3.png" class="img-fluid mb-3 mb-md-0"
                                                alt="icons" />
                                        </div>
                                        <div>
                                            <span class="text-orange fw-bold">Step 3</span>
                                            <h6>Other Services and Consultancy</h6>
                                            <p class="m-0">
                                                SYTE Consultants offers assistance with project extensions, quarterly
                                                progress reports, and administrative updates like bank account or
                                                project name changes, ensuring you stay compliant and risk-free. </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shape">
                                    <ul class="list-unstyled mb-0">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works End -->


        <!-- Integration Start -->
        <section class="digi-integration bg-dark position-relative"
            style="background: url('')no-repeat center bottom">
            <div class="digi-testimonial">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <div>
                                    <span class="span-arrow text-pink">Custome Feedback</span>
                                    <img src="assets/img/arro-right.svg" class="img-fluid" alt="arrow" />
                                </div>
                                <h2 class="text-dark">
                                    Hear what our <span class="text-pink">amazing</span>
                                    customers say
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="position-relative">
                                <div class="swiper digi-testimonial-wrapper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div
                                                class="d-md-flex align-items-center digi-testimonial-single border bg-white shadow-lg">
                                                <div class="text-center text-md-start">
                                                    <img src="assets/img/digi-t-1.png" class="me-md-4 mb-4 mb-md-0"
                                                        alt="Person" />
                                                </div>
                                                <div>
                                                    <h5 class="mb-3">
                                                        "Agency X helped us to reach our business goals"
                                                    </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Vitae, aliquet duis pellentesque pretium mattis
                                                        orci. Vestibulum nunc diam tellus ac tempor. Nulla a
                                                        commod.
                                                    </p>
                                                    <h6 class="m-0">Kyle Johnston</h6>
                                                    <span class="text-orange fs-sm text-muted">Founder & CEO</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="d-md-flex align-items-center digi-testimonial-single border bg-white shadow-lg">
                                                <div class="text-center text-md-start">
                                                    <img src="assets/img/digi-t-1.png" class="me-md-4 mb-4 mb-md-0"
                                                        alt="Person" />
                                                </div>
                                                <div>
                                                    <h5 class="mb-3">
                                                        "Agency X helped us to reach our business goals"
                                                    </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Vitae, aliquet duis pellentesque pretium mattis
                                                        orci. Vestibulum nunc diam tellus ac tempor. Nulla a
                                                        commod.
                                                    </p>
                                                    <h6 class="m-0">Kyle Johnston</h6>
                                                    <span class="text-orange fs-sm text-muted">Founder & CEO</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="d-md-flex align-items-center digi-testimonial-single border bg-white shadow-lg">
                                                <div class="text-center text-md-start">
                                                    <img src="assets/img/digi-t-1.png" class="me-md-4 mb-4 mb-md-0"
                                                        alt="Person" />
                                                </div>
                                                <div>
                                                    <h5 class="mb-3">
                                                        "Agency X helped us to reach our business goals"
                                                    </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit. Vitae, aliquet duis pellentesque pretium mattis
                                                        orci. Vestibulum nunc diam tellus ac tempor. Nulla a
                                                        commod.
                                                    </p>
                                                    <h6 class="m-0">Kyle Johnston</h6>
                                                    <span class="text-orange fs-sm text-muted">Founder & CEO</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="digi-nav-control">
                                    <span class="swiper-button-prev shadow-sm"><i class="far fa-arrow-left"></i></span>
                                    <span class="swiper-button-next shadow-sm"><i class="far fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="int-icon-one position-relative">
                            <ul class="list-unstyled mb-0 d-none d-lg-block">
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/fa.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/fi.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/slack.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/inst.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/er.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/google.svg" alt="icon" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <div>
                                <span class="span-arrow text-pink">Don't know what suits your business? </span>
                                <img src="assets/img/arro-right.svg" alt="arrow" />
                            </div>
                            <h2 class="mb-4">Get Free First Consultation now!</h2>
                            <div>
                                <a href="contact-us.html" class="btn rounded-pill bg-orange me-3 mb-3">Get in touch</a>
                                <a href="integrations.html" class="btn rounded-pill btn-outline-light mb-3">Explore more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="int-icon-two position-relative">
                            <ul class="list-unstyled mb-0 d-none d-lg-block">
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/slash.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/tree.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/drive.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/in.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/star.svg" alt="icon" />
                                </li>
                                <li>
                                    <img src="assets/img/digital-marketing/int-icon/twi.svg" alt="icon" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Integration End -->

        <!-- News Start -->
        <section class="dg-news pt-120 pb-60">
            <div class="container">
                <div class="row justify-content-between align-items-end mb-5">
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <div>
                                <span class="span-arrow">News & Blogs</span>
                                <img src="assets/img/arro-right.svg" alt="arrow" />
                            </div>
                            <h2>Browse our Articles on Marketing & Growth</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="text-md-end mt-3 mt-md-0">
                            <a href="blog.html" class="btn rounded-pill btn-outline-dark">Browse Articles</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="digi-blog-single border p-3 rounded mb-4 mb-lg-4">
                            <a href="blog-single.html">
                                <div class="digi-blog-thumb">
                                    <img src="assets/img/blog/d-blog-1.jpg" class="img-fluid w-100 rounded-top"
                                        alt="Person" />
                                    <span class="d-tag marketing">Marketing</span>
                                </div>
                                <div class="mt-4 digi-blog-info">
                                    <span class="fs-sm text-muted fw-normal"><i
                                            class="fal fa-calendar-minus me-2"></i>22 Feb, 2022</span>
                                    <h4>
                                        5 SEO Factors to Consider for your Website to rank Better
                                    </h4>
                                    <p>
                                        Holisticly innovate principle-centered evia eth Eincentivize
                                        sticky processes
                                    </p>
                                    <a href="blog-single.html" class="read-more-link text-decoration-none">Explore More
                                        <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="digi-blog-single border p-3 rounded mb-4 mb-lg-0">
                            <a href="blog-single.html">
                                <div class="digi-blog-thumb">
                                    <img src="assets/img/blog/d-blog-2.jpg" class="img-fluid w-100 rounded-top"
                                        alt="Person" />
                                    <span class="d-tag design">Marketing</span>
                                </div>
                                <div class="mt-4 digi-blog-info">
                                    <span class="fs-sm text-muted fw-normal"><i
                                            class="fal fa-calendar-minus me-2"></i>22 Feb, 2022</span>
                                    <h4>
                                        5 SEO Factors to Consider for your Website to rank Better
                                    </h4>
                                    <p>
                                        Holisticly innovate principle-centered evia eth Eincentivize
                                        sticky processes
                                    </p>
                                    <a href="blog-single.html" class="read-more-link text-decoration-none">Explore More
                                        <i class="far fa-arrow-right ms-2"></i></a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="digi-blog-list">
                            <div class="list-header">
                                <h5>The Top Three Insights</h5>
                            </div>
                            <div class="digi-blog-posts">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <a href="blog-single.html">
                                            <span class="fs-sm text-muted">John Carter October 30, 2021</span>
                                            <h5 class="h6">
                                                5 SEO Factors to Consider for your Website to rank Better
                                            </h5>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="blog-single.html">
                                            <span class="fs-sm text-muted">John Carter October 30, 2021</span>
                                            <h5 class="h6">
                                                5 SEO Factors to Consider for your Website to rank Better
                                            </h5>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="blog-single.html">
                                            <span class="fs-sm text-muted">John Carter October 30, 2021</span>
                                            <h5 class="h6">
                                                5 SEO Factors to Consider for your Website to rank Better
                                            </h5>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="blog-single.html">
                                            <span class="fs-sm text-muted">John Carter October 30, 2021</span>
                                            <h5 class="h6">
                                                5 SEO Factors to Consider for your Website to rank Better
                                            </h5>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News End -->

        <!-- Contact Start -->
        <section class="digi-contact pt-60 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="digi-contact-left">
                            <div>
                                <span class="span-arrow">Best Yout website</span>
                                <img src="assets/img/arro-right.svg" alt="arrow" />
                            </div>
                            <h2 class="mb-3">
                                Get in touch <span class="text-orange">Today!</span>
                            </h2>
                            <p>
                                Seamlessly enable best-of-breed portals and out-of-the-box core
                                competencies cross-platform channels and granular infomediaries.
                            </p>
                            <ul class="d-flex list-unstyled d-flex flex-wrap list-two-col mb-0 mt-5">
                                <li class="pe-4">
                                    <div class="bg-white contact-box mb-4 mb-md-0">
                                        <img src="assets/img/icons/c-i-1.svg" alt="icon" />
                                        <h4 class="h5">Email Address</h4>
                                        <p class="fw-bold">connectsyte@gmail.com<br>.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bg-white contact-box">
                                        <img src="assets/img/icons/c-i-2.svg" alt="icon" />
                                        <h4 class="h5">Phone</h4>
                                        <p class="fw-bold">+91 84466 56437<br>
                                            +91 91569 69459</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="digi-contact-form-bg position-relative">
                            <ul class="list-unstyled d-none d-xl-block m-0">
                                <li></li>
                                <li></li>
                            </ul>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="First Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Phone" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Subject" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Company" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea rows="5" class="w-100 form-control"
                                            placeholder="Message.."></textarea>
                                    </div>
                                    <div class="col-3">
                                        <button class="mt-4 btn rounded-pill bg-orange">
                                            Get in touch
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->

        <!--footer section start-->
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top bg-dark text-white ptb-120"
                style="background: url('') no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between">
                        <!-- SYTE Consultants Info -->
                        <div class="col-md-12 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="assets/img/companies/2.png" alt="logo" class="img-fluid logo-white">
                                    <img src="assets/img/companies/2.png" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>SYTE Consultants was founded with a vision to become the go-to partner for all
                                    RERA-related matters. Our team comprises dedicated professionals with a deep
                                    understanding.</p>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-single-col">
                                <h3>Contact Info</h3>
                                <ul class="list-unstyled footer-nav-list mb-lg-0">
                                    <li><a href="tel:+918446656437" class="text-decoration-none"><i
                                                class="fas fa-phone-alt"></i> +91 84466 56437 <br> &nbsp;
                                            &nbsp;&nbsp;&nbsp;+91 91569 69459</a></li>
                                    <li><a href="mailto:connectsyte@gmail.com"
                                            class="text-decoration-none d-flex align-items-center"><i
                                                class="fas fa-envelope"></i>&nbsp;connectsyte@gmail.com</a></li>
                                    <li><i class="fas fa-map-marker-alt"></i> Mumbai, Pune, Solapur, Nashik, Nagpur,
                                        Amravati</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Our Services -->
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-single-col">
                                <h3>Our Services</h3>
                                <ul class="list-unstyled footer-nav-list mb-lg-0">
                                    <li><a href="project-registration.html" class="text-decoration-none">Project
                                            Registration</a></li>
                                    <li><a href="individual-agent-registration.html"
                                            class="text-decoration-none">Individual Agent Registration</a></li>
                                    <li><a href="project-registration-qpr.html" class="text-decoration-none">Project
                                            Registration with Quarterly Progress Report</a></li>
                                    <li><a href="project-extension.html" class="text-decoration-none">Project
                                            Extension</a></li>
                                    <li><a href="yearly-consultancy.html" class="text-decoration-none">Yearly
                                            Consultancy</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Subscribe Section (Image Removed) -->
                        <div class="col-md-12 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <p>Our latest news, articles, and resources will be sent to your inbox weekly.</p>
                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!--footer top end-->

    <!--footer bottom start-->
    <div class="footer-bottom bg-dark text-white  py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7">
                    <div class="copyright-text">
                        <p class="mb-lg-0 mb-md-0">&copy; 2021 Quiety Rights Reserved. Designed By <a
                                href="https://themetags.com/" class="text-decoration-none">ThemeTags</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="footer-single-col text-start text-lg-end text-md-end">
                        <ul class="list-unstyled list-inline footer-social-list mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom end-->
    </footer>
    <!--footer section end-->
    <!--footer section end-->
    </div>


    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup2@1.0.0/dist/index.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
        function openTab(tabName) {
            var i;
            var x = document.getElementsByClassName("tab-content");
            var tabs = document.getElementsByClassName("tab");

            // Hide all tab content
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            // Remove active class from all tabs
            for (i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }

            // Show the selected tab content
            document.getElementById(tabName).style.display = "block";

            // Add active class to the clicked tab
            event.currentTarget.classList.add("active");
        }
        document.getElementById('customPrevBtn').addEventListener('click', function () {
            $('#servicesCarousel').carousel('prev');
        });

        document.getElementById('customNextBtn').addEventListener('click', function () {
            $('#servicesCarousel').carousel('next');
        });
    </script>
    <!-- JavaScript for custom buttons -->

    
</body>

</html>