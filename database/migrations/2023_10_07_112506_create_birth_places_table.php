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
        Schema::create('birth_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personal_infos');
            $table->string('country');
            $table->string('ditrict');
            $table->string('county');
            $table->string('sub_county');
            $table->string('parish');
            $table->string('village');
            $table->string('city');
            $table->string('health_facility');
            $table->integer('birth_weight');
            $table->integer('parity');
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
        Schema::dropIfExists('birth_places');
    }
};
