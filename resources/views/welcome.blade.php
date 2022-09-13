<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-lending</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f6f4;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-md shadow-sm">
        <div class="container-fluid ">
            <a class="navbar-brand ms-3" href="{{ url('/') }}">
                <img src="../../assets/images/logo.svg" alt="" width="40" height="40"
                    class="d-inline-block align-text-center ">
                E Lending
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item ms-4">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

                <ul class="nav">
                    <li class="nav-item me-1">
                        <a href="{{ route('login') }}"><button type="button nav-link" class="btn btn-dark">Log
                                In</button></a>
                    </li>

                    <li class="nav-item me-2">
                        <a href="{{ route('register') }}"><button type="button nav-link" class="btn btn-dark">Sign
                                Up</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-fluid pt-5 hero">
        <div class="row pt-5 ms-5 mb-5 ">
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
