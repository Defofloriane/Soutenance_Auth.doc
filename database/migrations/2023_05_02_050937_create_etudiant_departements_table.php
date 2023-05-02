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
        Schema::create('etudiant_departements', function (Blueprint $table) {
            $table->string('etudiant');
            $table->string('departement');
            $table->foreign('etudiant')->references('matricule')->on('etudiants')->onDelete('cascade');
            $table->foreign('departement')->references('id_departement')->on('departements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_departements');
    }
};
