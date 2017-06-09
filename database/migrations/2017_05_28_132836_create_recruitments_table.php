<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;

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
            $table->engine = 'Mroonga';
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
            $table->datetime('expired_at')->nullable();
            $table->datetime('last_confirmed_at')->nullable();
            $table->integer('new_flag')->default(0);
            $table->softDeletes();            

            $table->timestamps();
        });

        /*
         * http://www.84kure.com/blog/2016/04/14/laravel-fulltext%E3%82%A4%E3%83%B3%E3%83%87%E3%83%83%E3%82%AF%E3%82%B9%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%9F%E5%85%A8%E6%96%87%E6%A4%9C%E7%B4%A2/
         */
        DB::statement('ALTER TABLE tj_recruitments ADD FULLTEXT INDEX `fulltext` (`subtitle`,`content`,`workplace`,`skill`,`payment`)');
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
