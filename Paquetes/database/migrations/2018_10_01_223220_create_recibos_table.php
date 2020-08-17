<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->char('id')->primary();
            $table->date('fecha');
            $table->integer('id_tipo_recibo')->unsigned();
            $table->char('id_empresa');
            $table->integer('id_paquete')->nullable()->unsigned();
            $table->char('lote', 8)->nullable();
            $table->integer('id_servicio')->nullable()->unsigned();
            $table->float('impuesto')->default(0);
            $table->float('recargo')->default(0);
            $table->float('registro')->default(0);
            $table->float('gastos_impresion')->nullable();
            $table->float('gastos_envio')->nullable();
            $table->float('otros_gastos')->nullable();
            $table->char('cantidad', 5)->nullable();
            $table->string('observaciones', 200)->nullable();
            $table->boolean('enviado_por_mail')->default(false);

            $table->foreign('id_tipo_recibo')->references('id')->on('tipos_recibos');
            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('id_paquete')->references('id')->on('paquetes');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            
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
        Schema::dropIfExists('recibos');
    }
}
