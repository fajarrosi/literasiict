@extends('admin.kuesioner.index')
@section('title')
<title>Detail Kuesioner {{$nama}}</title>
@endsection
@push('css')
<style type="text/css">
  .cl {
      position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.75rem 1.25rem;
  color: inherit;
  }
</style>
@endpush
@section('kuesioner')
<div class="row" style="margin-top: 30px;">
  <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 newbox" data-aos="fade-up" data-aos-delay="100">
    <button onclick="location.href='{{route('dashboard')}}'">Kembali</button>
    @if(session('status'))
    <div class="alert alert-success alert-dismissible" style="margin-top: 10px;">
      <button type="button" class="cl" data-dismiss="alert" >×</button>
      <h4><i class="icofont-check-circled"></i> Sukses!</h4>
      {{session('status')}}
    </div>
    @endif
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <h2 class="text-center">Detail Kuesioner {{$nama}}</h2>
        <button>Tambah Pertanyaan Kuesioner</button>
      </div>
    </div>
     <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="text-center">Daftar Pertanyaan</h5>
      </div>
    </div>

       @foreach ($pert as $key => $pert)
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <div class="row justify-content-between" style="border:1px solid rgba(0,0,0,.125);margin-left: 0px;margin-right: 0px;padding:15px;">
          <div class="col-lg-8 col-md-6">
            <h5>{{$pert->pertanyaan}}</h5>
          </div>
          <div class="col-lg-4 col-md-4 my-auto" style="text-align: right;">
            <button class="edit"><i class="icofont-edit"></i>Edit</button>
            <button style="margin-top: 10px" ><i class="icofont-trash"></i>Hapus</button>
            
          </div>
        </div>            
          <ul class="list-group" style="margin-top: 10px;">
            @foreach($jwbn as $key => $jw)
            @if($jw->pert_id == $pert->id)
              <li class="list-group-item d-flex justify-content-between">
                  <div> {{$jw->display}}</div>
                  <div> test </div>
              </li>
            @endif
            @endforeach
          </ul>
      </div>
    </div>
    @endforeach
         
    
  </div>
</div>
@endsection
@include ('admin.delete')
@include ('admin.edit')

