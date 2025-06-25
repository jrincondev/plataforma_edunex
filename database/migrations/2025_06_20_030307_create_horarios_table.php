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
        Schema::create('horarios', function (Blueprint $table) {
    $table->id();
    $table->string('dia'); // Lunes, Martes, etc.
    $table->time('hora_inicio');
    $table->time('hora_fin');
    $table->string('actividad');
    $table->unsignedBigInteger('usuario_id')->nullable();
    $table->timestamps();

    // Opcional: relación con usuarios
    // $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
