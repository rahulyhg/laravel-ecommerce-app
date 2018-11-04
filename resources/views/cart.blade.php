@section('title', 'Mon panier')
@extends('layout/master')

@section('content')
    <div class="container">

        @if (Cart::count() > 0)
        <h2 class="cart-title"> {{ Cart::count() }} article(s) dans votre Panier</h2>

        <div class="shopping-cart">
        @foreach (Cart::content() as $item)
        <div class="shopping-item">
            <a href="{{ route('shop.show', ['id' => $item->model->slug]) }}"><img src="{{ asset('img/products/' . $item->model->slug . '.png') }}" alt="product"></a>
            <div class="details">
                <h3><a href="{{ route('shop.show', ['id' => $item->model->slug]) }}">{{ $item->model->name }}</a></h3>
                <p>{{ str_limit($item->model->details, $limit = 50, $end = '...') }}</p>
            </div>
            <div class="options">
                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="remove-button">Supprimer</button>
                </form>
                <form action="{{ route('saveforlater.switch', $item->rowId) }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="later-button">Mettre de côté</button>
                </form>
            </div>
            <select class="quantity" data-id="{{ $item->rowId }}">
                @for ($i = 1; $i < 6; $i++)
                    <option {{ $item->qty == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <div class="item-price">
                {{ formattedPrice($item->subtotal()) }}
            </div>
        </div>
        @endforeach
        </div> <!-- shopping-cart end -->

        <div class="coupon">
            <h3>Vous avez un code?</h3>
            <form action="#">
                <input type="text" name="" id="">
                <button type="submit">Appliquer</button>
            </form>
        </div>
        <div class="bill">
            <p>Le livraison est gratuite. Blablabla Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sint.</p>
            <div class="detailed-price">
                <div class="accounting">
                    <div>Sous-total</div>
                    <div>TVA</div>
                    <div><span class="total">Total</span></div>
                </div>
                <div class="results">
                    <div>{{ formattedPrice(Cart::subtotal()) }}</div>
                    <div>{{ formattedPrice(Cart::tax()) }}</div>
                    <div><span class="total">{{ formattedPrice( Cart::total()) }}</span></div>
                </div>
            </div>
        </div>
        <div class="shopping-cart-buttons">
            <a href="{{ route('shop.index') }}" class="button">Continuer le shopping</a>
            <a href="{{ route('checkout.index') }}" class="button checkout-button">Procéder au paiement</a>
        </div>

        @else
            <h2 class="cart-title">Votre panier est vide pour le moment.</h2>
            @if(Cart::instance('saveForLater')->count() > 0)
            <small class="cart-small">Mais vous avez des articles mis de côté pour un achat ultérieur. Pour en acheter un ou plus maintenant, cliquez sur Mettre dans le panier à côté de l'article.</small>
            @endif
            <p class="cart-paragraph"><a href="{{ route('shop.index') }}">Retourner à la boutique.</a></p>
        @endif

        @if(Cart::instance('saveForLater')->count() > 0)
        <div class="save-for-later">
            <h2 class="cart-title">{{ Cart::instance('saveForLater')->count() }} produits enregistré(s) pour plus tard</h2>
                <div class="shopping-cart">
                @foreach (Cart::instance('saveForLater')->content() as $item)
                <div class="shopping-item">
                    <a href="{{ route('shop.show', ['id' => $item->model->slug]) }}"><img src="{{ asset('img/products/' . $item->model->slug . '.png') }}" alt="product"></a>
                    <div class="details">
                        <h3><a href="{{ route('shop.show', ['id' => $item->model->slug]) }}">{{ $item->model->name }}</a></h3>
                        <p>{{ str_limit($item->model->details, $limit = 50, $end = '...') }}</p>
                    </div>
                    <div class="options">
                        <form action="{{ route('saveforlater.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="remove-button">Supprimer</button>
                        </form>
                        <form action="{{ route('saveforlater.switchToCart', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="later-button">Mettre dans le panier</button>
                        </form>
                    </div>
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <div class="item-price">
                        {{ $item->model->formattedPrice() }}
                    </div>
                </div>
                @endforeach
                </div> <!-- shopping-cart end -->
        </div>
        @endif
    </div>
    @include('partials/might-like')

@endsection

@section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function () {
        const className = document.querySelectorAll('.quantity');

        Array.from(className).forEach(function(element){
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id');
                axios.patch(`/panier/${id}`, {
                quantity: this.value,
                })
                .then(function (response) {
                    window.location.href =  '{{ route('cart.index') }}';
                })
                .catch(function (error) {
                    window.location.href =  '{{ route('cart.index') }}';
                });
            });
        });
    })();
</script>
@endsection

