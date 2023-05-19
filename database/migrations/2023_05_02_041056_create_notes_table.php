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
        Schema::create('notes', function (Blueprint $table) {
            $table->id('id_note');
            $table->string('etudiant');
            $table->string('ue');
            $table->double('note');
            $table->string('decision');
            $table->string('mention');
            $table->string('semestre');
            // $table->year('annee');
            $table->foreign('etudiant')->references('matricule')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ue')->references('id_ue')->on('ues')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
