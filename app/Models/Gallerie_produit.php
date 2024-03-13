<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallerie_produit extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

       'produit_id',
       'image_gallerie',

    ];
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
}
