@section('title', 'Paiement')
@section('extra-css')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@extends('layout/master')

@section('content')
<div class="container">

    <h1 class="main-title">Paiement</h1>

    <div class="main s-between">
        <div class="billing-details">
            <h2>Détails de facturation</h2>
            <form action="#" id="payment-form">
                <label for="email">Votre adresse mail</label>
                <input type="email" id="email">
                <label for="name">Votre nom</label>
                <input type="text" id="name">
                <label for="address">Votre adresse</label>
                <input type="text" id="address">
                <label for="city">Votre ville</label>
                <input type="text" id="city">
                <div class="form-group">
                    <div class="group-control">
                        <label for="postalcode">Votre code postal</label>
                        <input type="text" id="postalcode">
                    </div>
                    <div class="group-control">
                        <label for="number">Votre téléphone</label>
                        <input type="text" id="number">
                    </div>
                </div>
                <div class="payment-details">
                    <h2>Détails de paiement</h2>
                    <label for="creditcard">Nom sur la carte de crédit</label>
                    <input type="text" id="creditcard">
                    <div class="stripe-block">
                        <label for="card-element">
                        Carte de crédit
                        </label>
                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                </div>
                <button type="submit" class="button confirmation-button">Valider la commande</button>
            </form>
        </div> <!-- end billing-details -->

        <div class="order">
            <h2>Votre commande</h2>
            <div class="order-items">
                @foreach($items as $item)
                <div class="order-item">
                    <img src="{{ asset('img/products/' . $item->model->slug . '.png') }}" alt="item">
                    <div class="order-item-details">
                        <h4><a href="{{ route('shop.show', ['id' => $item->model->slug]) }}">{{ $item->model->name }}</a></h4>
                        <small>{{ str_limit($item->model->details, $limit = 50, $end = '...') }}</small>
                    </div>
                    <div class="item-order-price">{{ $item->model->formattedPriceWithSpacer() }}</div>
                </div>
                @endforeach
            </div> <!-- end order-items -->
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
            </div> <!-- end detailed-price -->
        </div> <!-- end order -->
    </div>

</div> <!-- end container -->
@endsection

@section('extra-js')
    <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_zVl5MizYk8oGZyQhggWNksly');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", "Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            // form.submit();
            }
    </script>
@endsection