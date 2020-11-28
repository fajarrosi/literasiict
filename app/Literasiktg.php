<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
// untuk menyimpan dan menghitung literasi per kategori setiap responden yang survey
class Literasiktg extends Model
{
    protected $table = "literasi_ktg";
    protected $fillable = ['resp_id','ktg_id','level'];

    public static function simpan($survresp)
    {
    	$data1 = DB::table('survey_resp as sr')
            ->join('pertanyaan as p','p.id','=','sr.pert_id')
            ->join('kategori as k','k.id','=','p.ktg_id')
            ->select(DB::raw('k.id as kategori'),DB::raw('round(avg(sr.jwbn_id)) as rata'))
            ->where('sr.resp_id',$survresp->resp_id)
            ->groupBy('k.id')
            ->get();
        for ($i=0; $i <=count($data1)-1 ; $i++) { 
        	 $result = self::create([
        		'resp_id' => $survresp->resp_id,
        		'ktg_id' =>$data1[$i]->kategori,
        		'level' => $data1[$i]->rata
        	]);
        }
        return $result;
    }
    public static function lvl0($kategori)
    {
        $data = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',1)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        return $data;
    }
    public static function lvl1($kategori)
    {
        $data = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',2)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')

                    ->get();
        return $data;
    }
        public static function lvl2($kategori)
    {
        $data = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',3)
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    
                    ->get();
        return $data;
    }
        public static function lvl3($kategori)
    {
        $data = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',4)
                    ->groupBy('ktg_id')
                    ->get();
        return $data;
    }
        public static function lvl4($kategori)
    {
        $data = DB::table('literasi_ktg')
                    ->select(DB::raw('count(level) as total'),'ktg_id')
                    ->where('level',5)
                    ->orderBy('ktg_id')
                    ->groupBy('ktg_id')
                    ->get();
        return $data;
    }

    public static function resp($kategori){
        $data = DB::table('literasi_ktg')
                    ->select(DB::raw('count(resp_id) as total'),'ktg_id')
                    ->groupBy('ktg_id')
                    ->orderBy('ktg_id')
                    ->get();
        return $data;
    }
}
