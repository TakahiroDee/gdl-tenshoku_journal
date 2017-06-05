<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Areacode extends Model
{
    protected $guarded = [];

    public function recruitments()
    {
        return $this->hasMany('App\Recruitment','area_code','area_code');
    }

    public static function fulllist()
    {
        $areamodal = array();
        $_blockcodelist = array();
        $_values = DB::table('areacodes')->select('block_code_value')->distinct()->get();

        foreach($_values as $_value)
        {
            array_push($_blockcodelist, $_value->block_code_value);
        }

        for($i = 0; $i < count($_blockcodelist); $i++)
        {
            $areamodal[$i] = array(
              'block_code_value' => $_blockcodelist[$i],
              'elems'            => DB::table('areacodes')
                                    ->select('area_code','area_code_value')
                                    ->where('block_code_value',$_blockcodelist[$i])
                                    ->orderBy('area_code')
                                    ->get()
                                    ->toArray(),
            );
        }

        return $areamodal;
    }

}
