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
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('image')->nullable(); // Ajouter une colonne pour l'image du professeur
            $table->string('location')->nullable(); // Ajouter une colonne pour la localisation
            $table->string('experience')->nullable(); // Ajouter une colonne pour l'éducation
            $table->json('skillsPro')->nullable(); // Ajouter une colonne pour les compétences (en JSON)
            $table->json('skillsTeach')->nullable(); // Ajouter une colonne pour les compétences (en JSON)
            $table->string('clasHour')->nullable(); // Ajouter une colonne pour les heures de classe
            $table->unsignedInteger('numberEtablishment')->nullable(); // Ajouter une colonne pour le nombre d'élèves
            $table->text('teaching_method')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            //
        });
    }
};
