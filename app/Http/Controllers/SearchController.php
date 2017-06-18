<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruitment;
use App\Ranking;
use App\Jobcode;
use App\Areacode;
use DB;

class SearchController extends Controller
{
    /*****************************************************
     * Index
    ******************************************************/
    public function index()
    {
        $data = $this->makeData();
        $cassettes = DB::table('recruitments')
                    ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full')
                    ->orderBy('recruitments.last_confirmed_at','desc')
                    ->paginate(50);

        return view('search.index',compact('cassettes','data'));
    }

    public function getIndexByJobBigCode($pathname)
    {
        $opt = array(
            'pathname' => $pathname,
        );
        $data = $this->makeData('jobcode',$opt);

        $cassettes = DB::table('recruitments')
                    ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full')
                    ->whereIn('recruitments.job_code_full',$data['selected_job_code_list'])
                    ->orderBy('recruitments.last_confirmed_at','desc')
                    ->paginate(50);         


        return view('search.getIndexByJobBigCode',compact('cassettes','data'));
    }


    public function getIndexByJobFullCode($pathname, $job_code_full)
    {
        $opt = array(
            'pathname'      => $pathname,
            'job_code_full' => $job_code_full,
        );

        $data = $this->makeData('jobcode',$opt);

        $cassettes = DB::table('recruitments')
                    ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full')
                    ->where('recruitments.job_code_full',$job_code_full)
                    ->orderBy('last_confirmed_at','desc')
                    ->paginate(50);        


        return view('search.getIndexByJobFullCode',compact('cassettes','data'));
    }


    public function getIndexByBlockCode($block_pathname)
    {
        $opt = array(
            'block_pathname' => $block_pathname,
        );

        $data = $this->makeData('areacode',$opt);

        $cassettes = DB::table('recruitments')
                    ->join('areacodes','recruitments.area_code','=','areacodes.area_code')
                    ->where('block_pathname',$block_pathname)
                    ->orderBy('recruitments.last_confirmed_at','desc')
                    ->paginate(50);


        return view('search.getIndexByBlockCode',compact('cassettes','data'));
    }

    public function getIndexByAreaCode($block_pathname,$area_pathname)
    {
        $opt = array(
            'block_pathname' => $block_pathname,
            'area_pathname'  => $area_pathname,
        );

        $data = $this->makeData('areacode',$opt);

        $cassettes = DB::table('recruitments')
                    ->join('areacodes','recruitments.area_code','=','areacodes.area_code')
                    ->where('area_pathname','like',"%${area_pathname}%")
                    ->orderBy('recruitments.last_confirmed_at','desc')
                    ->paginate(50);


        return view('search.getIndexByAreaCode',compact('cassettes','data'));
    }


    public function getIndexByServiceId($service_id)
    {
        $opt = array(
            'service_id' => $service_id,
        );

        $data = $this->makeData('service',$opt);

        $cassettes = DB::table('recruitments')
                    ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full')
                    ->where('sitename',$service_id)
                    ->orderBy('recruitments.last_confirmed_at','desc')
                    ->paginate(50);

        return view('search.getIndexByServiceId',compact('cassettes','data'));

    }


    /*****************************************************
     * show
    ******************************************************/
    public function showByJobCode($pathname, $job_code_full, $rqmt_id)
    {
        $description = Recruitment::where('rqmt_id', $rqmt_id)->first();

        $data = array(
            'pathname'           => $pathname,
            'job_code_big_value' => Jobcode::wherePathname($pathname)->first()->job_code_big_value,
            'job_code_mid_value' => Jobcode::where('job_code_full',$job_code_full)->first()->job_code_mid_value,
            'job_code_full'      => $job_code_full,
            'relatedJob'         => Recruitment::where('job_code_full',$job_code_full)->where('sitename',$description->sitename)->orderBy('recruitments.last_confirmed_at','desc')->take(4)->get(),
            'rankingContent'     => Ranking::where('service_id',$description->sitename)->first(),
        );

        return view('search.showByJobCode',compact('description', 'data'));
    }



    public function showByAreaCode($block_pathname, $area_pathname, $rqmt_id)
    {
        $description = Recruitment::where('rqmt_id', $rqmt_id)->first();

        $data = array(
            'block_pathname'   => $block_pathname,
            'area_pathname'    => $area_pathname,
            'block_code_value' => Areacode::where('block_pathname',$block_pathname)->first()->block_code_value,
            'area_code_value'  => Areacode::where('area_pathname',$area_pathname)->first()->area_code_value,
            'relatedJob'       => Recruitment::where('area_code',$description->area_code)->where('sitename',$description->sitename)->orderBy('recruitments.last_confirmed_at','desc')->take(4)->get(),
            'rankingContent'   => Ranking::where('service_id',$description->sitename)->first(),
        );

        return view('search.showByAreaCode',compact('description', 'data'));
    }


