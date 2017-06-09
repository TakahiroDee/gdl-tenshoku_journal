<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Recruitment extends Model
{
    // use SoftDeletes;

    protected $guarded = [];
    // protected $dates = ['deleted_at'];

    public function jobcode()
    {
        return $this->belongsTo('App\Jobcode','job_code_full','job_code_full');
    }

    public function areacode()
    {
        return $this->belongsTo('App\Areacode','area_code','area_code');
    }

    public function scopeNarrowDown($query, $_job_code_list, $_area_code_list)
    {
        if(!empty($_job_code_list))
        {
          $query->whereIn('job_code_full',$_job_code_list);
        }
        if(!empty($_area_code_list))
        {
          $query->whereIn('area_code',$_area_code_list);
        }

        return $query;
    }    
}
