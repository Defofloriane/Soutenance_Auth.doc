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
        Schema::create('est_inscrit_dans', function (Blueprint $table) {
            // $table->string('etudiant');
            // $table->string('niveau');
            // $table->string('filiere');
            // $table->string('annee');
            // $table->foreign('annee')->references('id_annee')->on('annee_academiques')->onDelete('cascade');
            // $table->foreign('niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
            // $table->foreign('etudiant')->references('matricule')->on('etudiants')->onDelete('cascade');
            // $table->foreign('filiere')->references('id_filiere')->on('filieres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('est_inscrit_dans');
    }
};
