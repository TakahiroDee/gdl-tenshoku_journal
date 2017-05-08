<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsToRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rankings', function (Blueprint $table) {
            $table->text('embeded_1')->nullable();
            $table->text('embeded_2')->nullable();
            $table->text('embeded_3')->nullable();
            $table->text('embeded_4')->nullable();
            $table->enum('del_flag',['true','false'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rankings', function (Blueprint $table) {
            $table->dropColumn('embeded_1');
            $table->dropColumn('embeded_2');
            $table->dropColumn('embeded_3');
            $table->dropColumn('embeded_4');
            $table->dropColumn('del_flag');            
        });
    }
}
