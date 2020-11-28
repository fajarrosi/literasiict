<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Resultlit extends Model
{
 public static function litict(){
    $data = array();
    	$lv0 = DB::table('literasi_fnl as sr')
                ->select('sr.level',DB::raw('count(sr.resp_id) as total'))
                ->where('sr.level',1)
                ->groupBy('sr.level')
                ->get();
        $lv1 = DB::table('literasi_fnl as sr')
                ->select('sr.level',DB::raw('count(sr.resp_id) as total'))
                ->where('sr.level',2)
                ->groupBy('sr.level')
                ->get();
        $lv2 = DB::table('literasi_fnl as sr')
                ->select('sr.level',DB::raw('count(sr.resp_id) as total'))
                ->where('sr.level',3)
                ->groupBy('sr.level')
                ->get();

        $lv3 = DB::table('literasi_fnl as sr')
                ->select('sr.level',DB::raw('count(sr.resp_id) as total'))
                ->where('sr.level',4)
                ->groupBy('sr.level')
                ->get();
        $lv4 = DB::table('literasi_fnl as sr')
                ->select('sr.level',DB::raw('count(sr.resp_id) as total'))
                ->where('sr.level',5)
                ->groupBy('sr.level')
                ->get();
        $resp = DB::table('literasi_fnl as sr')
                ->select(DB::raw('count(sr.resp_id) as total'))
                ->get();
        array_push($data,$lv0);
        array_push($data,$lv1);
        array_push($data,$lv2);
        array_push($data,$lv3);
        array_push($data,$lv4);
        array_push($data,$resp);
        return $data;
    }
    public static function litktg(){
        $data = array();
         $lv0 = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',1)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        $lv1 = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',2)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        $lv2 = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',3)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        $lv3 = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',4)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        $lv4 = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',5)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        $resp = DB::table('literasi_ktg')
                    ->select(DB::raw('count(resp_id) as total'),'ktg_id')
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
    	  array_push($data,$lv0);
        array_push($data,$lv1);
        array_push($data,$lv2);
        array_push($data,$lv3);
        array_push($data,$lv4);
        array_push($data,$resp);
        return $data;
    }

    public static function newlit(){
        $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->where('sr.level',1)
                ->value(DB::raw('count(sr.resp_id) as total'));
        $lv1 = DB::table('literasi_fnl as sr')
                ->where('sr.level',2)
                ->value(DB::raw('count(sr.resp_id) as total'));
        $lv2 = DB::table('literasi_fnl as sr')
                ->where('sr.level',3)
                ->value(DB::raw('count(sr.resp_id) as total'));
        $lv3 = DB::table('literasi_fnl as sr')
                ->where('sr.level',4)
                ->value(DB::raw('count(sr.resp_id) as total'));
        $lv4 = DB::table('literasi_fnl as sr')
                ->where('sr.level',5)
                ->value(DB::raw('count(sr.resp_id) as total'));
        array_push($data,$lv0);
        array_push($data,$lv1);
        array_push($data,$lv2);
        array_push($data,$lv3);
        array_push($data,$lv4);

        return $data;
    }

    public static function ktg($id){
        $data = [];
        $lv0 = DB::table('literasi_ktg')
                    ->where('level',1)
                    ->where('ktg_id',$id)
                    ->value(DB::raw('count(level) as total'));
        $lv1 = DB::table('literasi_ktg')
                    ->where('level',2)
                    ->where('ktg_id',$id)
                    ->value(DB::raw('count(level) as total'));
        $lv2 = DB::table('literasi_ktg')
                    ->where('level',3)
                    ->where('ktg_id',$id)
                    ->value(DB::raw('count(level) as total'));
        $lv3 = DB::table('literasi_ktg')
                    ->where('level',4)
                    ->where('ktg_id',$id)
                    ->value(DB::raw('count(level) as total'));
        $lv4 = DB::table('literasi_ktg')
                    ->where('level',5)
                    ->where('ktg_id',$id)
                    ->value(DB::raw('count(level) as total'));
        array_push($data,$lv0);
        array_push($data,$lv1);
        array_push($data,$lv2);
        array_push($data,$lv3);
        array_push($data,$lv4);
        return $data;
    }
    public static function lok($id){
        $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',1)
                ->where('si.lokasi',$id)
                ->groupBy('si.lokasi')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv0)){
         array_push($data,$lv0);
        }else{
         array_push($data,0);
        }
        $lv1 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',2)
                ->where('si.lokasi',$id)
                ->groupBy('si.lokasi')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv1)){
         array_push($data,$lv1);
        }else{
         array_push($data,0);
        }
        $lv2 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',3)
                ->where('si.lokasi',$id)
                ->groupBy('si.lokasi')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv2)){
         array_push($data,$lv2);
        }else{
         array_push($data,0);
        }
        $lv3 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',4)
                ->where('si.lokasi',$id)
                ->groupBy('si.lokasi')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv3)){
         array_push($data,$lv3);
        }else{
         array_push($data,0);
        }
        $lv4 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',5)
                ->where('si.lokasi',$id)
                ->groupBy('si.lokasi')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv4)){
         array_push($data,$lv4);
        }else{
         array_push($data,0);
        }
        return $data;
    }

    public static function pend($id){
         $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',1)
                ->where('si.pendptn',$id)
                ->groupBy('si.pendptn')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv0)){
         array_push($data,$lv0);
        }else{
         array_push($data,0);
        }
        $lv1 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',2)
                ->where('si.pendptn',$id)
                ->groupBy('si.pendptn')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv1)){
         array_push($data,$lv1);
        }else{
         array_push($data,0);
        }
        $lv2 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',3)
                ->where('si.pendptn',$id)
                ->groupBy('si.pendptn')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv2)){
         array_push($data,$lv2);
        }else{
         array_push($data,0);
        }
        $lv3 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',4)
                ->where('si.pendptn',$id)
                ->groupBy('si.pendptn')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv3)){
         array_push($data,$lv3);
        }else{
         array_push($data,0);
        }
        $lv4 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',5)
                ->where('si.pendptn',$id)
                ->groupBy('si.pendptn')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv4)){
         array_push($data,$lv4);
        }else{
         array_push($data,0);
        }
        return $data;
    }

    public static function jns($id){
                 $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',1)
                ->where('si.jns_inds',$id)
                ->groupBy('si.jns_inds')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv0)){
         array_push($data,$lv0);
        }else{
         array_push($data,0);
        }
        $lv1 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',2)
                ->where('si.jns_inds',$id)
                ->groupBy('si.jns_inds')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv1)){
         array_push($data,$lv1);
        }else{
         array_push($data,0);
        }
        $lv2 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',3)
                ->where('si.jns_inds',$id)
                ->groupBy('si.jns_inds')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv2)){
         array_push($data,$lv2);
        }else{
         array_push($data,0);
        }
        $lv3 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',4)
                ->where('si.jns_inds',$id)
                ->groupBy('si.jns_inds')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv3)){
         array_push($data,$lv3);
        }else{
         array_push($data,0);
        }
        $lv4 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',5)
                ->where('si.jns_inds',$id)
                ->groupBy('si.jns_inds')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv4)){
         array_push($data,$lv4);
        }else{
         array_push($data,0);
        }
        return $data;
    }

    public static function ltr($id){
                 $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',1)
                ->where('si.ltr_pend',$id)
                ->groupBy('si.ltr_pend')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv0)){
         array_push($data,$lv0);
        }else{
         array_push($data,0);
        }
        $lv1 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',2)
                ->where('si.ltr_pend',$id)
                ->groupBy('si.ltr_pend')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv1)){
         array_push($data,$lv1);
        }else{
         array_push($data,0);
        }
        $lv2 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',3)
                ->where('si.ltr_pend',$id)
                ->groupBy('si.ltr_pend')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv2)){
         array_push($data,$lv2);
        }else{
         array_push($data,0);
        }
        $lv3 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',4)
                ->where('si.ltr_pend',$id)
                ->groupBy('si.ltr_pend')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv3)){
         array_push($data,$lv3);
        }else{
         array_push($data,0);
        }
        $lv4 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',5)
                ->where('si.ltr_pend',$id)
                ->groupBy('si.ltr_pend')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv4)){
         array_push($data,$lv4);
        }else{
         array_push($data,0);
        }
        return $data;
    }

    public static function umur($id){
                        $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',1)
                ->where('si.umur',$id)
                ->groupBy('si.umur')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv0)){
         array_push($data,$lv0);
        }else{
         array_push($data,0);
        }
        $lv1 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',2)
                ->where('si.umur',$id)
                ->groupBy('si.umur')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv1)){
         array_push($data,$lv1);
        }else{
         array_push($data,0);
        }
        $lv2 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',3)
                ->where('si.umur',$id)
                ->groupBy('si.umur')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv2)){
         array_push($data,$lv2);
        }else{
         array_push($data,0);
        }
        $lv3 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',4)
                ->where('si.umur',$id)
                ->groupBy('si.umur')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv3)){
         array_push($data,$lv3);
        }else{
         array_push($data,0);
        }
        $lv4 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',5)
                ->where('si.umur',$id)
                ->groupBy('si.umur')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv4)){
         array_push($data,$lv4);
        }else{
         array_push($data,0);
        }
        return $data;
    }

    public static function kel($id){
                                $data = [];
        $lv0 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',1)
                ->where('si.jns_kel',$id)
                ->groupBy('si.jns_kel')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv0)){
         array_push($data,$lv0);
        }else{
         array_push($data,0);
        }
        $lv1 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',2)
                ->where('si.jns_kel',$id)
                ->groupBy('si.jns_kel')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv1)){
         array_push($data,$lv1);
        }else{
         array_push($data,0);
        }
        $lv2 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',3)
                ->where('si.jns_kel',$id)
                ->groupBy('si.jns_kel')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv2)){
         array_push($data,$lv2);
        }else{
         array_push($data,0);
        }
        $lv3 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',4)
                ->where('si.jns_kel',$id)
                ->groupBy('si.jns_kel')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv3)){
         array_push($data,$lv3);
        }else{
         array_push($data,0);
        }
        $lv4 = DB::table('literasi_fnl as sr')
                ->join('survey_inform as si','si.id','=','sr.resp_id')
                ->where('sr.level',5)
                ->where('si.jns_kel',$id)
                ->groupBy('si.jns_kel')
                ->value(DB::raw('count(sr.resp_id) as total'));
        if(isset($lv4)){
         array_push($data,$lv4);
        }else{
         array_push($data,0);
        }
        return $data;
    }

}
