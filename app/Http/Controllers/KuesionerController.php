<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Auth;
use App\Surveyresp;
use App\Pertanyaan;
use App\Jawabanresp;
use DB;

class KuesionerController extends Controller
{
    public function create()
    {
    	return view('admin.kuesioner.tambah.create');
    }
    public function store(Request $request)
    {
    	// dd($request);
    	$data = Kategori::simpan($request,Auth::user()->id);
    	 return redirect()->route('kuesioner.show',$data);
    }

   	public function show(Kategori $kategori)
   	{
      $kategori->load('pertanyaan.jawaban.responses');
      $lv0 = Jawabanresp::lvl0($kategori);
      $lv1 = Jawabanresp::lvl1($kategori);
      $lv2 = Jawabanresp::lvl2($kategori);
      $lv3 = Jawabanresp::lvl3($kategori);
      $lv4 = Jawabanresp::lvl4($kategori);

      // dd($kategori,$lv0,$lv1,$lv2,$lv3,$lv4);

     //  // nama kategori 
     //  $nama = Kategori::where('id',$kategori->id)->pluck('kategori');
     //  // daftar pertanyaan
      // $pert = Pertanyaan::detailk($kategori);
     //  // daftar jawaban dari pertanyaan
     //  $jwbn = Kategori::detailk($kategori);
     //  // count survey berdasarkan dari 5 jawaban 
     //  $surv = Surveyresp::detailk($kategori,$jwbn);
     //      $data = DB::table('survey_resp as sr')
     //            ->join('pertanyaan as p','p.id','=','sr.pert_id')
     //            ->join('kategori as k','k.id','=','p.ktg_id')
     //            ->select(DB::raw('sr.pert_id as pert'),DB::raw('sr.jwbn_id'))
     //            ->where('k.id',$kategori->id)
     //            ->get();
   		// dd($nama,$pert,$jwbn,$surv,$data);


   		return view('admin.kuesioner.detail.detail',compact('kategori','lv0','lv1','lv2','lv3','lv4'));
   	}
}
