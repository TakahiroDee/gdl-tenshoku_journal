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
            $table->string('service_id',100)->unique();
            $table->string('service_type',255);
            $table->string('service_jp_name',255);
            $table->integer('rank');
            $table->string('thumbnail_path',255);
            $table->text('summary');
            $table->string('positive_point_1',255);
            $table->string('positive_point_2',255)->nullable();
            $table->string('positive_point_3',255)->nullable();
            $table->string('negative_point_1',255);
            $table->string('negative_point_2',255)->nullable();
            $table->string('negative_point_3',255)->nullable();
            $table->text('description_1');
            $table->text('description_2');
            $table->text('description_3');
            $table->text('description_4');
            $table->text('description_5')->nullable();
            $table->text('embeded_1')->nullable();
            $table->text('embeded_2')->nullable();
            $table->text('embeded_3')->nullable();
            $table->text('embeded_4')->nullable();
            $table->text('embeded_5')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
