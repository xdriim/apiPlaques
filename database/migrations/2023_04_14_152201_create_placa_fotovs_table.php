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
        Schema::create('placa_fotovs', function (Blueprint $table) {
            $table->id();
            $table->float('latitud')->nullable();
            $table->float('longitud')->nullable();
            $table->string('nom')->nullable();
            $table->string('tipus_equipament')->nullable();
            $table->string('adreca')->nullable();
            $table->string('nom_barri')->nullable();
            $table->float('energia_prod_kWh')->nullable();
            $table->float('potencia_kWp')->nullable();
            $table->integer('emissions_estalv_KgCo2eq')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placa_fotovs');
    }
};
