<?php

namespace App\Http\Controllers;

use App\Models\Appreciation_produit;
use App\Models\Categorie_produit;
use App\Models\Gallerie_produit;
use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Store_produitController extends Controller
{
    //
    public function ajout_produit(Request $request)
    {


        if ($request->hasFile("image_produit")) {
            $filename = $request->image_produit->extension();
            $filename = Str::random(10) . '.' . $filename;
            $request->image_produit->StoreAs('/public/', $filename);
        }


        //dd($filename);
        // dd($request->pageID);
        // dd($request->toArray()); // updateOrCreate
        if (isset($filename))
        {
            $prduits=Produit::updateOrCreate(
                ['id'   => $request->produitID],

                [

                    'titre_produit' => $request->titre_produit,
                    'public_produit' => $request->public_produit,
                    'categorie_produit_id' => $request->categorie_produit_id,
                    'resume_produit' => $request->resume_produit,
                    'description_produit' => $request->description_produit,
                    'stock_produit' => $request->stock_produit,
                    'prix_produit' => $request->prix_produit,
                    'reduction_produit' => $request->reduction_produit,
                    'appreciation_produit_id' => $request->appreciation_produit_id,
                    'image_produit' => $filename
                ]
            );
        }
        else
        {
            $prduits=Produit::updateOrCreate(
                ['id'   => $request->produitID],

                [
                    'id'   => $request->produitID,
                    'titre_produit' => $request->titre_produit,
                    'public_produit' => $request->public_produit,
                    'categorie_produit_id' => $request->categorie_produit_id,
                    'resume_produit' => $request->resume_produit,
                    'description_produit' => $request->description_produit,
                    'stock_produit' => $request->stock_produit,
                    'prix_produit' => $request->prix_produit,
                    'reduction_produit' => $request->reduction_produit,
                    'appreciation_produit_id' => $request->appreciation_produit_id
                ]
            );
        }





        //galerie image

        if ($request->hasFile("image_gallerie")) {
            $filename = $request->image_gallerie;
            foreach ($filename as $image_gallerie) {
                $filename = $image_gallerie->extension();
                $filename2 = Str::random(10) . '.' . $filename;
                $image_gallerie->StoreAs('/public/', $filename2);
                if (isset($image_gallerie))
                {
                    Gallerie_produit::updateOrCreate(
                        ['id'   => $request->produitID],

                        [

                            'produit_id' => $prduits->id,
                            'image_gallerie' => $filename2
                        ]
                    );
                }

            }

        }






        // return
        return redirect()->back()->with('success', 'Produit ajouté avec succès');
    }
    public function supprime_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $produit=produit::find($id);
        //ligne a supprimé
        $produit->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès');

    }
    public function supprimer_categorie_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $categorie_produit=Categorie_produit::find($id);
        //ligne a supprimé
        $categorie_produit->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès');

    }
    public function supprimer_appreciation_produit(Request $request)
    {
        $id=$request->id;
        //recherche de la page a supprimé
        $appreciation_produit=Appreciation_produit::find($id);
        //ligne a supprimé
        $appreciation_produit->delete();
        return redirect()->back()->with('success', 'Produit supprimé avec succès');

    }
}
