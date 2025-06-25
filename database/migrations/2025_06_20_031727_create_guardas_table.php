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
        Schema::create('guardas', function (Blueprint $table) {
            $table->id();
            $table->string('Documento')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardas');
    }
};
