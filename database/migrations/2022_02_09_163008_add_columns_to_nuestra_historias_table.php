<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToNuestraHistoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nuestra_historias', function (Blueprint $table) {
            $table->text('titulo_en')->nullable();
            $table->text('texto_en')->nullable();
            $table->string('imagen_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nuestra_historias', function (Blueprint $table) {
            //
        });
    }
}
