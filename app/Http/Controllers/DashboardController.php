<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kategori;
use App\Literasiktg;

class DashboardController extends Controller
{
    public function index()
    {
    	if(Auth::user()->role_id =='1'){
    		$user = Auth::user();
    		$kategori = Kategori::semua($user);
            $lv0 = Literasiktg::lvl0($kategori);
            $lv1 = Literasiktg::lvl1($kategori);
            $lv2 = Literasiktg::lvl2($kategori);
            $lv3 = Literasiktg::lvl3($kategori);
            $lv4 = Literasiktg::lvl4($kategori);
            $resp = Literasiktg::resp($kategori);
            // dd($resp,$lv0,$lv1,$lv2,$lv3,$lv4);
    		return view('admin.kuesioner.kuesioner',compact('kategori','lv0','lv1','lv2','lv3','lv4','resp'));
    	}else{
    		return view('student.dashboard');
    	}
    }
}
