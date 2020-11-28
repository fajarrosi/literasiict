<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
// untuk menyimpan jumlah responden yang memilih dari setiap jawaban
class Jawabanresp extends Model
{
    public static function lvl0($kategori){
    	$data = DB::table('survey_resp as sr')
                ->join('pertanyaan as p','p.id','=','sr.pert_id')
                ->join('kategori as k','k.id','=','p.ktg_id')
                ->select(DB::raw('sr.pert_id as pert'),DB::raw('count(sr.jwbn_id) as total'))
                ->where('k.id',$kategori->id)
                ->where('sr.jwbn_id',1)
                ->groupBy('sr.pert_id')
                ->get();
        return $data;
    }
    public static function lvl1($kategori){
    	$data = DB::table('survey_resp as sr')
                ->join('pertanyaan as p','p.id','=','sr.pert_id')
                ->join('kategori as k','k.id','=','p.ktg_id')
                ->select(DB::raw('sr.pert_id as pert'),DB::raw('count(sr.jwbn_id) as total'))
                ->where('k.id',$kategori->id)
                ->where('sr.jwbn_id',2)
                ->groupBy('sr.pert_id')
                ->get();
                return $data;
    }

    public static function lvl2($kategori){
    	$data = DB::table('survey_resp as sr')
                ->join('pertanyaan as p','p.id','=','sr.pert_id')
                ->join('kategori as k','k.id','=','p.ktg_id')
                ->select(DB::raw('sr.pert_id as pert'),DB::raw('count(sr.jwbn_id) as total'))
                ->where('k.id',$kategori->id)
                ->where('sr.jwbn_id',3)
                ->groupBy('sr.pert_id')
                ->get();
                return $data;
    }
    public static function lvl3($kategori){
    	$data = DB::table('survey_resp as sr')
                ->join('pertanyaan as p','p.id','=','sr.pert_id')
                ->join('kategori as k','k.id','=','p.ktg_id')
                ->select(DB::raw('sr.pert_id as pert'),DB::raw('count(sr.jwbn_id) as total'))
                ->where('k.id',$kategori->id)
                ->where('sr.jwbn_id',4)
                ->groupBy('sr.pert_id')
                ->get();
                return $data;
    }
    public static function lvl4($kategori){
    	$data = DB::table('survey_resp as sr')
                ->join('pertanyaan as p','p.id','=','sr.pert_id')
                ->join('kategori as k','k.id','=','p.ktg_id')
                ->select(DB::raw('sr.pert_id as pert'),DB::raw('count(sr.jwbn_id) as total'))
                ->where('k.id',$kategori->id)
                ->where('sr.jwbn_id',5)
                ->groupBy('sr.pert_id')
                ->get();
                return $data;
    }
}
