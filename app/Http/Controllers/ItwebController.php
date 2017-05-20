<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\Reputation;
use DB;

class ItwebController extends BaseController
{
    protected $service_type = "";


    public function __construct()
    {
        $this->service_type = "itweb";
    }


    public function index()
    {
        $rankings = Ranking::where('service_type',$this->service_type)->orderBy('rank','asc')->get();

        $reputations = $this->getRelatedReputation();

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('itweb.index',compact('pages','posts','rankings','reputations'));
    }

    public function getSiteIndex()
    {
        $rankings = Ranking::where('service_type',$this->service_type)
                    ->whereIn('service_id',['findjob','green','switch'])->orderBy('rank','asc')->get();

        $reputations = $this->getRelatedReputation();

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('itweb.siteIndex',compact('pages','posts','rankings','reputations'));
    }

    public function getAgentIndex()
    {
        $rankings = Ranking::where('service_type',$this->service_type)
                    ->whereIn('service_id',['workport_it','geekly','levatech','mynabi_creater',])->orderBy('rank','asc')->get();

        $reputations = $this->getRelatedReputation();

        $pages = $this->getPages();
        $posts = $this->getPosts();

        return view('itweb.agentIndex',compact('pages','posts','rankings','reputations'));
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

        return view('itweb.show',compact('contents','good_reps','bad_reps','recent_reps','pages','posts'));
    }
}
