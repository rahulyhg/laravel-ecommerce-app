<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">

    <!-- Font Awesome 4.7.0 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <title>@yield('title') | E-commerce App</title>
</head>

<body>
    <div class="shop-header">
        <div class="top-nav container">
            <div class="logo">E-commerce App</div>
            <ul class="top-nav-list">
                <li><a href="{{ route('shop.index') }}">Boutique</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="{{ route('cart.index') }}">Panier <div class="dot">{{ Cart::instance('default')->count() }}</div></a></li>
            </ul>
        </div> <!-- end top-nav -->
    </div> <!-- end shop-header -->

    <div class="breadcrumb">
        <div class="container">
            <a href="{{ route('homepage') }}">Accueil</a> <i class="fa fa-caret-right fa-fw" aria-hidden="true"></i> <a href="{{ route('shop.index') }}">Boutique</a>
        </div>
    </div> <!-- end breadcrumb -->
    @include('partials/messages')

