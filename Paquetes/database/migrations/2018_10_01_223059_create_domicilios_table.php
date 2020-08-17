<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_empresa');
            $table->string('calle');
            $table->char('numero_calle', 8);
            $table->char('piso', 3)->nullable();
            $table->string('oficina', 100)->nullable();
            // $table->char('cp', 6);
            $table->char('id_localidad');
            $table->string('observaciones', 500)->nullable();

            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('id_localidad')->references('id')->on('localidades');
            
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
        Schema::dropIfExists('domicilios');
    }
}
