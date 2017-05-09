<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputations', function (Blueprint $table) {
            $table->increments('id');

            $table->foreign('service_id')->references('service_eg_name')->on('services')->onDelete('cascade');
            $table->string('avatar_type',255);
            $table->string('age',50);
            $table->string('gender',50);
            $table->string('job',50);
            $table->integer('rating');
            $table->text('comment');
            $table->dateTime('virtual_created_date ');

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
        Schema::dropIfExists('reputations');
    }
}
