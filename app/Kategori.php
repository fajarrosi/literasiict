<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ['kategori','tujuan','user_id'];

    public static function semua($user){
        $data = DB::table('kategori')
                ->select('id','kategori','tujuan')
                ->where('user_id',$user->id)
                ->get();
        return $data;
    }

    public static function simpan($request,$user)
    {
    	$data = self::create([
    		'kategori'=> $request->judul,
    		'tujuan' => $request->tujuan,
    		'user_id' => $user]);
    	return $data;
    }

    public function pertanyaan(){
        return $this->hasMany(Pertanyaan::class,'ktg_id');
    }

    public static function survey(){
        $data = self::all();
        return $data;
    }

}
