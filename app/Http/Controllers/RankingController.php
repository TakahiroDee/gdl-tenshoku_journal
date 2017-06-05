<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\Reputation;
use DB;

class RankingController extends Controller
{
    public function topIndex()
    {
        return ('Hi There');
    }

    public function siteIndex()
    {
        $rankings = DB::table('rankings')
                    ->join('services','rankings.service_id','=','services.service_id')
                    ->where('services.publishing_flag',1)
                    ->where('rankings.service_type','site')
                    ->orderBy('rankings.rank','asc')
                    ->get();

        $reputations = $this->getRelatedReputation('site');

        $data = array(
            'service_type'   => 'site',
            'h1Text'         => '結局どのサイトがいいの？みんなの口コミから選ぶ転職サイト総合ランキング',
            'breadcrumbText' => '転職サイト総合ランキング',
        );

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('ranking.index',compact('pages','posts','rankings','reputations','data'));
    }

    public function agentIndex()
    {
        $rankings = DB::table('rankings')
                    ->join('services','rankings.service_id','=','services.service_id')
                    ->where('services.publishing_flag',1)
                    ->where('rankings.service_type','agent')
                    ->orderBy('rankings.rank','asc')
                    ->get();

        $reputations = $this->getRelatedReputation('agent');

        $data = array(
            'service_type'   => 'agent',
            'h1Text'         => '評判・口コミで選ぶ！転職エージェント徹底比較ランキング',
            'breadcrumbText' => '評判・口コミで選ぶ！転職エージェント徹底比較ランキング',
        );

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('ranking.index',compact('pages','posts','rankings','reputations','data'));
    }

    public function womanIndex()
    {
        $rankings = DB::table('rankings')
                  ->join('services','rankings.service_id','=','services.service_id')
                  ->where('services.publishing_flag',1)
                  ->where('rankings.service_type','woman')
                  ->orderBy('rankings.rank','asc')
                  ->get();

        $reputations = $this->getRelatedReputation('woman');

        $data = array(
            'service_type'   => 'woman',
            'h1Text'         => '女性向け転職サイト・転職エージェント総合ランキング',
            'breadcrumbText' => '女性向け転職サイト・転職エージェント総合ランキング',
        );

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('ranking.index',compact('pages','posts','rankings','reputations','data'));
    }

    public function hakenIndex()
    {
        $rankings = DB::table('rankings')
                ->join('services','rankings.service_id','=','services.service_id')
                ->where('services.publishing_flag',1)
                ->where('rankings.service_type','haken')
                ->orderBy('rankings.rank','asc')
                ->get();

        $reputations = $this->getRelatedReputation('haken');

        $data = array(
            'service_type'   => 'haken',
            'h1Text'         => '登録はここで決まり！派遣サイトおすすめランキング',
            'breadcrumbText' => '登録はここで決まり！派遣サイトおすすめランキング',
        );

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('ranking.index',compact('pages','posts','rankings','reputations','data'));
    }

    public function itwebIndex()
    {
        $rankings = DB::table('rankings')
                ->join('services','rankings.service_id','=','services.service_id')
                ->where('services.publishing_flag',1)
                ->where('rankings.service_type','itweb')
                ->orderBy('rankings.rank','asc')
                ->get();

        $reputations = $this->getRelatedReputation('itweb');

        $data = array(
            'service_type'   => 'itweb',
            'h1Text'         => 'ITWeb系転職サイト・エージェントランキング',
            'breadcrumbText' => 'ITWeb系転職サイト・エージェントランキング',
        );

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('ranking.index',compact('pages','posts','rankings','reputations','data'));
    }

    public function show($service_type, $service_id)
    {
        $id          = Ranking::where('service_type',$service_type)->where('service_id',$service_id)->get()->toArray()[0]['id'];

        // $contents    = Ranking::find($id);
        $contents    = DB::table('rankings')
                      ->join('services','rankings.service_id','=','services.service_id')
                      ->where('rankings.service_type',$service_type)
                      ->where('rankings.service_id',$service_id)
                      ->first();

        $good_reps   = Ranking::find($id)->reputations()->orderBy('rating','desc')->orderBy('virtual_created_date','desc')->take(3)->get();
        $bad_reps    = Ranking::find($id)->reputations()->orderBy('rating','asc')->orderBy('virtual_created_date','desc')->take(3)->get();
        $recent_reps = Ranking::find($id)->reputations()->orderBy('rating','desc')->orderBy('virtual_created_date','desc')->take(10)->get();

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('ranking.show',compact('contents','good_reps','bad_reps','recent_reps','pages','posts'));
    }


    private function getRelatedReputation($service_type)
    {
        /*
         * ranking eloquentと同じ順序でsortしたreputations collectionを取得
         */

        $rankings = Ranking::where('service_type',$service_type)->orderBy('rank','asc')->get()->toArray();

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


    private function getPages()
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

    private function getPosts()
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
