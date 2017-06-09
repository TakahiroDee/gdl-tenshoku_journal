<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Recruitment;

class AddColumnSoftDeletesRetry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recruitments', function (Blueprint $table) {
            $table->softDeletes();
        });

        
        Recruitment::withTrashed()->chunk(300,function($recruitments){
            foreach($recruitments as $recruitment)
            {
                $recruitment->restore();
            }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recruitments', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
