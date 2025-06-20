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
        Schema::create('aprendices_fichas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idaprendiz')->unsigned();
            $table->bigInteger('idficha')->unsigned();
            $table->timestamps();

            $table->foreign('idaprendiz')->references('id')->on('aprendices');
            $table->foreign('idficha')->references('id')->on('fichas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices_fichas');
    }
};
