<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnOfReputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reputations', function (Blueprint $table) {
            $table->renameColumn('avatar_thumbnail_path','avatar_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reputations', function (Blueprint $table) {
            $table->renameColumn('avatar_type','avatar_thumbnail_path');
        });
    }
}
