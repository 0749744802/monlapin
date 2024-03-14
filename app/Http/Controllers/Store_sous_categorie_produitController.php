<?php

namespace App\Http\Controllers;

use App\Models\Sous_categorie_produit;
use Illuminate\Http\Request;

class Store_sous_categorie_produitController extends Controller
{
     //ajout dans la categorie produit
     public function ajout_sous_categorie_produit(Request $request)
     {

         // dd($request->toArray());
         Sous_categorie_produit::updateOrCreate(

             [
                 //'id'   => $request->categorie_produit_ID,

                 'categorie_produit_id' => $request->categorie_produit_id,
                 'titre_sous_categorie_produit' => $request->titre_sous_categorie_produit

             ]);
             // return
         return redirect()->back()->with('success', 'Sous Categorie Produit ajouté avec succès');
     }
     public function supprimer_sous_categorie_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $Sous_categorie_produit=Sous_categorie_produit::find($id);
        //ligne a supprimé
        $Sous_categorie_produit->delete();
        return redirect()->back()->with('success', 'service supprimé avec succès');

    }

}
