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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('guid')->unique(); // Identifiant unique AD
        $table->string('prenom');
        $table->string('nom');
        $table->string('email')->unique();
        // Crée la clé étrangère service_id qui pointe vers la table services
        $table->foreignId('service_id')->constrained()->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
