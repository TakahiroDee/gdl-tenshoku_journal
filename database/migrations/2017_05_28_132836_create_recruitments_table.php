<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->increments('id');

            $table->string('rqmt_id',50)->unique();
            $table->string('sitename',255);
            $table->string('cmpny_name',255);
            $table->text('subtitle');
            $table->string('job_code_full',255);
            $table->string('job_code_big',255);
            $table->string('job_code_mid',255);
            $table->mediumText('message');
            $table->mediumText('content');
            $table->mediumText('content_wiz_tag');
            $table->string('area_code',255);
            $table->text('workplace');
            $table->text('workplace_wiz_tag');
            $table->text('skill');
            $table->text('skill_wiz_tag');
            $table->text('payment');
            $table->text('payment_wiz_tag');
            $table->string('url',255);

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
        Schema::dropIfExists('recruitments');
    }
}
