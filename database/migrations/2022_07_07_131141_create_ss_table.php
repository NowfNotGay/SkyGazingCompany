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
        Schema::create('ss', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('intro')->nullable();
            $table->string('weight');
            $table->integer('ordinal');
            $table->string('element')->nullable();
            $table->text('temperature')->nullable();
            $table->string('image');
            $table->integer('year_of_formation')->nullable();
            $table->integer('lifespan')->nullable();
            $table->integer('distance')->nullable();
            $table->boolean('status_life')->nullable();
            $table->string('atmospheric_pressure')->nullable();
            $table->string('sidereal_rotation_period_sun')->nullable();
            $table->string('sidereal_rotation_period_itself')->nullable();
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
        Schema::dropIfExists('ss');
    }
};
