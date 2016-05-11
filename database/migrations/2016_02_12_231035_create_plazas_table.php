<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plazas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('vigencia', 1);
            $table->decimal('sueldo', 10, 2);
            $table->decimal('sobresueldo', 10, 2);
            $table->decimal('estimulo', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plazas');
    }
}
