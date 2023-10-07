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
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personal_infos');
            $table->string('surname');
            $table->string('given_name');
            $table->string('other_name')->nullable();
            $table->string('maiden_name')->nullable();
            $table->string('nin')->nullable();
            $table->date('dom');
            $table->string('marriage_place');
            $table->string('marriage_type');
            $table->string('marriage_cert');
            $table->string('citzenship');
            $table->string('state_nationality')->nullable();
            $table->integer('spouse_number')->unique()->nullable();
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
        Schema::dropIfExists('spouses');
    }
};
