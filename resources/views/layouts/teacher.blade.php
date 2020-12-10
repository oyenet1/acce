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
        <nav class="navbar navbar-expand-md navbar-dark bg-color-2 sticky-top m-0">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/" class="logo">
                    <img src="image/logo1.png" alt="" srcset="" style="max-width: 100px;">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler bg-orange" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
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
                        <li>Admission</li>
                        <li>News</li>
                        <li>Notice</li>
                        <li>Event</li>
                        <li>Gallery</li>
                        <li>Holiday</li>
                        <li>Teacher</li>
                        <li>Staff</li>
                        <li>Contact Us</li>
                        <li>Excursions</li>
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
                            <td>
                                PLot 8 Kafe, opp maija plaza near sahara estate, after charly Boy's House, Gwarimpa
                                Abuja
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-phone-square-alt text-color-2 "></i>
                            </td>
                            <td>
                                (+234) 804-568-90
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
                                <a href="£" class="d-flex align-items-center text-decoration-none icon-color-2">
                                    <i class="fab fa-facebook fa-2x mr-2 "></i>
                                    <span class="text-white">Facebook</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="£" class="d-flex align-items-center text-decoration-none icon-color-2"><i
                                        class="fab fa-twitter-square fa-2x mr-2  "></i>
                                    <span class="text-white">Twitter</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="£" class="d-flex align-items-center text-decoration-none icon-color-2"><i
                                        class="fab fa-instagram fa-2x mr-2  "></i>
                                    <span class="text-white">Instagram</span>
                                </a>
                            </li> <br>
                            <li class="list-inline-item m-2">
                                <a href="£" class="d-flex align-items-center text-decoration-none icon-color-2"><i
                                        class="fab fa-youtube fa-2x mr-2" aria-hidden="true"></i>
                                    <span class="text-white">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-0 p-1 bg-color-dark justify-content-center footer text-white small">
            <p class="text-center">Copyright <i class="fa fa-copyright text-color-2" aria-hidden="true"></i>
                Al-Ansar Center for Comprehensive Education 2020 <br> Design and Develop by <a
                    href="http://bowofade.com" target="_blank" rel="noopener noreferrer" title="Click to visits"
                    class="fira text-color-2">Networker</a>
            </p>
        </div>
    </footer>
</body>

</html>
