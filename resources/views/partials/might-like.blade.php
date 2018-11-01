<div class="mightalsolike">
    <div class="container">
        <h3>Vous aimerez peut-être...</h3>
        <div class="products text-center">
                @foreach ($mightAlsoLikes as $mightAlsoLike)
                    <div class="product product-border">
                    <a href="{{ route('shop.show', ['slug' => $mightAlsoLike->slug]) }}"><img src="{{ asset('img/products/' . $mightAlsoLike->slug . '.png') }}" alt="product">
                    <a href="#">
                        <div class="product-name">{{ $mightAlsoLike->name }}</div>
                    </a>
                    <div class="product-price">{{ $mightAlsoLike->formattedPrice() }}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div><!-- mightalsolike end -->
