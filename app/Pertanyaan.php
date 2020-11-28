<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
use App\Jawaban;
use DB;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $fillable = ['pertanyaan','ktg_id'];

    public function jawaban()
    {
        return $this->belongsToMany(Jawaban::class,'prtnyaan_jwb','pert_id','jwbn_id');
    }

     public function responses(){
        return $this->hasMany(Surveyresp::class,'pert_id');
    }

    public static function simpan($kategori,$pertanyaan)
    {
        $jwbn = Jawaban::survey();
    	for ($i=0; $i <=count($pertanyaan)-1; $i++) { 
    		$data = self::create([
    			'pertanyaan' => $pertanyaan[$i],
    			'ktg_id' =>$kategori
    		]);
            foreach($jwbn as $idj){
                $data->jawaban()->attach($idj->id);
            }
    	}
    	return $data;
    }

    public static function ubah($request){
        $data = self::findOrFail($request->hidden_id);
        $data->update([
            'pertanyaan' =>$request->pert
        ]);
        return $data;
    }
   
}
