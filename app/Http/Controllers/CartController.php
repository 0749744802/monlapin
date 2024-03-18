<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('site.pages.cart');
    }

    public function addToCart(Request $request)
    {
        $product = Produit::findOrFail($request->product_id);
        Cart::add($product->id, $product->titre_produit, 1, $product->prix_produit,['image' => $product->image_produit]);

        $session=Cart::content();



        // foreach ($session as $key => $value) {
        //    array_push( $name,$value);
        // }






        return response()->json([
            'success' => true,
            'message' => 'Votre produit a éte ajouter avec succes',
            'cart' => count($session),
            'image'=>$session,




    ]);
    }

    public function updateCart(Request $request)
    {
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        Cart::update($productId, $quantity);

        return response()->json(['success' => true]);
    }

    public function removeFromCart(Request $request)
    {
        Cart::remove($request->row_id);
        $session=Cart::content();

        return response()->json(['success' => true,
        'cart' => count($session),
        'message' => 'Votre produit a ete supprimer avec succes']);
    }
}
