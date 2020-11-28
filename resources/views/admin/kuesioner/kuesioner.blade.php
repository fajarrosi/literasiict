@extends('admin.kuesioner.index')
@section('title')
<title>Dashboard | Kuesioner</title>
@endsection
@section('kuesioner')
<div class="row" style="margin-top: 30px;">
  <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 newbox" data-aos="fade-up" data-aos-delay="100">
    <button onclick="location.href='{{route('kuesioner.create')}}'">Tambah Kuesioner</button>
    <button onclick="location.href='/survey'">Lihat Survey</button>
    @foreach($kategori as $ktg)
    <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-10">
            <h1>Kuesioner {{$ktg->kategori}}</h1>
            <h6>Tujuannya adalah untuk {{$ktg->tujuan}}</h6>
          </div>
          <div class="col-lg-2">
            <button onclick="location.href='{{route('kuesioner.show',$ktg->id)}}'">Lihat Detail</button>
          </div>
        </div>
        
          <ul class="list-group" style="margin-top: 10px;">
              <li class="list-group-item d-flex justify-content-between">
                  <div> Level 0</div>
                  @if($lv0->count())
                    @for($i=0;$i<=count($lv0)-1;$i++)
                      @if($lv0[$i]->ktg_id == $ktg->id)
                         <div>{{$lv0[$i]->total}} Responden |  {{intval(($lv0[$i]->total)*100/($resp[$i]->total))}} %</div>
                      @endif
                    @endfor
                  @endif
              </li>
              <li class="list-group-item d-flex justify-content-between">
                  <div> Level 1</div>
                   @if($lv1->count())
                    @for($i=0;$i<=count($lv1)-1;$i++)
                      @if($lv1[$i]->ktg_id == $ktg->id)
                         <div>{{$lv1[$i]->total}} Responden |  {{intval(($lv1[$i]->total)*100/($resp[$i]->total))}} %</div>
                      @endif
                    @endfor
                  @endif
              </li>
              <li class="list-group-item d-flex justify-content-between">
                  <div> Level 2</div>
                  @if($lv2->count())
                    @for($i=0;$i<=count($lv2)-1;$i++)
                      @if($lv2[$i]->ktg_id == $ktg->id)
                         <div>{{$lv2[$i]->total}} Responden |  {{intval(($lv2[$i]->total)*100/($resp[$i]->total))}} %</div>
                      @endif
                    @endfor
                  @endif
              </li>
              <li class="list-group-item d-flex justify-content-between">
                  <div> Level 3</div>
                  @if($lv3->count())
                    @for($i=0;$i<=count($lv3)-1;$i++)
                      @if($lv3[$i]->ktg_id == $ktg->id)
                         <div>{{$lv3[$i]->total}} Responden |  {{intval(($lv3[$i]->total)*100/($resp[$i]->total))}} %</div>
                      @endif
                    @endfor
                  @endif
              </li>
              <li class="list-group-item d-flex justify-content-between">
                  <div> Level 4</div>
                  @if($lv4->count())
                    @for($i=0;$i<=count($lv4)-1;$i++)
                      @if($lv4[$i]->ktg_id == $ktg->id)
                         <div>{{$lv4[$i]->total}} Responden |  {{intval(($lv4[$i]->total)*100/($resp[$i]->total))}} %</div>
                      @endif
                    @endfor
                  @endif
              </li>
          </ul>
      </div>
    </div>
    @endforeach



    
  </div>
</div>

@endsection