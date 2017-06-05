<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreacodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areacodes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('area_code',100)->unique();
            $table->string('area_code_value');
            $table->string('area_pathname');
            $table->string('block_code');
            $table->string('block_code_value');
            $table->string('block_pathname');

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
        Schema::dropIfExists('areacodes');
    }
}
