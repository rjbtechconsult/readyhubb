<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Readyhubb</title>

        <?php include 'css-links.php';?>
    </head>
    <body>
        <!-- header -->
        <?php include './header.php';?>

        <!-- main-content -->
        <div class="main-content">
            
            <!-- Announcement bar -->
            <div class="alert alert-warning alert-dismissible fade show homepage-alert" role="alert">
                <div class="container">
                    Were you looking to schedule with your favorite business? Head to our booking page.
                    <button type="button" data-feather="x" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            <!-- Hero -->
            <header class="hero-wrapper bg-purple">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">
                            <span>
                                <h1 class="heading-1 text-center text-md-start" data-aos="fade-up" data-aos-duration="1000">We help your business grow</h1>
                                <h4 class="hero-subheading text-center text-md-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    Work smarter with our scheduling, marketing, and payment tools
                                </h4>
                                <div class="mt-4 d-flex d-md-block justify-content-around" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <a href="#!" class="btn btn-primary me-0 me-md-3">Start free trial</a>
                                    <a href="#!" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#demoModal">Schedule a demo</a>
                                </div>
                            </span>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center d-md-none mt-4 mt-md-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="home-hero-image ">
                                <img src="assets/images/home-hero-image.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-hero-image-desktop d-none d-md-flex">
                    <div class="align-self-center hero-rotate-wrapper rotate">
                        <div class="hero-rotate-wrapper-inner">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <img class="" src="assets/images/home-hero-image.png" alt="">
                </div>

            </header>

            <!-- Features -->
            <section class="section d-flex align-items-center features">
                <div class="phone-box bookings d-none d-lg-block">
                    <div class="phone-box-inner">
                        <img id="phone-bookings" class="phone bounce" src="assets/images/phone-bookings.png" alt="">
                        <img id="phone-portfolio" class="phone bounce" src="assets/images/phone-portfolio.png" alt="" style="display: none;">
                        <img id="phone-payments" class="phone bounce" src="assets/images/phone-payments.png" alt="" style="display: none;">
                        <img id="phone-analytics" class="phone bounce" src="assets/images/phone-analytics.png" alt="" style="display: none;">
                        <img id="phone-clients" class="phone bounce" src="assets/images/phone-clients.png" alt="" style="display: none;">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <h2 class="heading-2 mb-4 text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"><span class="text-primary heading-2">Why </span> <span class="heading-2">Readyhubb?</span></h2>
                            <ul class="list-unstyled">

                                <!-- Bookings -->
                                <li class="zoom-on-hover" >
                                    <div id="bookings-card" class="card features-card bookings" data-feature="bookings" data-aos="fade-up" data-aos-duration="200" data-aos-delay="200">
                                        <div class="card-body">
                                            <div class="line-wrapper">
                                                <div class="line">
                                                    <div class="inner-line"></div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="icon-round features-icon bookings-icon">
                                                        <!-- <i class="icon"> -->
                                                            <img class="icon"  draggable="true" role="img" class="emoji" alt="❤️" src="https://s.w.org/images/core/emoji/13.0.1/svg/2764.svg">
                                                        <!-- </i> -->
                                                        <!-- <img class="icon" src="assets/images/emojies/❤️.svg" alt=""> -->
                                                    </div>
                                                    <h4 class="features-heading">Manage your bookings</h4>
                                                </div>
                                                
                                                <p class="text">
                                                    Focus on the person in front of you, instead of the phone. We'll play the middle man between your clients and your calendar.
                                                    <img id="phone-bookings" class="phone bounce w-100 d-block d-lg-none mt-3" src="assets/images/phone-bookings.png" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Portfolio -->
                                <li class="mt-3 zoom-on-hover" >
                                    <div class="card features-card" data-feature="portfolio" data-aos="fade-up" data-aos-duration="200" data-aos-delay="400">
                                        <div class="card-body">
                                            <div class="line-wrapper">
                                                <div class="line">
                                                    <div class="inner-line"></div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="icon-round features-icon portfolio-icon">
                                                        <!-- <i class="icon">👍</i> -->
                                                        <img class="icon" draggable="false" role="img" class="emoji" alt="👍" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f44d.svg">
                                                        <!-- <img class="icon" src="assets/images/emojies/👍.svg" alt=""> -->
                                                    </div>
                                                    <h4 class="features-heading">Share your portfolio</h4>
                                                </div>
                                                <p class="text">
                                                    Payments, people, documentation. We'll streamline the day-to-day, so you can focus on running your business - not the other way around.
                                                    <img id="phone-portfolio" class="phone bounce w-100 d-block d-lg-none mt-3" src="assets/images/phone-portfolio.png" alt="" style="display: none;">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Payments -->
                                <li class="mt-3 zoom-on-hover" >
                                    <div class="card features-card" data-feature="payments" data-aos="fade-up" data-aos-duration="200" data-aos-delay="600">
                                        <div class="card-body">
                                            <div class="line-wrapper">
                                                <div class="line">
                                                    <div class="inner-line"></div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="icon-round features-icon payments-icon">
                                                        <!-- <i class="icon">🎀</i> -->
                                                        <img class="icon" draggable="false" role="img" class="emoji" alt="🎀" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f380.svg">
                                                        <!-- <img class="icon" src="assets/images/emojies/🎀.svg" alt=""> -->
                                                    </div>
                                                    <h4 class="features-heading">Get online payments</h4>
                                                </div>
                                                <p class="text">
                                                    Flexible payments solutions to meet the needs of your business - on the go, in person, or even when your customers don’t show up.
                                                    <img id="phone-payments" class="phone bounce w-100 d-block d-lg-none mt-3" src="assets/images/phone-payments.png" alt="" style="display: none;">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Analytics -->
                                <li class="mt-3 zoom-on-hover" >
                                    <div class="card features-card" data-feature="analytics" data-aos="fade-up" data-aos-duration="200" data-aos-delay="800">
                                        <div class="card-body">
                                            <div class="line-wrapper">
                                                <div class="line">
                                                    <div class="inner-line"></div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="icon-round features-icon analytics-icon">
                                                        <!-- <i class="icon">🔥</i> -->
                                                        <img class="icon" draggable="false" role="img" class="emoji" alt="🔥" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f525.svg">
                                                        <!-- <img class="icon" src="assets/images/emojies/🔥.svg" alt=""> -->
                                                    </div>
                                                    <h4 class="features-heading">Keep an eye on your analytics</h4>
                                                </div>
                                                <p class="text">
                                                    Your community and attract new customers using communication tools, promotions, and Boost. Everything you need is built in.
                                                    <img id="phone-analytics" class="phone bounce  w-100 d-block d-lg-none mt-3" src="assets/images/phone-analytics.png" alt="" style="display: none;">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Clients -->
                                <li class="mt-3 zoom-on-hover" >
                                    <div class="card features-card" data-feature="clients" data-aos="fade-up" data-aos-duration="200" data-aos-delay="1000">
                                        <div class="card-body">
                                            <div class="line-wrapper">
                                                <div class="line">
                                                    <div class="inner-line"></div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="icon-round features-icon clients-icon">
                                                        <!-- <i class="icon">💎</i> -->
                                                        <img class="icon" draggable="false" role="img" class="emoji" alt="💎" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f48e.svg">
                                                        <!-- <img class="icon" src="assets/images/emojies/💎.svg" alt=""> -->
                                                    </div>
                                                    <h4 class="features-heading">Manage your clients</h4>
                                                </div>
                                                <p class="text">
                                                    Rely on us to help you stay busy and to protect yourself against no-shows. Every hour you put in? We want it to count.
                                                    <img id="phone-clients" class="phone bounce w-100 d-block d-lg-none mt-3" src="assets/images/phone-clients.png" alt="" style="display: none;">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <div class="text-center text-lg-start">
                                <a href="/features" class="btn btn-primary mt-4">Explore all features</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How it works -->
            <section class="section how-it-works d-flex align-items-center">
                <div class="tablet-box d-none d-lg-block">
                    <div class="tablet-box-inner">
                        <img class="tablet bounce" src="assets/images/tablet.png" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h2 class="heading-2 mb-4 text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">How it works</h2>
                            <ul class="list-unstyled">

                                <!-- Set up your business -->
                                <li class="list-item ">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex flex-column icon-col">
                                            <div class="icon-round set-up-business-icon my-auto mx-auto mx-lg-0">
                                                <!-- <i class="icon">🙌</i> -->
                                                <img class="icon" draggable="false" role="img" class="emoji" alt="🙌" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f64c.svg">
                                                <!-- <img class="icon" src="assets/images/emojies/🙌.svg" alt=""> -->
                                                <img class="dotted-line-left" src="assets/images/dotted-line-left.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8" data-aos="fade-right" data-aos-duration="200" data-aos-delay="200">
                                            <div class="card zoom-on-hover">
                                                <div class="card-body">
                                                    <h4 class="card-heading">Set up your business</h4>
                                                    <p class="text">
                                                        Add your services, customize your availability, and launch in minutes to open up your calendar to millions
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- set your schedule -->
                                <li class="list-item mt-5">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex flex-column icon-col">
                                            <div class="icon-round set-your-schedule-icon my-auto mx-auto mx-lg-0">
                                                <!-- <i class="icon">📅</i> -->
                                                <img class="icon" draggable="false" role="img" class="emoji" alt="📅" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f4c5.svg">
                                                <img class="dotted-line-right" src="assets/images/dotted-line-right.svg" alt="">
                                                <!-- <img class="icon" src="assets/images/emojies/🙌.svg" alt=""> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-8" data-aos="fade-right" data-aos-duration="200" data-aos-delay="400">
                                            <div class="card zoom-on-hover">
                                                <div class="card-body">
                                                    <h4 class="card-heading">Set your schedule</h4>
                                                    <p class="text">
                                                        Your business, your terms. With flexible calendars, pain-free class management, and client-friendly
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Scale up -->
                                <li class="list-item mt-5">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex flex-column icon-col">
                                            <div class="icon-round get-online-bookings-icon my-auto mx-auto mx-lg-0">
                                                <!-- <i class="icon">😍</i> -->
                                                <img class="icon" draggable="false" role="img" class="emoji" alt="😍" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f60d.svg">
                                                <img class="dotted-line-left d-block d-lg-none" src="assets/images/dotted-line-left.svg" alt="">
                                                <!-- <img class="icon" src="assets/images/emojies/😍.svg" alt=""> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-8" data-aos="fade-right" data-aos-duration="200" data-aos-delay="600">
                                            <div class="card zoom-on-hover">
                                                <div class="card-body">
                                                    <h4 class="card-heading">Get instant online bookings</h4>
                                                    <p class="text">
                                                        From book =ing appointments to payment processing, manage your business in one place
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                
            </section>

            <!-- Testimonial -->
            <section class="section testimonial" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-lg-10">
                            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="carousel-item active p-4">
                                        <div class="card testimonial-card item">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="testimonial-image-wrapper">
                                                        <img class="testimonial-image" src="assets/images/mandy-pierce.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex">
                                                    <div class="card-body my-auto">
                                                        <h2 class="heading-2 text-center text-lg-start">“Really friendly and welcoming! Would definitely recommend, excellent cut”</h2>
                                                        <p class="mb-0 text-center text-lg-start">
                                                            <small class="text-grey">
                                                                Mandy Pierce
                                                            </small>
                                                            <br>
                                                            <small class="text-primary">
                                                                Kay Dream venue
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item p-4">
                                        <div class="card testimonial-card item">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="testimonial-image-wrapper">
                                                        <img class="testimonial-image" src="assets/images/mandy-pierce.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex">
                                                    <div class="card-body my-auto">
                                                        <h2 class="heading-2 text-center text-lg-start">“Really friendly and welcoming! Would definitely recommend, excellent cut”</h2>
                                                        <p class="mb-0 text-center text-lg-start">
                                                            <small class="text-grey">
                                                                Mandy Pierce
                                                            </small>
                                                            <br>
                                                            <small class="text-primary">
                                                                Kay Dream venue
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev btn-icon" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                    <i data-feather="chevron-left" class="text-dark"></i>
                                </button>
                                <button class="carousel-control-next btn-icon" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                    <i data-feather="chevron-right" class="text-dark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- Blog -->
            <section class="section blog" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                <div class="container  ">
                    <div class="controls-wrapper">
                        <h2 class="heading-2">Our blog</h2>
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="/blog" class="btn btn-primary">View all</a>
                            </li>
                            <li class="list-inline-item">
                                <button id="prev-blog" class="btn btn-icon">
                                    <i data-feather="chevron-left" class="icon text-dark"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <button id="next-blog" class="btn btn-icon">
                                    <i data-feather="chevron-right" class="icon text-dark"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="container-fluid me-0 pe-0">
                    <div class="owl-carousel owl-theme blog-slide">

                        <div class="item">
                            <div class="card blog-card zoom-on-hover">
                                <a class="blog-link" href="#!">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/1.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Beauty</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">From wrinkles, rashes and pigment spots</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            World designers and stylists offer to combine short skirts with oversized jackets, tops and shirts.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <a class="blog-link" href="#!">
                                <div class="card blog-card zoom-on-hover">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/2.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Fashion</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">Seven stylish home suits made of natural fabrics</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            For each item sold, the TOUCH TO brand transfers 1% to the organization "Mom, plant a tree!"
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a class="blog-link" href="#!">
                                <div class="card blog-card zoom-on-hover">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/3.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Business resources</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">These Are the Best YouTube Channels</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            That’s why we took to the internet to find the best barbering, hairdressing, and hair tutorial channels.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a class="blog-link" href="#!">
                                <div class="card blog-card zoom-on-hover">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/1.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Beauty</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">From wrinkles, rashes and pigment spots</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            World designers and stylists offer to combine short skirts with oversized jackets, tops and shirts.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a class="blog-link" href="#!">
                                <div class="card blog-card zoom-on-hover">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/1.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Beauty</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">From wrinkles, rashes and pigment spots</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            World designers and stylists offer to combine short skirts with oversized jackets, tops and shirts.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a class="blog-link" href="#!">
                                <div class="card blog-card zoom-on-hover">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/1.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Beauty</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">From wrinkles, rashes and pigment spots</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            World designers and stylists offer to combine short skirts with oversized jackets, tops and shirts.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="item">
                            <a class="blog-link" href="#!">
                                <div class="card blog-card zoom-on-hover">
                                    <div class="image-wrapper">
                                        <img src="assets/images/blog/1.png" class="card-img-top" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-grey mb-0 truncate-1-lines">Beauty</p>
                                        <h5 class="card-title font-bold truncate-2-lines ">From wrinkles, rashes and pigment spots</h5>
                                        <p class="card-text text-grey truncate-3-lines">
                                            World designers and stylists offer to combine short skirts with oversized jackets, tops and shirts.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>

                

            </section>
            
            <!-- Contact -->
            <section class="section how-it-works contact d-flex align-items-center">
                <div class="tablet-box d-none d-lg-block">
                    <div class="tablet-box-inner">
                        <img class="tablet bounce" src="assets./images/contact-image.png" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-1">
                            <h2 class="heading-2 mb-4 text-center text-lg-start">Chat, email, or call us</h2>
                            <p class="text-grey text-center text-lg-start" data-aos="fade-up" data-aos-duration="200" data-aos-delay="200">
                                Our customer experience (CX) team is on hand to answer your questions every day. They’re here for you when you need them.
                            </p>

                            <div class="text-center text-lg-start" data-aos="fade-up" data-aos-duration="200" data-aos-delay="600">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">Contact us</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </section>

        </div>

        <!-- boost -->
        <?php include './boost.php';?>
        <!-- footer -->
        <?php include './footer.php';?>

        <!-- JS dependencies -->
        <?php include './js-links.php';?>

        <!-- Include independent JS file here -->
        <!-- <script src="/assets/javascript/homepage.js"></script> -->
    </body>
</html>