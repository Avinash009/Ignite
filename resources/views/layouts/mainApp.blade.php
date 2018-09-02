<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Ignite</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Ignite project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ asset('plugins/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/owl.theme.default.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="container">
            <header>
                @extends('includes.header')
            </header>

            @yield('content')
            
            <footer>
                <script src="{{ asset('plugins/TweenMax.min.js') }}"></script>
                <script src="{{ asset('plugins/TimelineMax.min.js') }}"></script>
                <script src="{{ asset('plugins/ScrollMagic.min.js') }}"></script>
                <script src="{{ asset('plugins/animation.gsap.min.js') }}"></script>
                <script src="{{ asset('plugins/owl.carousel.js') }}"></script>
                <script src="{{ asset('plugins/easing.js') }}"></script>
                <script src="{{ asset('plugins/parallax.min.js') }}"></script>

                <script src="{{ asset('js/custom.js') }}"></script>
            </footer>
        </div>


    </body>
</html>