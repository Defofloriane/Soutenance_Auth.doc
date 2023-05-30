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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('id_evaluation');
            $table->string('type_evaluation');
            $table->float('note_evaluation');
            $table->string('ue');
            $table->string('etudiant');
            $table->integer('semestre');
            $table->foreign('ue')->references('id_ue')->on('ues')->onDelete('cascade');
            $table->foreign('etudiant')->references('matricule')->on('etudiants')->onDelete('cascade');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
