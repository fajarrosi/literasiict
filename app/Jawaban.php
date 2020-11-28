<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawaban";
    protected $fillable = ['display','level'];

    public function pertanyaan()
    {
        return $this->belongsToMany(Pertanyaan::class,'prtnyaan_jwb','pert_id','jwbn_id');
    }
    
    public static function survey(){
        $data = self::all();
        return $data;
    }

    public function responses(){
        return $this->hasMany(Surveyresp::class,'jwbn_id');
    }
}
