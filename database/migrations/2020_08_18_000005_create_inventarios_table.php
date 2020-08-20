<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seccion',15)->nullable();
            $table->string('posicion',15)->nullable();
            $table->string('estado',15)->nullable();
            $table->string('producto',50)->nullable();
            $table->string('pid',30);
            $table->string('serial',20);
            $table->integer('codigo');
            $table->string('canal',50);
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
        Schema::dropIfExists('inventarios');
    }
}
