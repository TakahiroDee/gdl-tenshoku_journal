<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_type',20);
            $table->integer('rank');
            $table->string('service_name',255);
            $table->string('thumbnail_path',100);
            $table->text('summary');
            $table->string('positive_point1',255);
            $table->string('positive_point2',255)->nullable();
            $table->string('positive_point3',255)->nullable();
            $table->string('negative_point1',255);
            $table->string('negative_point2',255)->nullable();
            $table->string('negative_point3',255)->nullable();
            $table->text('description1');
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->text('description4')->nullable();
            $table->text('description5')->nullable();
            $table->string('link');
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
        Schema::dropIfExists('rankings');
    }
}
