<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\Reputation;
use DB;

class RankingController extends Controller
{
    public function index()
    {
        return view('ranking.index');
    }
}
