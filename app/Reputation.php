<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reputation extends Model
{
    protected $fillable = ['avatar_thumbnail_path','age','gender','job','service_name','virtual_created_date'];
}
