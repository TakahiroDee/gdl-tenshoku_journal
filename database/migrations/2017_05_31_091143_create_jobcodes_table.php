<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobcodes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('job_code_full',100)->unique();
            $table->string('job_code_big');
            $table->string('job_code_big_value');
            $table->string('job_code_mid');
            $table->string('job_code_mid_value');
            $table->string('pathname');

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
        Schema::dropIfExists('jobcodes');
    }
}
