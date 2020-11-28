@extends('admin.kuesioner.index')
@section('title')
<title>Tambah Kuesioner</title>
@endsection
@section('kuesioner')
<div class="row" style="margin-top: 30px;">
  <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 newbox" data-aos="fade-up" data-aos-delay="100">
    <button onclick="location.href='{{route('dashboard')}}'">Kembali</button>
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <h2 class="text-center">Tambah Kuesioner</h2>
        <form method="POST" action="{{ route('kuesioner.store') }}">
            @csrf

            <div class="form-group row">
                <label for="judul" class="col-md-4 col-form-label text-md-right">Judul Kuesioner</label>

                <div class="col-md-6">
                    <input id="judul" class="form-control" name="judul" required  autofocus placeholder="Masukkan Judul Kuesioner">
                </div>
            </div>

            <div class="form-group row">
                <label for="tujuan" class="col-md-4 col-form-label text-md-right">Tujuan</label>

                <div class="col-md-6">
                    <input id="tujuan" class="form-control" name="tujuan" required placeholder="Masukkan Tujuan">
                </div>
            </div>

            

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit">
                        Simpan
                    </button>
                    
                </div>
            </div>
        </form>
    </div>
</div>



</div>
</div>
@endsection