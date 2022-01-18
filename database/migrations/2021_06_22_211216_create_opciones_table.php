<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionesTable extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('opciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('type');
            $table->text('name');
            $table->text('value')->nullable();
            $table->text('placeholder')->nullable();
            $table->integer('group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::dropIfExists('opciones');
    }
}
