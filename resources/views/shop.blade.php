@section('title', 'Boutique')
@extends('layout/master')

@section('content')
<div class="main container">
    <div class="sidebar">
        <h2><i class="fa fa-tags" aria-hidden="true"></i> Catégories</h2>
        <ul>
            <li><a href="#">Portables</a></li>
            <li><a href="#">Bureau</a></li>
            <li><a href="#">Mobiles</a></li>
            <li><a href="#">Applications</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Tablettes</a></li>
            <li><a href="#">Caméras digitales</a></li>
        </ul>
        <h2 class="price-title"><i class="fa fa-money" aria-hidden="true"></i> Prix</h2>
        <ul>
            <li><a href="#">0€ - 700€</a></li>
            <li><a href="#">700€ - 1000€</a></li>
            <li><a href="#">1000€ - 1500€</a></li>
        </ul>
    </div> <!-- end categories-->

    <div class="shop-section">

        <h1 class="main-title">Portables</h1>
        <div class="products text-center">
        @foreach ($products as $product)
            <div class="product">
                <a href="{{ route('shop.show', ['slug'=>$product->slug]) }}"><img src="{{ asset('img/macbook-pro.png') }}" alt="product"></a>
                <a href="{{ route('shop.show', ['slug'=>$product->slug]) }}">
                    <div class="product-name">{{ $product->name }}</div>
                </a>
                <div class="product-price">{{ $product->formattedPrice() }}</div>
            </div>
        @endforeach
        </div> <!-- end products -->

    </div> <!-- end shop-section -->
</div> <!-- end main -->
@endsection
