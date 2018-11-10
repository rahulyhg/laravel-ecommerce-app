<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $pagination = 9;

        if (request()->categorie) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->categorie);
            });
            $categoryName = optional($categories->where('slug', request()->categorie)->first())->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Produits';
        }

        if (request()->sort == 'low_to_high') {
            $products = $products->orderBy('price', 'asc')->paginate($pagination);
        } elseif (request()->sort == 'high_to_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate(9);
        }

        return view('shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLikes = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

        return view('product')->with([
            'product' => $product,
            'mightAlsoLikes' => $mightAlsoLikes,
        ]);
    }

}
