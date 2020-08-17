<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidades', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->string('name');
            $table->string('provincia');
            $table->char('codprov');
            $table->char('coddep');
            $table->string('departamento');
            $table->char('cp')->nullable();            
            // $table->foreign('id_departamento')->references('id')->on('departamentos');            
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
        Schema::dropIfExists('localidades');
    }
}
