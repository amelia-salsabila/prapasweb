<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlanetsTable extends Migration
{
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('distance_from_sun');
            $table->date('at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
