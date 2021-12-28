<div class="peru-nav">
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/img/peru-logo.png" alt="Peru Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav peru-nav-style">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/peru-logo.png" alt="peru Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Services</a>
                                <ul class="dropdown-menu dropdown-style">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">service Details</a>
                                    </li>
                                </ul>
                            </li>



                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>


                            @if(\Auth::check())
                            <li class="nav-item">
                                <a href="{{ route('profile') }}" class="nav-link">Profile</a>
                            </li>
                            @endif

                        </ul>
                        <div class="others-option">
                            <a href="tel:+800-987-65-43" class="contact-number">
                                <i class="fa fa-phone"></i>
                                +800-987-65-43
                            </a>
                            <button class="default-btn">
                                @if(\Auth::check())
                                <a href="{{ route('logout') }}" style="color: #FFF;" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                @else
                                <a href="{{ route('login') }}" style="color: #FFF;">Login</a> / <a href="{{ route('register')}}" style="color: #FFF; ">Register</a>



                                @endif

                            </button>



                        </div>


                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>