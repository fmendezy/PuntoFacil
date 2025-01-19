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
        Schema::create('clientes_negocios', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 12);
            $table->foreignId('negocio_id')->constrained('negocios')->onDelete('cascade');
            $table->integer('saldo_puntos')->default(0);
            $table->timestamps();
        
            $table->foreign('rut')->references('rut')->on('usuarios')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_negocios');
    }
};
