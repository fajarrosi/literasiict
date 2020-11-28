@extends('admin.kuesioner.index')
@section('title')
<title>Detail Kuesioner {{$kategori->kategori}}</title>
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
        <h2 class="text-center">Detail Kuesioner {{$kategori->kategori}}</h2>
        <button onclick="location.href='{{route('pertanyaan.create',$kategori)}}'">Tambah Pertanyaan Kuesioner</button>
      </div>
    </div>
     <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="text-center">Daftar Pertanyaan</h5>
      </div>
    </div>
    @if ($kategori->pertanyaan->isEmpty())
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="text-center">Belum Ada Pertanyaan</h5>
      </div>
    </div>
    @else
       @foreach ($kategori->pertanyaan as $pert)
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <div class="row justify-content-between" style="border:1px solid rgba(0,0,0,.125);margin-left: 0px;margin-right: 0px;padding:15px;">
          <div class="col-lg-8 col-md-6">
            <h5 style="text-align:justify">{{$pert->pertanyaan}}</h5>
          </div>
          <div class="col-lg-4 col-md-4 my-auto" style="text-align: right;">
            <button class="edit" id="{{$pert->id}}" data-ktg="{{$kategori->id}}"><i class="icofont-edit"></i>Edit</button>
            <button style="margin-top: 10px" class="hapus" id="{{$pert->id}}" data-ktg="{{$kategori->id}}"><i class="icofont-trash"></i>Hapus</button>
            
          </div>
        </div>            
          <ul class="list-group" style="margin-top: 10px;">
            @foreach($pert->jawaban as $jawaban)
              <li class="list-group-item d-flex justify-content-between">
                  <div> {{$jawaban->display}}</div>
                  <!-- Lv 0 -->
                  @if($jawaban->id == 1)
                     @if($lv0->count())
                      @for($i=0;$i<=count($lv0)-1;$i++)
                        @if($lv0[$i]->pert == $pert->id)
                        <div>{{$lv0[$i]->total}} Responden| {{intval(($lv0[$i]->total)*100/($pert->responses->count()))}} %</div>
                        @endif
                      @endfor
                     
                    @endif
                  <!-- Lv 1 -->
                  @elseif($jawaban->id == 2)
                   @if($lv1->count())
                      @for($i=0;$i<=count($lv1)-1;$i++)
                        @if($lv1[$i]->pert == $pert->id)
                        <div>{{$lv1[$i]->total}} Responden| {{intval(($lv1[$i]->total)*100/($pert->responses->count()))}} %</div>
                        @endif
                      @endfor
                    
                    @endif
                  <!-- Lv 2 -->
                  @elseif($jawaban->id == 3)
                     @if($lv2->count())
                      @for($i=0;$i<=count($lv2)-1;$i++)
                        @if($lv2[$i]->pert == $pert->id)
                        <div>{{$lv2[$i]->total}} Responden| {{intval(($lv2[$i]->total)*100/($pert->responses->count()))}} %</div>
                        @endif
                      @endfor
                    
                    @endif
                  <!-- Lv 3 -->
                  @elseif($jawaban->id == 4)
                     @if($lv3->count())
                        @for($i=0;$i<=count($lv3)-1;$i++)
                          @if($lv3[$i]->pert == $pert->id)
                          <div>{{$lv3[$i]->total}} Responden| {{intval(($lv3[$i]->total)*100/($pert->responses->count()))}} %</div>
                          @endif
                        @endfor
                      
                      @endif
                  <!-- Lv 4 -->
                  @elseif($jawaban->id == 5)
                    @if($lv4->count())
                      @for($i=0;$i<=count($lv4)-1;$i++)
                        @if($lv4[$i]->pert == $pert->id)
                        <div>{{$lv4[$i]->total}} Responden| {{intval(($lv4[$i]->total)*100/($pert->responses->count()))}} %</div>
                        @endif
                      @endfor
                   
                    @endif
                  @endif
              </li>
            @endforeach
          </ul>
      </div>
    </div>
    @endforeach
    @endif
         
    
  </div>
</div>
@include ('admin.delete')
@include ('admin.edit')
@endsection

@push('scripts')
<script>
  $(function () {
    // HAPUS DATA
    var id=0;
    var ktg = 0;
    $(document).on('click','.hapus',function(){
      $('#confirmModal').appendTo("body").modal('show');
      id = $(this).attr('id');
      ktg = $(this).attr('data-ktg');
      $('#iddel').val(id);
      $('#idurl').val(ktg);
      $('#ok_button').text('OK');
    });

    $('#deleted').on('submit',function(e){
      e.preventDefault();
      ktg = $('#idurl').val();
      id = $('#iddel').val();
     $(this).attr('action','/kuesioner/'+ktg+'/pertanyaan/'+id);
      e.currentTarget.submit();
    });
    // HAPUS DATA
    // EDIT DATA
    $(document).on('click','.edit',function(){
      $('#editModal').appendTo("body").modal('show');
      id = $(this).attr('id');
      ktg = $(this).attr('data-ktg');
      $('#newform').empty();
      $('#mtitle').text("");
      $.ajax({
        url:"/pertanyaan/"+id+"/edit",
        method:"GET",
        success:function(data)
        {
          if(data.length == 0){

          }else{
            frm = '<div class="form-group"><label class="control-label col-md-4" >Pertanyaan : </label><div class="col-md-8"><input type="text" name="pert" id="name" value="'+data.pertanyaan+'" class="form-control" /></div></div>';
             $('#mtitle').text("Edit Pertanyaan");
              $('#newform').append(frm);
             
          }
        }
      });

    });

    $('#add').on('submit',function(event){
      event.preventDefault();
      $('#hidden_id').val(id);
      $('#ktg_id').val(ktg);
      $(this).attr('action','/pertanyaan/update');
      event.currentTarget.submit();

    });
    // EDIT DATA



  });//end document ready

</script>
@endpush