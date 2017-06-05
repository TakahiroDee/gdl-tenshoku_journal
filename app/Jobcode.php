<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Jobcode extends Model
{
    protected $guarded = [];

    public function recruitments()
    {
        return $this->hasMany('App\Recruitment','job_code_full','job_code_full');
    }

    public static function fulllist()
    {
        $jobmodal = array();
        $_bigcodelist = array();
        $_values = DB::table('jobcodes')->select('job_code_big_value')->distinct()->get();

        foreach($_values as $_value)
        {
            array_push($_bigcodelist, $_value->job_code_big_value);
        }

        for($i = 0; $i < count($_bigcodelist); $i++)
        {
            $jobmodal[$i] = array(              
              'job_code_big_value' => $_bigcodelist[$i],
              'elems'              => DB::table('jobcodes')
                                      ->select('job_code_full','job_code_mid_value')
                                      ->where('job_code_big_value',$_bigcodelist[$i])
                                      ->orderBy('job_code_full')
                                      ->get()
                                      ->toArray(),
            );

        }

        return $jobmodal;
    }
}
