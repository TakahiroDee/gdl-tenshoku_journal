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

        Schema::enableForeignKeyConstraints();

        Schema::create('reputations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ranking_id')->unsigned();
            $table->string('avatar_type',255);
            $table->string('age',50);
            $table->string('gender',50);
            $table->string('job',50);
            $table->integer('rating');
            $table->text('comment');
            $table->dateTime('virtual_created_date');
            $table->timestamps();

            $table->foreign('ranking_id')->references('id')->on('rankings')->onDelete('cascade');
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
