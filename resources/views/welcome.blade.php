<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/features.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <section>
                @if (Route::has('login'))
                <nav class="navbar navbar-expand-md">
                    <div class="container">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    <img src="../../assets/images/logo.svg" alt="" width="40" height="40"
                                class="d-inline-block align-text-center">
                                    E Lending
                                </a>
                                <ul class="nav justify-content-end">
                                    <li class="nav-item ">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">contact</a>
                                    </li>
                                </ul>
                                <ul class="nav justify-content-end nav-button">
                                    @auth
                                    @else
                                    <li class="nav-item ">
                                        <a href="{{ route('login') }}"><button type="button nav-link" class="btn btn-dark" >Log In</button></a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item ">
                                        <a href="{{ route('register') }}"><button type="button nav-link" class="btn btn-dark">Sign Up</button></a>
                                    </li>
                                    @endif
                                    @endauth
                                </ul>
                        </div>
                    </div>
                </nav>
        @endif
    </section>
    <section class="hero">
        <!--
            ::Hero Area Start::
            ::author:: @kuyesu
         -->
         <div class="container mt-5 pt-5 ">
            <div class="row pt-5">
                <div class="col-md-6 pt-5">
                    <div class="hero-area pt-5">
                        <h1 class="hero-title" id="transition1">Instant Loans</h1>
                        <p class="hero-text mb-5" id="transition2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        </p>
                        <button type="button" class="btn btn-dark mt-5">Get Started</button>
                    </div>
                <div class="col-md-6">
                    <div class="hero-image">
                        <img src="../../assets/images/hero-image.svg" alt="">
                    </div>
                </div>
         </div>
    </section>
    <section>
        <!--
            ::Features Area Start::
            ::author:: @kuyesu
         -->
    </section>
    <section>
        <!--
            ::About us Area Start::
            ::author:: @MusanjeLawrence
         -->
    </section>
    <section>
        <!--
            ::contact section start here::
            ::author:: @Agaba-Ed
         -->
    </section>
    <section>
        <!--
            ::footer section start here::
            ::to be built:: @Agaba-Ed
         -->
    </section>
        </div>
    </body>
</html>
