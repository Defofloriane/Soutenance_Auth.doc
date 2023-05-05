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
        Schema::create('ue_filiere_niveau_specialites', function (Blueprint $table) {
            $table->string('ue');
            $table->string('filiere');
            $table->string('niveau');
            $table->foreign('niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
            $table->foreign('ue')->references('id_ue')->on('ues')->onDelete('cascade');
            $table->foreign('filiere')->references('id_filiere')->on('filieres')->onDelete('cascade');
            // $table->foreign('specialite')->references('id_specialite')->on('specialites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ue_filiere_niveau_specialites');
    }
};
