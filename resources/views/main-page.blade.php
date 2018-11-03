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

    <title>Accueil | E-commerce App</title>
</head>

<body>

<header>
    <div class="top-nav container">
        <div class="logo">E-commerce App</div>
        <ul class="top-nav-list">
            <li><a href="{{ route('shop.index') }}">Boutique</a></li>
            <li><a href="#">Catégories</a></li>
            <li><a href="#">Produits</a></li>
            <li><a href="{{ route('cart.index') }}"><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i> <span class="dot">{{ Cart::instance('default')->count() }}</span></a></li>
        </ul>
    </div> <!-- end top-nav -->

    <div class="hero container">
        <div class="hero-copy">
            <h1>Laravel App Demo</h1>
            <p>Une démo d'application développée avec le framework Laravel 5.</p>
            <div class="hero-buttons">
                <a href="{{ route('shop.index') }}" class="button button-white">Boutique</a>
                <a href="#" class="button button-white">Produits</a>
            </div>
        </div> <!-- end hero-copy -->

        <div class="hero-image">
            <img src="img/macbook-pro-laravel.png" alt="hero image">
        </div>
    </div> <!-- end hero -->
</header>
<div class="featured-section">
    <div class="container">
        <h1 class="text-center">Bienvenue dans notre boutique</h1>

        <p class="section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam repudiandae
            ipsam incidunt veritatis eos, quis ullam in, nisi explicabo quo quam enim, quia hic suscipit alias
            similique. Dignissimos, accusamus voluptas.</p>

        <div class="text-center button-container">
            <a href="#" class="button responsive-button">En promotion</a>
            <a href="#" class="button responsive-button">Meilleurs prix</a>
        </div>


        <div class="products text-center">
            @foreach ($products as $product)
                <div class="product">
                    <a href="{{ route('shop.show', ['slug'=>$product->slug]) }}"><img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="product"></a>
                    <a href="{{ route('shop.show', ['slug'=>$product->slug]) }}">
                        <div class="product-name">{{ $product->name }}</div>
                    </a>
                    <div class="product-price">{{ $product->formattedPrice() }}</div>
                </div>
            @endforeach
        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="{{ route('shop.index') }}" class="button responsive-button">Tous nos produits</a>
        </div>

    </div> <!-- end container -->

</div> <!-- end featured-section -->

<div class="blog-section">
    <div class="container">

        <h1 class="text-center">Notre Blog</h1>
        <p class="section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ratione
            animi harum quae dolor ipsam hic nostrum neque tempora cum quis minima ut modi? Vitae quod at tempore
            iure distinctio?</p>

        <div class="blog-posts" id="blog-1">
            <div class="blog-post">
                <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                <a href="#">
                    <h2 class="blog-title">Blog Post Title 1</h2>
                </a>
                <div class="blog-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit fuga
                    provident aliquid quo dolores esse.</div>
            </div>

            <div class="blog-post" id="blog-2">
                <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                <a href="#">
                    <h2 class="blog-title">Blog Post Title 2</h2>
                </a>
                <div class="blog-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit fuga
                    provident aliquid quo dolores esse.</div>
            </div>

            <div class="blog-post" id="blog-3">
                <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                <a href="#">
                    <h2 class="blog-title">Blog Post Title 3</h2>
                </a>
                <div class="blog-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit fuga
                    provident aliquid quo dolores esse.</div>
            </div>
        </div> <!-- end blog-posts -->

    </div> <!-- end container -->
</div> <!-- end blog-section -->

<footer>
    <div class="footer-content container">
        <div class="made-with">Développé avec <i class="fa fa-heart"></i> par Ludovic Guénet</div>
        <ul>
            <li><a href="#"><i class="fa fa-globe"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
</footer> <!-- end footer-content -->

</body>

</html>

