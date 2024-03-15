<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function addToCart(Request $request)
    {
        $product = Produit::findOrFail($request->product_id);
        Cart::add($product->id, $product->titre_produit, 1, $product->prix_produit);

        $session=Cart::content();
        foreach (Cart::content() as $items){
        }
        $name=$items->name;
        $id=$items->id;
        $prix=$items->price;
        $soustotal=$items->subtotal;
        $rowID=$items->rowId;

        // foreach ($session as $key => $value) {
        //    array_push( $name,$value);
        // }






        return response()->json([
            'success' => true,
            'message' => 'Votre produit a éte ajouter avec succes',
            'cart' => count($session),
            'name'=> $name,
            'id'=> $id,
            'prix'=> $prix,
            'soustotal'=> $soustotal,
            'rowID'=> $rowID,



    ]);
    }

    public function updateCart(Request $request)
    {
        Cart::update($request->row_id, $request->quantity);

        return response()->json(['success' => true, 'message' => 'votre produit a ete modifier avec succes']);
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
