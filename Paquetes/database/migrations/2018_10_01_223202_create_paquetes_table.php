<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ingreso');
            $table->char('id_empresa');
            $table->integer('id_tipo_ingreso')->unsigned();
            $table->date('fecha_entrega')->nullable();
            $table->integer('id_tipo_entrega')->unsigned()->nullable(); //default(1)
            $table->char('id_persona_retira')->nullable(); //default(1)
            $table->boolean('entregado')->nullable(); //default(false)
            
            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('id_tipo_ingreso')->references('id')->on('tipos_envios');
            $table->foreign('id_tipo_entrega')->references('id')->on('tipos_envios');
            $table->foreign('id_persona_retira')->references('id')->on('personas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
}
