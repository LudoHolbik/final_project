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
            $table->float('gps_lat', 8, 6)->nullable();
            $table->float('gps_lgt', 8, 6)->nullable();
            $table->string('img')->nullable();
            $table->integer('likes')->default(0);
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
