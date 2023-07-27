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
        Schema::create('attetations', function (Blueprint $table) {
            $table->string('id_attestion');
            $table->string('etudiant');
            $table->string('filiere');
            $table->string('date_delib');
            $table->string('type_licence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attetations');
    }
};
