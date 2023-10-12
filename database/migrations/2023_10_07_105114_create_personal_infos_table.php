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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('given_name');
            $table->string('other_name')->nullable();
            $table->string('maiden_name')->nullable();
            $table->date('dob');
            $table->string('email')->unique()->nullable();
            $table->string('mob_number');
            $table->string('education_level');
            $table->string('occupation')->nullable();
            $table->string('religion');
            $table->string('diabilities')->nullable();
            $table->string('lc_letter')->nullable();
            $table->string('diso_letter')->nullable();
            $table->string('unique_code', 8)->unique();
            $table->number('step');
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
        Schema::dropIfExists('personal_infos');
    }
};
