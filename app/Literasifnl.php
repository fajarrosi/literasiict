<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Literasifnl extends Model
{
    protected $table = "literasi_fnl";
    protected $fillable = ['resp_id','level'];

    public static function simpan($literasiktg)
    {
	  $data1 = DB::table('literasi_ktg')
            ->select('resp_id',DB::raw('round(avg(level)) as level'))
            ->where('resp_id',$literasiktg->resp_id)
            ->groupBy('resp_id')
            ->get();

		 $result = self::create([
			'resp_id' => $data1[0]->resp_id,
			'level' => $data1[0]->level
		]);
        
        return $result;
    }
}
