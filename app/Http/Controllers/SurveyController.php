<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Surveyinf;
use App\Surveyresp;
use App\Literasiktg;
use App\Literasifnl;
use DB;

class SurveyController extends Controller
{
    public function show()
    {
    	$kategori = Kategori::survey();
    	return view('admin.survey.show',compact('kategori'));
    }

    public function store(Request $request)
    {
    	// Menyimpan Informasi Responden di table survey_information
    	$resp = Surveyinf::simpan($request);
    	// Menyimpan jawaban responden di table survey_resp
        $survresp = Surveyresp::simpan($resp,$request);
        // Menampilkan terima kasih , Menghitung tingkat literasi responden, dan rekomendasi pelatihan
        // Menghitung literasi perkategori
        $literasiktg = Literasiktg::simpan($survresp);
        // Menghitung literasi secara keseluruhan
        $literasifnl = Literasifnl::simpan($literasiktg);
        // Menampilkan rekomendasi pelatihan dari responden yang ngisi kuesioner
        return redirect()->route('survey.show',$resp->id);
        // dd($fnl[0]);
    }

    public function sukses($id)
    {
        $fnl = Surveyinf::literasifnl($id);
        $ktg = Surveyinf::literasiktg($id);
        return view('admin.survey.feedback',compact('fnl','ktg'));
    }
}
