<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobcode;

class JobCodeController extends Controller
{
    public function index()
    {
        $jobcodes = Jobcode::all();

        return \Response::json($jobcodes);
    }
}
