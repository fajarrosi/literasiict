@extends('admin.kuesioner.index')
@section('title')
<title>Tambah Pertanyaan Kuesioner</title>
@endsection
@section('kuesioner')
<div class="row" style="margin-top: 30px;">
  <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 newbox" data-aos="fade-up" data-aos-delay="100">
    <button onclick="location.href='{{route('kuesioner.show',$kategori)}}'">Kembali</button>
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <h2 class="text-center">Tambah Pertanyaan Kuesioner {{$kategori->kategori}}</h2>
        <h6>Skala yang akan digunakan dalam penelitian ini ada 5, yaitu </h6>
        <ul>
            <li>level 0 -> Sangat Tidak Baik</li>
            <li>level 1 -> Tidak Baik</li>
            <li>level 2 -> Kurang Baik</li>
            <li>level 3 ->  Baik</li>
            <li>level 4 -> Sangat Baik</li>
        </ul>
        <h6>Sehingga Pengguna Hanya tinggal menambahkan Pertanyaan saja</h6>
        <form method="POST" action="{{ route('pertanyaan.store',$kategori) }}">
            @csrf

            <div class="form-group row">
                 <table class="table table-borderless" id="dynamic_field">  
                    <tr>  
                        <td class="text-md-right"><label for="judul">Pertanyaan</label></td>
                        <td><input type="text" name="name[]" placeholder="Masukkan Pertanyaan Kuesioner" class="form-control name_list" /></td>  
                        <td><button type="button" name="add" id="add">Tambah Pertanyaan</button></td>  
                    </tr>  
                </table>
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

@push('scripts')
<script>
    $(function () {
          var i=1; 
         $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td class="text-md-right"><label for="judul">Pertanyaan</label></td><td><input type="text" name="name[]" placeholder="Masukkan Pertanyaan Kuesioner" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class=" btn_remove">Hapus Pertanyaan</button></td></tr>');  
        });  
           $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 
    });
</script>
@endpush