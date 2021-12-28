<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/peru/default/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 07:27:58 GMT -->

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

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Sign Up</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Sign Up</li>
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
                            <h3 class="form-title">Create an account!</h3>
                            <p class="form-desc">with your social network.</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">


                                        <select name="role" id="" class="from-control" style="width: 100%;">
                                            <option value="">Choose your Role</option>
                                            <option value="company">Company</option>
                                            <option value="individual">Individual</option>
                                            <option value="translator">Translator</option>

                                        </select>

                                        @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $role }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>

                                <br>
                                <br>

                                <br>



                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>


                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="default-btn" type="submit">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="account-desc">
                                        Already have an account?
                                        <a href="{{ route('login')}}"> Login</a>
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

<!-- Mirrored from templates.envytheme.com/peru/default/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 07:27:58 GMT -->

</html>