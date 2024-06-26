<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stroke-Insight</title>
    <link rel="icon" href="{{ asset('template/template/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/flaticon.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/nice-select.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('index') }}"> <img src="template/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link @yield('menuHome')" href="{{route('index')}}">Home</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link @yield('about')" href="{{route('about')}}">About</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link @yield('menuMakeModel')" href="{{ route('make_model') }}">Model</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dataset
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item @yield('menuDataset')" href="{{ route('dataset') }}">Upload Datatrain</a>
                                        <!-- <a class="dropdown-item" href="#">Start Data Entry</a> -->
                                    </div>
                                </li>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="{{ route('prediction') }}">Stroke Prediction</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('content')
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="template/img/logo.png" alt="#"> </a>
                        <p>Stroke.Insight Adalah Sebuah Website Yang Menyediakan Informasi Mendalam Tentang Penyakit Stroke.</p>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('make_model') }}">Model</a></li>
                            <li><a href="{{ route('dataset') }}">Upload Dataset</a></li>
                            <li><a href="{{ route('prediction') }}">Stroke Prediction</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget"></div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget"></div>
                </div>
            </div>
        </div>

        {{-- <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer>

    <!-- footer part end-->


        <!-- jquery plugins here-->
        <script src="{{ asset('template/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.nice-select.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('template/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.form.js') }}"></script>
    <script src="{{ asset('template/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('template/js/mail-script.js') }}"></script>
    <script src="{{ asset('template/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('template/js/custom.js') }}"></script>

</body>

</html>
