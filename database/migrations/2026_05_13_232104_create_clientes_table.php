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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->string('email', 150)->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('direccion', 255)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('provincia', 100)->nullable();
            $table->string('codigo_postal', 20)->nullable();
            $table->string('password',100);
            
            $table->enum('rol', ['cliente', 'admin'])->default('cliente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
