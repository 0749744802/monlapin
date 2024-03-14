<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_categorie_produits', function (Blueprint $table) {
            $table->id();
             // migration de cle etranger
             $table->unsignedBigInteger('categorie_produit_id');
             $table->foreign('categorie_produit_id')->references('id')->on('categorie_produits');
             $table->string("titre_sous_categorie_produit")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous_categorie_produits');
    }
};
