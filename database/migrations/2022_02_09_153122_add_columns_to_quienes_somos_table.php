<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToQuienesSomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quienes_somos', function (Blueprint $table) {
            $table->text('descripcion_en')->nullable();
            $table->text('mision_en')->nullable();
            $table->text('vision_en')->nullable();
            $table->text('valores_en')->nullable();
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
        Schema::table('quienes_somos', function (Blueprint $table) {
            //
        });
    }
}
