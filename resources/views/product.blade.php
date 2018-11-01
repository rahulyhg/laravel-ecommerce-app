@section('title', $product->name)
@extends('layout/master')

@section('content')
<div class="container main-product">
        <img src="{{ asset('img/products/' . $product->slug . '.png') }}" alt="product" class="product-img">
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <small>{{ $product->details }}</small>
            <p class="price">{{ $product->formattedPrice() }}</p>

            <p>{{ $product->description }}</p>

                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Ajouter au panier</button>
                </form>
        </div> <!-- end product-details -->

    </div> <!-- end container -->

    @include('partials/might-like')

@endsection
