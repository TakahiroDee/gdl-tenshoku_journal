<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ranking;
use App\Reputation;

class SiteController extends BaseController
{
    protected $service_type = "";


    public function __construct()
    {
        $this->service_type = "site";
    }


    public function index()
    {
        $rankings = Ranking::where('service_type',$this->service_type)->orderBy('rank','asc')->get();

        $reputations = $this->getRelatedReputation();

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('site.index',compact('pages','posts','rankings','reputations'));
    }



    public function show($service_id)
    {
        $id          = Ranking::where('service_id',$service_id)->get()->toArray()[0]['id'];

        $contents    = Ranking::find($id);

        $good_reps   = Ranking::find($id)->reputations()->orderBy('rating','desc')->orderBy('virtual_created_date','desc')->take(3)->get();
        $bad_reps    = Ranking::find($id)->reputations()->orderBy('rating','asc')->orderBy('virtual_created_date','desc')->take(3)->get();
        $recent_reps = Ranking::find($id)->reputations()->orderBy('rating','desc')->orderBy('virtual_created_date','desc')->take(10)->get();

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('site.show',compact('contents','good_reps','bad_reps','recent_reps','pages','posts'));
    }
}
