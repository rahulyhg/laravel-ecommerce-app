<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

class SaveForLaterController extends Controller
{
    /**
     * Switch an item from the cart to the "save for later" instance cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function switch ($id) {

            $item = Cart::get($id);

            Cart::remove($id);

            $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
                return $rowId === $id;
            });

            if ($duplicates->isNotEmpty()) {
                return redirect()->route('cart.index')->withErrors('Cet article est déjà enregistré pour plus tard!');
            }

            Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
                ->associate('App\Product');

            return redirect()->route('cart.index')->with('success', 'Votre produit a été mis de côté pour un futur achat!');
    }

    /**
     * Move the item from save for later basket to the default cart.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);

        Cart::instance('saveForLater')->remove($id);

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id  === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->withErrors('Ce produit est déjà dans votre panier!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success', 'L\' article a été ajouté à votre panier!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return back()->with('success', 'L\' article a bien été supprimé');
    }
}
