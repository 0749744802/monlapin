<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sous_categorie_produit extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [


        'categorie_produit_id',
        'titre_sous_categorie_produit',
    ];
    
    public function categorie_produit(): BelongsTo
    {
        return $this->belongsTo(Categorie_produit::class);
    }
}
