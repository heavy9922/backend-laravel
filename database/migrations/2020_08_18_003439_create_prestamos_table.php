<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoDelPrestamo')->nullable();
            $table->string('equipoPrestado',50)->nullable();
            $table->string('serial',50)->nullable();
            $table->string('canal',100)->nullable();
            $table->date('prestamo')->nullable();
            $table->string('mes',50)->nullable();
            $table->date('devolucionEstamada')->nullable();
            $table->date('realDevolucion');
            $table->string('devuelto',2)->nullable();
            $table->string('estadoReal',50)->nullable();
            $table->integer('diasTranscurridos')->nullable();
            $table->string('observaciones');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
