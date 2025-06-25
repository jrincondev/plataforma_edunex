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
        Schema::create('portafolio_aprendices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idtipoevidencia')->unsigned();
            $table->bigInteger('idtrimestre')->unsigned();
            $table->bigInteger('idaprendizficha')->unsigned();

            $table->foreign('idtipoevidencia')->references('id')->on('tipos_evidencias_aprendices');
            $table->foreign('idtrimestre')->references('id')->on('trimestres');
            $table->foreign('idaprendizficha')->references('id')->on('aprendices_fichas');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portafolio_aprendices');
    }
};
