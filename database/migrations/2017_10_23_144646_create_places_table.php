<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->string('telephone')->nullable();
            $table->boolean('wifi')->nullable();
            $table->string('opening_hours')->nullable();
            $table->float('gps_lat')->nullable();
            $table->float('gps_lgt')->nullable();
        });
    }

   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
