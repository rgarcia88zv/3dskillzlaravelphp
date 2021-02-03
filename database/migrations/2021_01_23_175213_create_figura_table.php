<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiguraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figura', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idArtista')->unsigned();
            $table->string('nombreFigura',30);
            $table->string('materialFigura',30);
            $table->decimal('precioFigura', $precision = 8, $scale = 2);
            $table->string('imgFigura');
            $table->timestamps();
            $table->foreign('idArtista')->references('id')->on('artista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figura');
    }
}
