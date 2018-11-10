@section('title', 'Boutique')
@extends('layout/master')

@section('content')
<div class="main container">
    <div class="sidebar">
        <h2><i class="fa fa-tags" aria-hidden="true"></i> Catégories</h2>
        <ul>
            @foreach ($categories as $category)
                <li class="{{ isActiveCategory($category->slug) }}"><a class="link-hover" href="{{ route('shop.index', ['categorie'=>$category->slug]) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
        <h2 class="price-title"><i class="fa fa-usd" aria-hidden="true"></i> Trier</h2>
        <ul>
            <li class="{{ request()->sort == 'low_to_high' ? 'active' : '' }}"><a class="link-hover" href="{{ route('shop.index', ['categorie'=> request()->categorie, 'sort' => 'low_to_high']) }}">Par ordre croissant</a></li>
            <li class="{{ request()->sort == 'high_to_low' ? 'active' : '' }}"><a class="link-hover" href="{{ route('shop.index', ['categorie'=> request()->categorie, 'sort' => 'high_to_low']) }}">Par ordre décroissant</a></li>
        </ul>
    </div> <!-- end categories-->

    <div class="shop-section">
        <h1 class="main-title">{{ $categoryName }}</h1>
        <div class="products text-center">
        @forelse ($products as $product)
            <div class="product">
                <a href="{{ route('shop.show', ['slug' => $product->slug]) }}"><img src="{{ asset('img/products/' . $product->slug . '.jpg') }}" alt="product"></a>
                <a href="{{ route('shop.show', ['slug' => $product->slug]) }}">
                    <div class="product-name">{{ $product->name }}</div>
                </a>
                <div class="product-price">{{ $product->formattedPrice() }}</div>
            </div>
        @empty
            <h2>Aucun produit trouvé.</h2>
        @endforelse
        </div> <!-- end products -->

        {{ $products->appends(request()->input())->links() }}

    </div> <!-- end shop-section -->
</div> <!-- end main -->
@endsection
