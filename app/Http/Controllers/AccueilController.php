<?php

namespace App\Http\Controllers;

use App\Models\Categorie_produit;
use App\Models\Logiciel;
use App\Models\Page;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Video;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function get_slide(slide $slide)
    {
       // $data = Categorie::get();

        //
         $slides = Slide::orderby('id','desc')->take(3)->get();
         $services = Service::orderby('id','asc')->take(6)->get();
         $videos = Video::orderby('id','desc')->take(1)->get();
         $categorie_produits = Categorie_produit::orderby('id','desc')->get();
         $produits = Produit::orderby('id','desc')->get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('site.pages.accueil', compact( "slides","services","videos","categorie_produits","produits"));
    }



    public function get_accueil(slide $slide)
    {
       // $data = Categorie::get();

        //
         //$slides = Slide::orderby('id','desc')->take(1)->get();
        //$pages = $page->getAllpages();


        // Debug
        // dd($pages);
        return view('site.pages.accueil');
    }
}