    /*****************************************************
     * search
    ******************************************************/
    public function search(Request $request)
    {
        /*
         * check condition
         */
        $_inputList      = $request->input();
        $_job_code_list  = array();
        $_area_code_list = array();
        $_redirect       = false;
        $_keywordlist    = preg_split('/,/', preg_replace('/(\s|　)/', ',', $_inputList['keyword']));
        $keyword         = "";


        
        foreach($_inputList as $k => $v){
            if(strpos($k,'ch_c_') !== false)
            {
                array_push($_job_code_list, strval(preg_replace('/ch_c_/','',$k)));
            }
            if(strpos($k,'ch_a_') !== false)
            {
                array_push($_area_code_list, strval(preg_replace('/ch_a_/','',$k)));
            }            
        }

        if(count($_job_code_list) === 0 && count($_area_code_list) === 0 && count($_keywordlist) === 0){
            return redirect()->action('SearchController@index');
        }

        /*
         * make data
         */
        $data      = $this->makeData('custom', array(
                        'selected_job_code_list'  => $_job_code_list,
                        'selected_area_code_list' => $_area_code_list,
                      )
                    );


        /*
         * make cassettes
         */
        $_baseQuery = DB::table('recruitments')
                    ->join('jobcodes','recruitments.job_code_full','=','jobcodes.job_code_full');

        if(count($_job_code_list) > 0)
        {
            $_baseQuery->whereIn('recruitments.job_code_full',$_job_code_list);
        }
        if(!empty($_keywordlist))
        {
            $len = min(count($_keywordlist),5);

            for($i = 0; $i < $len; $i++)
            {
                $_baseQuery->where('content','like', "%$_keywordlist[$i]%");                
            }
        }
        if(count($_area_code_list) > 0)
        {            
            // $_baseQuery->whereIn('recruitments.area_code',$_area_code_list);
            for($i = 0; $i < count($_area_code_list); $i++)
            {
                if($i = 0){
                    $_baseQuery->where('recruitments.area_code','like','%${_area_code_list[$i]}%');
                }else{
                    $_baseQuery->orWhere('recruitments.area_code','like','%${_area_code_list[$i]}%');
                }                
            }
        }
            
        
        $cassettes  = $_baseQuery->orderBy('recruitments.id')->paginate(50);

        return view('search.index',compact('cassettes','data'));
    }


    /*****************************************************
     * utility
     * for optionnal data using in view or to pass to next page
    ******************************************************/
    private function makeData($type = null, $opt = null)
    {
        $data = "";
        $basedata = array(
            'service_id'             => '',
            'service_jp_name'        => '',
            'pathname'               => '',
            'block_pathname'         => '',
            'area_pathname'          => '',
            'job_code_big_value'     => '',
            'job_code_mid_value'     => '',
            'block_code_value'       => '',
            'area_code_value'        => '',
            'selected_job_code_list' => array(),
            'selected_area_code_list'=> array(),
            'job_modal'              => Jobcode::fulllist(),
            'area_modal'             => Areacode::fulllist(),
        );

        if(is_null($type) && is_null($opt))
        {
            $data = $basedata;

        }else if($type == 'jobcode'){

            if(isset($opt['pathname']) && isset($opt['job_code_full']))
            {
                $data = array_merge($basedata,array(
                    'pathname'               => $opt['pathname'],
                    'job_code_big_value'     => Jobcode::wherePathname($opt['pathname'])->first()->job_code_big_value,
                    'job_code_mid_value'     => Jobcode::where('job_code_full',$opt['job_code_full'])->first()->job_code_mid_value,
                    'selected_job_code_list' => array($opt['job_code_full']),
                  )
                );
            }else if(isset($opt['pathname'])){
                $data = array_merge($basedata, array(
                    'pathname'               => $opt['pathname'],
                    'job_code_big_value'     => Jobcode::wherePathname($opt['pathname'])->first()->job_code_big_value,
                  )
                );

                $_selected_job_code_list = array();
                foreach(Jobcode::select('job_code_full')->wherePathname($opt['pathname'])->get() as $v){
                    array_push($_selected_job_code_list, $v->job_code_full);
                }
                $data['selected_job_code_list'] = $_selected_job_code_list;

            }else{
                $data = $basedata;
            }

        }else if($type == 'areacode'){

            if(isset($opt['block_pathname']) && isset($opt['area_pathname']))
            {
                $data = array_merge($basedata, array(
                    'block_pathname'         => $opt['block_pathname'],
                    'area_pathname'          => $opt['area_pathname'],
                    'block_code_value'       => Areacode::where('block_pathname',$opt['block_pathname'])->first()->block_code_value,
                    'area_code_value'        => Areacode::where('area_pathname',$opt['area_pathname'])->first()->area_code_value,
                    'selected_area_code_list'=> array(Areacode::where('area_pathname',$opt['area_pathname'])->first()->area_code),
                  )
                );
            }else if(isset($opt['block_pathname'])){
                $data = array_merge($basedata, array(
                    'block_pathname'         => $opt['block_pathname'],
                    'block_code_value'       => Areacode::where('block_pathname',$opt['block_pathname'])->first()->block_code_value,
                  )
                );

                $_selected_area_code_list = array();
                foreach(Areacode::select('area_code')->where('block_pathname',$opt['block_pathname'])->get() as $v){
                    array_push($_selected_area_code_list, $v->area_code);
                }
                $data['selected_area_code_list'] = $_selected_area_code_list;

            }else{
                $data = $basedata;
            }
        }else if($type == 'service'){
            if(isset($opt['service_id']))
            {
                $data = array_merge($basedata, array(
                    'service_id'             => $opt['service_id'],
                    'service_jp_name'        => DB::table('services')->where('service_id',$opt['service_id'])->first()->service_jp_name,
                  )
                );
            }else{
                $data = $basedata;
            }
        }else if($type == 'custom'){
            if(isset($opt['selected_job_code_list']) && count($opt['selected_job_code_list']) > 0)
            {
                $data = array_merge($basedata,array(
                    'selected_job_code_list' => $opt['selected_job_code_list'],
                  )
                );
            }
            if(isset($opt['selected_area_code_list']) && count($opt['selected_area_code_list']) > 0)
            {
                $data = array_merge($basedata,array(
                    'selected_area_code_list' => $opt['selected_area_code_list'],
                  )
                );
            }
            if(count($opt['selected_job_code_list']) == 0 && count($opt['selected_area_code_list']) == 0)
            {
                $data = $basedata;
            }
        }

        return $data;
    }
}
