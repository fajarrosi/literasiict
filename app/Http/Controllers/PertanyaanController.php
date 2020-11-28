<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Pertanyaan;
class PertanyaanController extends Controller
{
   public function create(Kategori $kategori)
    {
    	return view('admin.pertanyaan.tambah.create',compact('kategori'));
    }

     public function store(Kategori $kategori)
    {
    	$pert = request();
        $data = Pertanyaan::simpan($kategori->id,$pert['name']);
        return redirect()->route('kuesioner.show',$kategori)->withStatus('Pertanyaan berhasil ditambahkan');
    }

    public function delete(Kategori $kategori,Pertanyaan $pertanyaan)
    {
        // dd($kategori->id,$pertanyaan->id);
        $pertanyaan->delete();
        return redirect()->route('kuesioner.show',$kategori)->withStatus('Pertanyaan berhasil dihapuskan');
    }

    public function edit($id)
    {
            $data = Pertanyaan::findOrFail($id);
            return $data;
        
    }

    public function update(Request $request)
    {
        $data = Pertanyaan::ubah($request);
        return redirect()->route('kuesioner.show',$request->ktg_id)->withStatus('Pertanyaan berhasil dirubah');
    }
}
