<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resultlit;
use App\Kategori;
use App\Surveyinf;

class ResultlitController extends Controller
{
    public function index()
    {
    	$litict = Resultlit::litict();
    	$litktg = Resultlit::litktg();
    	$ktg = Kategori::survey();
    	$lok = Surveyinf::lok();
    	$pend = Surveyinf::pend();
    	$jns = Surveyinf::jns();
    	$ltr = Surveyinf::ltr();
    	$um = Surveyinf::umur();
    	$kel = Surveyinf::kel();
    	return view('result.index',compact('litict','ktg','litktg','lok','pend','jns','ltr','um','kel'));
    }

    public function litict()
    {
    	$data = Resultlit::newlit();
    	return $data;
    }
    public function litktg($id)
    {
    	if(request()->ajax())
        {
	    	$data = Resultlit::ktg($id);
	    	return $data;
    	}
    }

    public function litlok($id){
    	if(request()->ajax())
        {
	    	$data = Resultlit::lok($id);
	    	return $data;
    	}

    }
    public function litpend($id){
    	if(request()->ajax())
        {
	    	$data = Resultlit::pend($id);
	    	return $data;
    	}
    }
      public function litjns($id){
    	if(request()->ajax())
        {
	    	$data = Resultlit::jns($id);
	    	return $data;
    	}
    }
    public function litltr($id){
    	if(request()->ajax())
        {
	    	$data = Resultlit::ltr($id);
	    	return $data;
    	}
    }
    public function litum($id){
    	if(request()->ajax())
        {
	    	$data = Resultlit::umur($id);
	    	return $data;
    	}
    }
    public function litkel($id){
    	if(request()->ajax())
        {
	    	$data = Resultlit::kel($id);
	    	return $data;
    	}
    }

}
