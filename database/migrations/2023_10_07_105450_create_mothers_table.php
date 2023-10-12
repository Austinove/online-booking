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
        Schema::create('mothers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personal_infos');
            $table->string('surname');
            $table->string('given_name');
            $table->string('other_name')->nullable();
            $table->string('maiden_name')->nullable();
            $table->string('nin');
            $table->string('citzenship');
            $table->string('living_state');
            $table->string('occupation');
            $table->string('state_nationality')->nullable();
            $table->string('country');
            $table->string('ditrict');
            $table->string('county');
            $table->string('sub-county');
            $table->string('parish');
            $table->string('village');
            $table->string('street');
            $table->string('house_no');
            $table->string('ocountry');
            $table->string('oditrict');
            $table->string('ocounty');
            $table->string('osub-county');
            $table->string('oparish');
            $table->string('ovillage');
            $table->string('ostreet');
            $table->string('ohouse_no');
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
        Schema::dropIfExists('mothers');
    }
};
