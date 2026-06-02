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
        Schema::create('personalizados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->text('descripcion');
            $table->string('imagen_referencia', 255)->nullable();
            $table->foreignId('talle_id')->constrained('talles')->onDelete('cascade');
            $table->integer('cantidad')->default(1);
            $table->decimal('precio_estimado', 10, 2);
            $table->enum('estado', [
                'pendiente',
                'aprobado',
                'en_proceso',
                'terminado',
                'cancelado',
            ])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalizados');
    }
};
