<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Page;
use App\Models\Produit;
use App\Models\Service;
use Illuminate\Http\Request;

class Menu_lienController extends Controller
{
    //
    public function lien_entreprise($entrepriseID)
    {
        $entreprise = Page::find($entrepriseID);
        return view('site.pages.entreprise',compact("entreprise"));
    }
    public function lien_services($servicesID)
    {
        $services = Service::find($servicesID);
        return view('site.pages.services',compact("services"));
    }
    public function lien_boutique($boutiqueID)
    {
        $boutique = Produit::find($boutiqueID);
        return view('site.pages.boutique',compact("boutique"));
    }
    public function lien_blog()
    {
        $blog = blog::get();
        return view('site.pages.blog',compact("blog"));
    }
}
