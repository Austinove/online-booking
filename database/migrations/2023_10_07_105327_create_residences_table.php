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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personal_infos');
            $table->string('type');
            $table->string('country');
            $table->string('ditrict');
            $table->string('county');
            $table->string('sub-county');
            $table->string('parish');
            $table->string('village');
            $table->string('street');
            $table->string('house_no');
            $table->integer('years_lived');
            $table->string('previous_district')->nullable();
            $table->string('previous_address')->nullable();
            $table->string('citzenship');
            $table->string('state_nationality')->nullable();
            $table->integer('citzenship_years')->nullable();
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
        Schema::dropIfExists('residences');
    }
};
