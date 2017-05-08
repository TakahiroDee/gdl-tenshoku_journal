<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ranking;
use App\Reputation;

class SiteController extends Controller
{  
    public function index()
    {
        $rankings = Ranking::where('service_type','site')
                    ->where('del_flag','<>','true')
                    ->orderBy('rank','asc')
                    ->get();

        $rnnx_reps = Reputation::where('service_name','リクナビNEXT')
                    ->where('rating','>=',3)
                    ->orderBy('virtual_created_date','desc')
                    ->take(2)
                    ->get();

        $type_reps = Reputation::where('service_name','@type')
                    ->where('rating','>=',3)
                    ->orderBy('virtual_created_date','desc')
                    ->take(2)
                    ->get();

        $bitr_reps = Reputation::where('service_name','バイトルNEXT')
                    ->where('rating','>=',3)
                    ->orderBy('virtual_created_date','desc')
                    ->take(2)
                    ->get();

        $htlk_reps = Reputation::where('service_name','はたらいく')
                    ->where('rating','>=',3)
                    ->orderBy('virtual_created_date','desc')
                    ->take(2)
                    ->get();

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

        return view('site.index',compact('pages','posts','rankings','rnnx_reps','type_reps','bitr_reps','htlk_reps','posts'));
    }

    public function show($id)
    {
        $ranking = Ranking::findOrFail($id);

        // $reps = Reputation::where('service_eg_name',$id)
        //             ->orderBy('rating','desc')
        //             ->orderBy('virtual_created_date','desc')
        //             ->get();
        // reputationテーブルにはservice_eg_nameがないので、relationさせる？

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

        return view('site.show',compact('ranking','pages','posts'));
    }
}
