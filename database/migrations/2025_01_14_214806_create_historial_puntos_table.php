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
        Schema::create('historial_puntos', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 12);
            $table->foreignId('transaccion_id')->constrained('transacciones')->onDelete('cascade');
            $table->integer('puntos');
            $table->enum('tipo', ['acumulados', 'gastados']);
            $table->timestamp('fecha')->useCurrent();
            $table->timestamps();
        
            $table->foreign('rut')->references('rut')->on('usuarios')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_puntos');
    }
};
