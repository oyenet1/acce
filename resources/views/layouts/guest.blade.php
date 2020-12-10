<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Piedra&family=Sacramento&family=Teko:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/font/stylesheet.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container-fluid m-0 bg-color">
            <div class="container my-0">
                <ul class="bread m-0 p-2 text-white list-inline">
                    <li class="mr-2 text-white d-none d-md-inline">Have any question?</li>
                    <li>
                        <a href="#"> <a href="tel:+2349070596302" class="text-white"> <i
                                    class="fas fa-phone-alt   mr-2 "></i>(+234)
                                9070596302
                    </li>
                    <li class="float-right ml-2 mr-2"><a href="{{ Route('admission') }}" class="text-white"> <span
                                class="d-none d-md-inline">Admissions</span> </a></li>
                    <li class="float-right ml-2">
                        <a href="https://admin.acce-abuja.com.ng/portal/authentication" class="text-decoration-none">
                            <span class="text-white">Login</span>
                        </a>
                    </li>
                    <li class="float-right">
                        <a href="https://www.youtube.com/channel/UCC4qrHra0XKQcH5ThorYJeA"
                            class="text-decoration-none icon-s icon-y" target="_blank"><i
                                class="fab icon fa-youtube-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="float-right">
                        <a href="https://www.facebook.com/acceabuja" class="text-decoration-none icon-s icon-f"
                            target="_blank">
                            <i class="fab icon fa-facebook "></i>
                        </a>
                    </li>
                    <li class="float-right">
                        <a href="https://twitter.com/acce_abuja" class="text-decoration-none icon-s icon-t"
                            target="_blank"><i class="fab icon fa-twitter-square  "></i>
                        </a>
                    </li>
                    <li class="float-right">
                        <a href="#" class="text-decoration-none icon-s icon-i" target="_blank"><i
                                class="fab icon fa-instagram  "></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-white sticky-top m-0">
            <div class="container justify-content-between">
                <!-- Brand -->
                <a class="navbar-brand" href="/" class="logo">
                    <img src="image/logo.png" alt="" srcset="" style="max-width: 400px;"
                        class="d-none d-lg-block logo-lg">
                    <img src="image/logo1.png" alt="" srcset="" style="max-width: 80px;" class="d-lg-none logo-sm">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler bg-orange" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="fas fa-home "></i>
                            </a>
                        </li>
                        <!-- !-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                About Us
                            </a>
                            <div class="dropdown-menu small text-capitalize">
                                <a class="dropdown-item" href="{{ route('mission') }}">Mission Statement</a>
                                <a class="dropdown-item" href="{{ route('message.director') }}">Message from the
                                    Founder</a>
                                <a class="dropdown-item" href="{{ route('beleive') }}">our beliefs</a>
                                <a class="dropdown-item" href="{{ route('goals') }}">our goals</a>
                                <a class="dropdown-item" href="{{ route('values') }}">our core value</a>
                                <a class="dropdown-item" href="{{ route('message.director') }}">ACCE learners
                                    attribute</a>
                            </div>
                        </li>

                        <!-- test -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Announcements
                            </a>
                            <div class="dropdown-menu small text-capitalize">
                                <a class="dropdown-item" href="{{ route('coming') }}">News</a>
                                <a class="dropdown-item" href="{{ route('coming') }}">Notice</a>
                                <a class="dropdown-item" href="{{ route('coming') }}">Holiday</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Downloads
                            </a>
                            <div class="dropdown-menu small text-capitalize">
                                <a class="dropdown-item" href="/files/ACCE-2020-2021-School-Prospectus.pdf"
                                    data-toggle="tooltip" data-placement="bottom" title="Click to Download"
                                    download>Prospectus</a>
                                <a class="dropdown-item" href="/files/ACCE-Admission-form.pdf" download="">Admission
                                    Form</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Media
                            </a>
                            <div class="dropdown-menu small text-capitalize">
                                <a class="dropdown-item" href="{{ route('photo') }}">Photo</a>
                                <a class="dropdown-item" href="{{ route('coming') }}">Video</a>
                            </div>
                        </li>
                        {{-- carrers --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('career') }}" id="navbardrop"
                                data-toggle="dropdown">
                                Careers
                            </a>
                            <div class="dropdown-menu small text-capitalize">
                                <a class="dropdown-item" href="{{ route('culture') }}">Our culture</a>
                                <a class="dropdown-item" href="{{ route('join') }}">Why Join Us</a>
                                <a class="dropdown-item" href="{{ route('recruit') }}">Recruitment</a>
                                <a class="dropdown-item" href="{{ route('apply') }}">Apply Now</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('contact') }}" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Page
                            </a>
                            <div class="dropdown-menu small text-capitalize">
                                <a class="dropdown-item"
                                    href="https://admin.acce-abuja.com.ng/portal/authentication">Admin only</a>
                                <a class="dropdown-item" href="#">Excursion</a>
                                <a href="#" class="dropdown-item">Founder</a>
                                <a href="#" class="dropdown-item">Grand Patron</a>
                                <a href="#" class="dropdown-item">Director</a>
                                <a href="#" class="dropdown-item">Principal</a>
                                <a href="{{ route('recruit') }}" class="dropdown-item">Recruitment</a>
                                <a href="#" class="dropdown-item">Activities</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    {{-- footer --}}
    <footer class="bg-color">
        <div class="container">
            <div class="d-flex text-white justify-content-between flex-wrap">
                <div class="p-2">
                    <h2 class="teko text-white">
                        Quick Link
                    </h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ Route('admission') }}" class="link">Admissions</a></li>
                        <li>News</li>
                        <li>Notice</li>
                        <li>Events</li>
                        <li>Gallery</li>
                        <li>Holiday</li>
                        <li><a href="{{ Route('admission') }}" class="link">Our Teachers</a></li>
                        <li><a href="{{ Route('contact') }}" class="link">Contact Us</a></li>
                        <li><a href="{{ Route('admission') }}" class="link">Excursions</a></li>
                    </ul>
                </div>
                <div class="p-2" style="max-width: 300px;">
                    <h2 class="teko text-white">
                        Get In touch
                    </h2>

                    <table class="table table-borderless text-white">
                        <tr>
                            <td>
                                <i class="fas fa-map text-color-2"></i>
                            </td>
                            <td class="text-capitalize">
                                Plot 81 Kafe District, Opposite Majia Plaza, Adjacent Saraha Estate, Gwarinpa, Abuja.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-phone-square-alt text-color-2 "></i>
                            </td>
                            <td>
                                (+234) 907-0596-302
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-envelope-open-text text-color-2"></i>
                            </td>
                            <td>
                                <a href="mailto:info@acce-abuja.com.ng" class="text-white">info@acce-abuja.com.ng</a>
                            </td>
                        </tr>
                    </table>

                </div>

                <!-- let get connected -->
                <div class="p-2" style="max-width: 300px;">
                    <h2 class="teko text-white">Social Media</h2>
                    <div class="">
                        <ul class="list-unstyled">
                            <li class="list-inline-item m-2">
                                <a href="https://www.facebook.com/acceabuja"
                                    class="d-flex align-items-center text-decoration-none icon-color-2" target="_blank">
                                    <i class="fab fa-facebook fa-2x mr-2 "></i>
                                    <span class="text-white">Facebook</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="https://twitter.com/acce_abuja"
                                    class="d-flex align-items-center text-decoration-none icon-color-2"
                                    target="_blank"><i class="fab fa-twitter-square fa-2x mr-2  "></i>
                                    <span class="text-white">Twitter</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="#" class="d-flex align-items-center text-decoration-none icon-color-2"
                                    target="_blank"><i class="fab fa-instagram fa-2x mr-2  "></i>
                                    <span class="text-white">Instagram</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="https://www.youtube.com/channel/UCC4qrHra0XKQcH5ThorYJeA"
                                    class="d-flex align-items-center text-decoration-none icon-color-2"
                                    target="_blank"><i class="fab fa-youtube fa-2x mr-2" aria-hidden="true"></i>
                                    <span class="text-white">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-2" style="max-width: 300px;">
                    <h2 class="teko text-white">
                        Affiliate Links
                    </h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.mkdikwa.ng/" class="link d-flex align-items-center" target="_blank">
                                <img src="/image/al-founder.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Founder's Book Store</span> </a>
                        </li>

                        <li>
                            <a href="http://www.al-ansar-foundation.com" class="link d-flex align-items-center"
                                target="_black"><img src="/image/al-foundation.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar Foundation</span></a>
                        </li>
                        <li>
                            <a href="{{ route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-university.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar University</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-maiduguri.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar Masjid</span> </a>
                        </li>
                        <li><a href="{{ Route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-security.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span>Al-Ansar Security Services
                                    Ltd.</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-nyanya.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Academy, Nyanya</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-achs.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Cleaning & Hygiene Services
                                    Ltd</span></a>
                        </li>
                        <li>
                        <li>
                            <a href="{{ Route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-fm.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Radio & TV</span></a>
                        </li>
                        <li>
                            <a href="{{ Route('coming') }}" class="link d-flex align-items-center" target="_black"><img
                                    src="/image/al-hospital.jpg" alt="" class="site rounded-circle"
                                    style="max-width: 30px; margin: 3px"> <span> Al-Ansar Women & Children's
                                    Hospital</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="m-0 p-1 bg-color-dark justify-content-center footer text-white small">
            <p class="text-center">Copyright <i class="fa fa-copyright text-color-2" aria-hidden="true"></i>
                Al-Ansar Center for Comprehensive Education 2020 <br> Design and Develop by <a
                    href="http://netcodeweb.com.ng" target="_blank" rel="noopener noreferrer" title="Click to visits"
                    class="fira text-color-2">Networker</a>
            </p>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
            $("fa-times").click(function() {
                $("carousel-caption").hide();
            });
        });

    </script>
</body>

</html>
