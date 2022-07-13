<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constellations', function (Blueprint $table) {
            $table->id();
            $table->string('constellation_name');
            $table->string('symbolism');
            $table->string('image');
            $table->text('intro');
            $table->string('sense');
            $table->string('time_visible');
            $table->string('main_stars');
            $table->string('right_ascension');
            $table->string('declination');
            $table->string('latitudes');
            $table->tinyInteger('astronomical_entity_id');
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
        Schema::dropIfExists('constellations');
    }
};
