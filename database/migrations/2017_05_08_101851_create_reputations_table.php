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

            $table->string('avatar_thumbnail_path',50);
            $table->string('age',20);
            $table->string('gender',20);
            $table->string('job',20);
            $table->integer('rating');
            $table->text('comment');
            $table->string('service_name',100);
            $table->datetime('virtual_created_date');
            
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
