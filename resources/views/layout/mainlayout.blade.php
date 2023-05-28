
<!DOCTYPE html>
<html lang="en" class="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Green Plus</title>

    <link type="image/x-icon" href="{{ asset('assets2/img/logo.png') }}" rel="icon">


    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/rtl.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-wrapper">
    <div style="direction: ltr" class="header-top home-three-top">
        <div class="left-top aos" data-aos="fade-up">
            <ul>
                <li><i class="feather-phone me-1"></i> +2 01207807796</li>
                <li><i class="feather-mail me-1"></i> <a
                        href="mailto:info@greenpluss.com">info@greenpluss.com</a></li>
            </ul>
        </div>
        <div class="right-top aos" data-aos="fade-up">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>

    @include('layout.nav_site')




         @yield('content')


    <footer class="footer footer-one">

        <div class="footer-top aos" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <img style="width: 140px" src="{{ asset('assets2/img/logo.png') }}" alt="logo">
                            </div>
                            <div class="footer-about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Patients</h2>
                            <ul>
                                <li><a href="search.html">Search for Doctors</a>
                                </li>
                                <li><a href="login.html">Login</a>
                                </li>
                                <li><a href="register.html">Register</a>
                                </li>
                                <li><a href="booking.html">Booking</a>
                                </li>
                                <li><a href="patient-dashboard.html">Patient Dashboard</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Doctors</h2>
                            <ul>
                                <li><a href="appointments.html">Appointments</a>
                                </li>
                                <li><a href="chat.html">Chat</a>
                                </li>
                                <li><a href="login.html">Login</a>
                                </li>
                                <li><a href="doctor-register.html">Register</a>
                                </li>
                                <li><a href="doctor-dashboard.html">Doctor Dashboard</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title">Contact Us</h2>
                            <div class="footer-contact-info">
                                <div class="footer-address"><span><i class="feather-map-pin"></i></span>
                                    <p style="padding-right: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit<p>
                                </div>
                                <div class="footer-address"><span><i class="feather-phone"></i></span>
                                    <p style="padding-right: 5px;"> +201207807796<p>
                                </div>
                                <div class="footer-address"><span><i class="feather-mail"></i></span>
                                    <a style="padding-right: 5px;color: white" href="">info@greenpluss.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">

                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="copyright-text">
                                <p class="mb-0">&copy; 2023 GreenPlus. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">

                            <div class="copyright-menu">
                                <ul class="policy-menu">
                                    <li><a href="term-condition.html">Terms and Conditions</a>
                                    </li>
                                    <li><a href="privacy-policy.html">Policy</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets2/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets2/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets2/js/slick.js') }}"></script>

<script src="{{ asset('assets2/js/feather.min.js') }}"></script>

<script src="{{ asset('assets2/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('assets2/js/aos.js') }}"></script>

<script src="assets2/js/script.js"></script>
</body>
</html>
