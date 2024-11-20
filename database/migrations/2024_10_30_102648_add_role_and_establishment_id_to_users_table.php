<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('establishment_id')->nullable()->constrained()->onDelete('cascade'); // Liaison à establishments
            $table->enum('role', ['admin', 'teacher', 'establishment'])->default('teacher'); // Rôle utilisateur
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['establishment_id']);
            $table->dropColumn('establishment_id');
            $table->dropColumn('role');
        });
    }
};
