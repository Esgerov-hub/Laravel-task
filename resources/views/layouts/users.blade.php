<!doctype html>
<html lang="en">

<!-- Mirrored from appco.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 08:12:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="AppCo app landing page template or product landing page template helps you easily create websites for your app or product,  landing page template form promotion and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    @yield('users.css')

</head>
<body>

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('users/img/logo-white-1x.png') }}" width="120" alt="logo"
                                                           class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('vacancy') }}">Vacancy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<!--header section end-->

<!--body content wrap start-->
@yield('users.main')
<!--body content wrap end-->

<!--shape image start-->
<div class="shape-img subscribe-wrap">
    <img src="{{ asset('users/img/footer-top-shape.png') }}" alt="footer shape" class="img-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="#" method="post" class="subscribe-form subscribe-form-footer d-none d-md-block d-lg-block">
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control input" id="email-footer" name="email"
                               placeholder="info@yourdomain.com">
                        <input type="submit" class="button btn solid-btn" id="submit-footer" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--shape image end-->

<!--footer section start-->
<footer class="footer-section">

    <!--footer top start-->
    <div class="footer-top pt-150 background-img-2"
         style="background: url('{{ asset('users/img/footer-bg.png') }}')no-repeat center top / cover">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <img src="{{ asset('users/img/logo-white-1x.png') }}" alt="footer logo" width="120" class="img-fluid mb-3">
                        <p>Holisticly empower premium architectures without value-added ideas. Seamlessly evolve
                            cross-platform experiences.</p>

                        <div class="social-list-wrap">
                            <ul class="social-list list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><span
                                            class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span
                                            class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"
                                                                title="Instagram"><span class="ti-instagram"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"
                                                                title="printerst"><span class="ti-pinterest"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <div class="footer-nav-wrap text-white">
                                <h5 class="mb-3 text-white">Resources</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="#">Help</a></li>
                                    <li class="mb-2"><a href="#">Events</a></li>
                                    <li class="mb-2"><a href="#">Live Support</a></li>
                                    <li class="mb-2"><a href="#">Open Sources</a></li>
                                    <li class="mb-2"><a href="#">Documentation</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <div class="footer-nav-wrap text-white">
                                <h5 class="mb-3 text-white">Company</h5>
                                <ul class="list-unstyled support-list">
                                    <li class="mb-2">
                                        <a href="#">About Us</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Careers</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Customers</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Community</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="footer-nav-wrap text-white">
                                <h5 class="mb-3 text-white">Location</h5>
                                <ul class="list-unstyled support-list">
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-location-pin mr-2"></span>
                                        121 King Melbourne
                                        <br>Australia 3000
                                    </li>
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-mobile mr-2"></span> <a
                                            href="tel:+61283766284"> +61 2 8376 6284</a></li>
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-email mr-2"></span><a
                                            href="mailto:mail@example.com"> mail@example.com</a></li>
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-world mr-2"></span><a
                                            href="#"> www.yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom copyright start-->
        <div class="footer-bottom border-gray-light mt-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <div class="copyright-wrap small-text">
                            <p class="mb-0 text-white">© ThemeTags Design Agency, All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="small-text" href="#">Terms</a></li>
                                <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>
                                <li class="list-inline-item"><a class="small-text" href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom copyright end-->
    </div>
    <!--footer top end-->
</footer>
<!--footer section end-->

<!--jQuery-->
@yield('users.js')
</body>

<!-- Mirrored from appco.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 08:12:30 GMT -->
</html>
