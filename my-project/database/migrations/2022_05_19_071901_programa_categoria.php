<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgramaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("programa_categoria", function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->unsignedInteger("programa_id");
            $table->unsignedInteger("categoria_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("programa_categoria");
    }
}
