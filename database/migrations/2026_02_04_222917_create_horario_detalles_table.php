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
        Schema::create('horario_detalles', function (Blueprint $table) {
            $table->id();
            $table->string("Dia", 20);
            $table->string("Hora_entrada", 20);
            $table->string("Hora_salida", 20);
            $table->unsignedBigInteger("id_horario");
            $table->foreign("id_horario")->references("id")->on("horarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horario_detalles');
    }
};
