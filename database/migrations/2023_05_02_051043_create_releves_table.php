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
        Schema::create('releves', function (Blueprint $table) {
            $table->string('id_releve')->primary();
            $table->string('etudiant');//matricule etudiant
            $table->string('decision');
            $table->string('filiere');//id_filere
            $table->string('niveau');//id_niveau
            $table->double('mgp');
            $table->string('anneeAcademique');// id dans la table annee academeique
            $table->timestamps();
            // $table->foreign('niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
            // $table->foreign('etudiant')->references('matricule')->on('etudiants')->onDelete('cascade');
            // $table->foreign('filiere')->references('filiere')->on('filieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releves');
    }
    
};
