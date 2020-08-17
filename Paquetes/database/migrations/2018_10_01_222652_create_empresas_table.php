<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->string('name', 200);
            $table->char('cuit', 11)->nullable();
            $table->string('email')->nullable();
            $table->char('codigo_telefono', 6)->nullable();
            $table->char('telefono', 10)->nullable();
            $table->boolean('socio')->default(false);
            $table->string('observaciones', 500)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
