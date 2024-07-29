<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->string('marque', 100);
            $table->string('designation', 200);
            $table->string('numero_serie', 100);
            $table->text('specifications_techniques');
            $table->string('systeme_exploitation', 100);
            $table->boolean('antivirus')->default(false);
            $table->unsignedBigInteger('Categorie_id');
            $table->unsignedBigInteger('Bureau_id');
            $table->unsignedBigInteger('Departement_id');
            $table->unsignedBigInteger('Personne_id');
            $table->date('date_inventaire');
            $table->date('date_affectation');
            $table->string('etat', 50);
            $table->boolean('Durete')->default(false);
            $table->foreign('Categorie_id')->references('id')->on('categories');
            $table->foreign('Bureau_id')->references('id')->on('bureaus');
            $table->foreign('Departement_id')->references('id')->on('departements');
            $table->foreign('Personne_id')->references('id')->on('personnes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipements');
    }
};
