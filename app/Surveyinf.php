<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Surveyinf extends Model
{
    protected $table = "survey_inform";
    protected $fillable = ['nama','jns_kel','umur','ltr_pend','pendptn','lokasi','jns_inds'];

    public static function simpan($request)
    {
    	$data = self::create($request->survey);
    	return $data;
    }

    public static function literasifnl($resp){
    	$fnl = DB::table('literasi_fnl as lf')
    		   ->join('jawaban as j','j.level','=','lf.level')
    		   ->select(DB::raw('j.display as display'),'lf.level')
    		   ->where('lf.resp_id',$resp)
    		   ->get();
    	return $fnl;
    }
    public static function literasiktg($resp){
    	$ktg = DB::table('literasi_ktg as lg')
                ->join('jawaban as j','j.level','=','lg.level')
                ->join('kategori as k','k.id','=','lg.ktg_id')
               ->select(DB::raw('j.display as display'),'lg.level','k.kategori')
               ->where('lg.resp_id',$resp)
               ->get();
        return $ktg;
    }

    public static function lok(){
        $data = DB::table('survey_inform')
                ->select('lokasi')
                ->groupBy('lokasi')
                ->get();
        return $data;
    }
    public static function pend(){
        $data = DB::table('survey_inform')
                ->select('pendptn')
                ->groupBy('pendptn')
                ->get();
        return $data;
    }

    public static function jns(){
        $data = DB::table('survey_inform')
                ->select('jns_inds')
                ->groupBy('jns_inds')
                ->get();
        return $data;
    }

    public static function ltr(){
        $data = DB::table('survey_inform')
                ->select('ltr_pend')
                ->groupBy('ltr_pend')
                ->get();
        return $data;
    }
    public static function umur(){
        $data = DB::table('survey_inform')
                ->select('umur')
                ->groupBy('umur')
                ->get();
        return $data;
    }
     public static function kel(){
        $data = DB::table('survey_inform')
                ->select('jns_kel')
                ->groupBy('jns_kel')
                ->get();
        return $data;
    }
}
