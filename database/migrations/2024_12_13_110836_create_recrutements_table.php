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
        Schema::create('recrutements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("titre");
            $table->string("lieu");
            $table->string("descriptif_entreprise");
            $table->string("descriptif_poste");
            $table->string("profil");
            $table->string("competences");
            $table->string("formation");
            $table->string("experiences");
            $table->string("status");
            $table->unsignedInteger("type_recrutement");
            $table->unsignedInteger("user_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recrutements');
    }
};
