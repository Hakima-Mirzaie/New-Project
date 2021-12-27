<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/peru/default/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 07:27:58 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Imagelightbox CSS -->
    <link rel="stylesheet" href="assets/css/imagelightbox.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- TITLE -->
    <title>Peru - Consulting HTML Template</title>
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    @include('layouts.header')
    <!-- End Navbar Area -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Log In</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Log In</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Sign Up Area -->
    <section class="sign-up-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-action">
                        <div class="form-heading text-center">
                            <h3 class="form-title">Login to your account!</h3>
                            <p class="form-desc">with your social network.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">

                            @csrf
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control  @error('email') is-invalid @enderror" type="text" name="name" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __('Password') }}" autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 form-condition">
                                    <div class="agree-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">

                                    @if (Route::has('password.request'))
                                    <a class="forget" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <button class="default-btn" type="submit">
                                        {{ __('Login') }}
                                    </button>

                                </div>
                                <div class="col-12">
                                    <p class="account-desc">
                                        Not a member?
                                        <a href="sign-up.html">Register</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign Up Area -->


    <!-- Start Footer Top Area -->
    @include('layouts.footer')
    <!-- Start Footer Bottom Area -->
    <footer class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div>
                        <p>Copyright © Peru. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="social-icon">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Bottom Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="fa fa-angle-double-up"></i>
        <i class="fa fa-angle-double-up"></i>
    </div>
    <!-- End Go Top Area -->


    <!-- Jquery Slim JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- Imagelightbox JS -->
    <script src="assets/js/imagelightbox.min.js"></script>
    <!-- Mixitup JS -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Form Validator JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Peru Map JS FILE -->
    <script src="assets/js/peru-map.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/peru/default/log-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 07:27:58 GMT -->

</html>