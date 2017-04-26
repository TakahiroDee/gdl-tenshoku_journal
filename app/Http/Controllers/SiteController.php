<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function index()
    {
        $pages = DB::table('posts as t1')
                          ->join('postmeta as t2', 't1.ID', '=', 't2.post_id')
                          ->select('ID','post_title','post_name','guid','meta_value as headline')
                          ->distinct()
                          ->where('post_type','=','page')
                          ->where('post_status','=','publish')
                          ->where('meta_key','=','headline')
                          ->get();

        $posts = DB::table('posts as t3')
                          ->leftJoin('posts as t4','t3.ID', '=', 't4.post_parent')
                          ->select('t3.post_title as title', 't3.guid as link', 't4.guid as thumb')
                          ->where('t3.post_type','=','post')
                          ->where('t4.guid','REGEXP','wp-content/uploads/[0-9]{4}/[0-9]{2}/e_')
                          ->orderBy('t3.post_modified','DESC')
                          ->take(6)
                          ->get();


        return view('site.index',compact('pages','posts'));
    }
}
