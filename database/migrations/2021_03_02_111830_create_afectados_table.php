<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfectadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("afectados", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("pais")->nullable();
            $table->bigInteger("pais_id")->unsigned()->nullable();
            $table->date("fecha");
            $table->integer("contagiados")->unsigned();
            $table->integer("fallecidos")->unsigned();
            $table->integer("recuperados")->unsigned();
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
        Schema::dropIfExists("afectados");
    }

}
