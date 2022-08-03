@extends('layouts.users')
@section('users.css')
    <!--title-->
    <title>Resume | Home</title>
    <!--favicon icon-->
    <link rel="icon" href="{{ asset('users/img/favicon.png') }}" type="image/png" sizes="16x16">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&amp;display=swap"
          rel="stylesheet">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('users/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('users/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('users/css/themify-icons.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('users/css/animate.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('users/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('users/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('users/css/responsive.css') }}">
@endsection
@section('users.main')
    <div class="main">
        <!--hero section start-->
        <section class="hero-section pt-100 background-img"
                 style="background: url('{{ asset('users/img/app-hero-bg.jpg') }}')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between py-5">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-content-left text-white">
                            <h1 class="text-white font-weight-bold">Brainstorming for Desired Usability</h1>
                            <p class="lead">
                                Our design projects are fresh and simple and will benefit your business greatly. Learn more
                                about our work!
                            </p>


                            <div class="video-promo-content py-4 d-flex align-items-center">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
                                   class="popup-youtube video-play-icon-without-bip video-play-icon mr-3"><span class="ti-control-play"></span></a> Watch Video Overview

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="hero-animation-img">
                            <img src="{{ asset('users/img/app-product.png') }}" alt="app" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-img-absolute">
                <img src="{{ asset('users/img/hero-bg-shape-1.svg') }}" alt="wave shape" class="img-fluid">
            </div>
        </section>
        <!--hero section end-->


        <!--contact us section start-->
        <section id="contact" class="contact-us ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="section-heading">
                            <h2>Contact With Us</h2>
                            <p>It's very easy to get in touch with us. Just use the contact form or pay us a
                                visit for a coffee at the office. Dynamically innovate competitive technology after an
                                expanded array of leadership.</p>
                        </div>
                        <div class="footer-address">
                            <h6><strong>Head Office</strong></h6>
                            <p>121 King St, Melbourne VIC 3000, Australia</p>
                            <ul>
                                <li><span>Phone: +61 2 8376 6284</span></li>
                                <li><span>Email : <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form action="#" method="POST" id="contactForm" class="contact-us-form" novalidate="novalidate">
                            <h5>Reach us quickly</h5>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                                               required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" class="form-control" id="phone"
                                               placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="company" value="" size="40" class="form-control"
                                               id="company" placeholder="Your Company">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                              placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn solid-btn" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

        <!--client section start-->
        <section class="client-section ptb-100">
            <div class="container">
                <!--clients logo start-->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Trusted by Companies</h2>
                            <p class="lead">
                                Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                                e-business. Conveniently innovate compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-5-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-1-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-6-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-3-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-4-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-5-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-7-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-2-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-1-color.png') }}" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{ asset('users/img/client-3-color.png') }}" alt="client logo" class="client-img">
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients logo end-->
            </div>
        </section>
        <!--client section start-->

    </div>
@endsection
@section('users.js')
    <script src="{{ asset('users/js/jquery-3.5.0.min.js') }}"></script>
    <!--Popper js-->
    <script src="{{ asset('users/js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('users/js/bootstrap.min.js') }}"></script>
    <!--Magnific popup js-->
    <script src="{{ asset('users/js/jquery.magnific-popup.min.js') }}"></script>
    <!--jquery easing js-->
    <script src="{{ asset('users/js/jquery.easing.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('users/js/wow.min.js') }}"></script>
    <!--owl carousel js-->
    <script src="{{ asset('users/js/owl.carousel.min.js') }}"></script>
    <!--countdown js-->
    <script src="{{ asset('users/js/jquery.countdown.min.js') }}"></script>
    <!--validator js-->
    <script src="{{ asset('users/js/validator.min.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('users/js/scripts.js') }}"></script>
@endsection
