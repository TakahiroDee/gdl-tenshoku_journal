<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruitment;
use DB;

class TopController extends Controller
{
    public function index()
    {

        $pages  = DB::table('posts as t1')
                            ->join('postmeta as t2','t2.post_id', '=', 't1.ID')
                            ->select('ID','post_title','post_name','guid','meta_value as headline')
                            ->distinct()
                            ->where('t1.post_type','=','page')
                            ->where('t2.meta_key','=','headline')
                            ->get();

        /*
         SQL
         ----------------------------------------------------------------------------------------
         SELECT DISTINCT ID,post_title,post_name,guid,meta_value as headline
         FROM tj_posts AS t1
         INNER JOIN tj_postmeta AS t2 ON t1.ID = t2.post_id
         WHERE post_type = 'page' AND post_status = 'publish' AND meta_key = 'headline';
         */


        $posts  = DB::table('posts as t3')
                            ->leftJoin('posts as t4','t3.ID','=','t4.post_parent')
                            ->select('t3.post_title as title', 't3.guid as link', 't4.guid as thumb')
                            ->where('t3.post_type', '=', 'post')
                            ->where('t4.guid', 'REGEXP', 'wp-content/uploads/[0-9]{4}/[0-9]{2}/e_')
                            ->orderBy('t3.post_modified','DESC')
                            ->take(10)
                            ->get();

        /*
         SQL
         ----------------------------------------------------------------------------------------
         SELECT t3.post_title as title, t3.guid as link, t4.guid as thumb
         FROM tj_posts AS t3
         LEFT OUTER JOIN tj_posts AS t4 ON t3.ID = t4.post_parent
         WHERE t3.post_type = 'post' AND t4.guid REGEXP 'wp-content/uploads/[0-9]{4}/[0-9]{2}/e_'
         ORDER BY t3.post_modified DESC
         LIMIT 10
         */


        $datas = array(
                    'results' => "",
                    'counts'  => "",
                    'last_update' => "",
                );

        $datas['results']     = DB::table('recruitments')
                                ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full')
                                ->where('new_flag',1)
                                ->where('sitename','rikunabi_next')
                                ->orderBy('last_confirmed_at','DESC')
                                ->take(10)
                                ->get();
        $datas['counts']      = DB::table('recruitments')
                                ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full')
                                ->count();
        $datas['last_update'] = substr(Recruitment::select('last_confirmed_at')->orderBy('last_confirmed_at','desc')->first()->last_confirmed_at,0,10);


        return view('page.index', compact('pages','posts','datas'));
    }
}
