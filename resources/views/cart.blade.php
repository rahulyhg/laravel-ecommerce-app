@section('title', 'Mon panier')
@extends('layout/master')

@section('content')
    <div class="container">
        <h2 class="cart-title">3 article(s) dans votre Panier</h2>

        <div class="shopping-cart">
            <div class="shopping-item">
                <img src="img/macbook-pro.png" alt="product">
                <div class="details">
                    <h3>Laptop 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="options">
                    <a href="#">Supprimer</a><br>
                    <a href="#">Sauver pour plus tard</a>
                </div>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="item-price">
                    $1499.99
                </div>
            </div>
            <div class="shopping-item">
                <img src="img/macbook-pro.png" alt="product">
                <div class="details">
                    <h3>Laptop 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="options">
                    <a href="#">Supprimer</a><br>
                    <a href="#">Sauver pour plus tard</a>
                </div>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="item-price">
                    $1499.99
                </div>
            </div>
            <div class="shopping-item">
                <img src="img/macbook-pro.png" alt="product">
                <div class="details">
                    <h3>Laptop 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="options">
                    <a href="#">Supprimer</a><br>
                    <a href="#">Sauver pour plus tard</a>
                </div>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="item-price">
                    $1499.99
                </div>
            </div>
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
                    <div>1499.99 €</div>
                    <div>195 €</div>
                    <div><span class="total">1694.99 €</span></div>
                </div>
            </div>
        </div>
        <div class="shopping-cart-buttons">
            <a href="#" class="button">Continuer le shopping</a>
            <a href="checkout.html" class="button checkout-button">Procéder au paiement</a>
        </div>
    </div>

    @include('partials/might-like')

@endsection

