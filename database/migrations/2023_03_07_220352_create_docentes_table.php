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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('idDocente',5);
            $table->string('nombre',200);
            $table->string('apellido',200);
            $table->string('cedula',200);
            $table->string('celular',200);
            $table->string('correo',100);
            $table->string('ciudad',100);
            $table->string('contrasena',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
