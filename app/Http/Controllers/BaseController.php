<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\Reputation;
use DB;

class BaseController extends Controller
{
    protected function getRelatedReputation()
    {
        /*
         * ranking eloquentと同じ順序でsortしたreputations collectionを取得
         */

        $rankings = Ranking::where('service_type',$this->service_type)->orderBy('rank','asc')->get()->toArray();

        $extracted_array = array();
        foreach($rankings as $ranking){
          array_push($extracted_array, $ranking['id']);
        }

        $collects = array();
        for($i = 0; $i < count($extracted_array); $i++){
          $rep = Ranking::find($extracted_array[$i])->reputations()->orderBy('rating','desc')->take(2)->get();
          $collects[] = $rep;
        }

        $reputations = collect($collects);

        return $reputations;
    }


    protected function getPages()
    {
        /*
         * 固定ページの記事一覧を取得
         */
        $pages = DB::table('posts as t1')
                          ->join('postmeta as t2', 't1.ID', '=', 't2.post_id')
                          ->select('ID','post_title','post_name','guid','meta_value as headline')
                          ->distinct()
                          ->where('post_type','=','page')
                          ->where('post_status','=','publish')
                          ->where('meta_key','=','headline')
                          ->get();
        return $pages;
    }

    protected function getPosts()
    {
        /*
         * 一般記事の一覧を取得
         */
        $posts = DB::table('posts as t3')
                          ->leftJoin('posts as t4','t3.ID', '=', 't4.post_parent')
                          ->select('t3.post_title as title', 't3.guid as link', 't4.guid as thumb')
                          ->where('t3.post_type','=','post')
                          ->where('t4.guid','REGEXP','wp-content/uploads/[0-9]{4}/[0-9]{2}/e_')
                          ->orderBy('t3.post_modified','DESC')
                          ->take(6)
                          ->get();
        return $posts;
    }
}
