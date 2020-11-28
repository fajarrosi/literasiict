<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Surveyresp extends Model
{
    protected $table = "survey_resp";
    protected $fillable = ['resp_id','pert_id','jwbn_id'];

    public static function simpan($resp,$request)
    {
    	$result = [];
    	for ($i=0; $i <=count($request->responses)-1 ; $i++) { 
    		for ($j=0; $j <=count($request->responses[$i])-1 ; $j++) { 
    			array_push($result, $request->responses[$i][$j]);
    		}
    	}
    	for ($x=0; $x <=count($result)-1 ; $x++) { 
    		$data = self::create(
    			['resp_id' => $resp->id,
    			  'pert_id' => $result[$x]['pert_id'],
    			  'jwbn_id' => $result[$x]['jwbn_id']]
    		);
    	}
    	return $data;
    }



}
