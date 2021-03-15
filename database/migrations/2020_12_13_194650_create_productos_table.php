<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id("id");
            $table->string("denominacion_producto", 100);
			$table->string("descripcion", 255);
			$table->string("marca", 100);
			$table->float("precio", 6,2);
			$table->date("fecha_cadu");
			$table->string("cantidad", 255);
			//$table->binary('foto')->nullable();
			$table->foreignId('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
		
		DB::statement("ALTER TABLE productos ADD foto bytea");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
