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
        Schema::create('etudiant_filieres', function (Blueprint $table) {
            $table->string('etudiant');
            $table->string('filiere');
            $table->foreign('etudiant')->references('matricule')->on('etudiants')->onDelete('cascade');
            $table->foreign('filiere')->references('id_filiere')->on('filieres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_filieres');
    }
};
