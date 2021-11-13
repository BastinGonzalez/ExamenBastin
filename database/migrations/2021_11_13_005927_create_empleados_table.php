<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->string('puesto_trabajo');
            $table->string('curp');
            $table->string('rfc');
            $table->string('estado');
            $table->integer('codigo_postal');
            $table->float('salario');
            $table->string('email');
            $table->string('horario_trabajo');
            $table->string('area_trabajo');
            $table->string('facebook')->nullable();
            $table->double('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
