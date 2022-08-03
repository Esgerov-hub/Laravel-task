@extends('layouts.users')
@section('users.css')
    <!--title-->
    <title>Resume | Vacancy</title>
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
        <!--contact us section start-->
        <section class=" ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <form action="{{ route('vacancy.resume') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5>Resume Register</h5>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                               name="image"  placeholder="Enter image" value="{{ old('image') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control @error('file') is-invalid @enderror"
                                               name="file" placeholder="Enter file" value="{{ old('file') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name"  placeholder="Enter name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('surname') is-invalid @enderror"
                                               name="surname"  placeholder="Enter surname" value="{{ old('surname') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               placeholder="Enter phone" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                               placeholder="Enter email" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="password" name="password" value="{{{ old('password') }}}" class="form-control @error('password') is-invalid @enderror"

                                               placeholder="Your Password">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="password" name="password-check" value="{{ old('password-check') }}" size="40" class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Your password check">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                    <textarea name="note"  class="form-control @error('note') is-invalid @enderror" rows="7" cols="25"
                                              placeholder="Message" >{{ old('note') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-success float-right" >
                                        Send Resume
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
