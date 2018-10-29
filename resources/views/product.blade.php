@section('title', $product->name)
@extends('layout/master')

@section('content')
<div class="container main-product">
        <img src="{{ asset('img/' . $product->slug . '.png') }}" alt="product" class="product-img">
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <small>{{ $product->details }}</small>
            <p class="price">{{ $product->formattedPrice() }}</p>

            <p>{{ $product->description }}</p>

            <a href="#" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Ajouter au panier</a>
        </div> <!-- end product-details -->

    </div> <!-- end container -->

    @include('partials/might-like')

@endsection
