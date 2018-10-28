@section('title', $product->name)
@extends('layout/master')

@section('content')
<div class="container main-product">
        <img src="{{ asset('img/macbook-pro.png') }}" alt="product" class="product-img">

        <div class="product-details">
            <h2>Laptop 5</h2>
            <small>15 inch blablablabla</small>
            <p class="price">$1499.99</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum accusantium ipsa vero provident accusamus
                neque obcaecati distinctio possimus laboriosam vitae.</p>

            <a href="#" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Ajouter au panier</a>
        </div> <!-- end product-details -->

    </div> <!-- end container -->

    <div class="mightalsolike">
        <div class="container">
            <h3>Vous aimerez peut-être...</h3>
            <div class="products text-center">
                <div class="product product-border">
                    <a href="product.html"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#">
                        <div class="product-name">MacBook Pro</div>
                    </a>
                    <div class="product-price">$2499.99</div>
                </div>

                <div class="product product-border">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#">
                        <div class="product-name">MacBook Pro</div>
                    </a>
                    <div class="product-price">$2499.99</div>
                </div>

                <div class="product product-border">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#">
                        <div class="product-name">MacBook Pro</div>
                    </a>
                    <div class="product-price">$2499.99</div>
                </div>

                <div class="product product-border">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#">
                        <div class="product-name">MacBook Pro</div>
                    </a>
                    <div class="product-price">$2499.99</div>
                </div>
            </div>

        </div>

    </div><!-- mightalsolike end -->
@endsection
