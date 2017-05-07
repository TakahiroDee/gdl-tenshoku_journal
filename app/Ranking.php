<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = ['service_type','rank','service_name','thumbnail_path','summary','positive_point1',
      'positive_point2','positive_point3','negative_point1','negative_point2','negative_point3',
      'description1','description2','description3','description4','description5','link',
    ];

}
