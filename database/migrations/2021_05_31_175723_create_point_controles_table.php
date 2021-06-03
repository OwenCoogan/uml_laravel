<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_controles', function (Blueprint $table) {
            $table->id('id_controle');
            $table->integer('id_vehicule');
            $table->string('controle_type');
            $table->string('controle_description');
            $table->integer('id_employe');
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
        Schema::dropIfExists('point_controles');
    }
}
