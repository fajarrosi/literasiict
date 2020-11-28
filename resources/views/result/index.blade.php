@extends('templates.master')
@section('title')
<title>Hasil Literasi ICT</title>
@endsection
@include('templates.nav')

@section('content')
<main id="main">
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact" style="margin-top: 20px;">
  <div class="container" data-aos="fade-up">

    <div class="section-title" style="padding-bottom: 0px;">
      <h2>Hasil Literasi ICT</h2>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100" >

      <div class="col-lg-12">
        <div class="log-form">

         <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
          <div class="card-body">
            <h5 class="text-center">Literasi ICT</h5>
          </div>
        </div>

        <ul class="list-group" style="margin-top: 10px;">
              <li class="list-group-item d-flex justify-content-between">
                <div> Level 0</div>
                @if($litict[0]->count())
                  <div> {{$litict[0][0]->total}} Responden | {{intval(($litict[0][0]->total)*100/($litict[5][0]->total))}} %</div>
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 1</div>
                @if($litict[1]->count())
                  <div> {{$litict[1][0]->total}} Responden | {{intval(($litict[1][0]->total)*100/($litict[5][0]->total))}} %</div>
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 2</div>
                @if($litict[2]->count())
                  <div> {{$litict[2][0]->total}} Responden | {{intval(($litict[2][0]->total)*100/($litict[5][0]->total))}} %</div>
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 3</div>
                @if($litict[3]->count())
                  <div> {{$litict[3][0]->total}} Responden | {{intval(($litict[3][0]->total)*100/($litict[5][0]->total))}} %</div>
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 4</div>
                @if($litict[4]->count())
                  <div> {{$litict[4][0]->total}} Responden | {{intval(($litict[4][0]->total)*100/($litict[5][0]->total))}} %</div>
                @endif
              </li>
            </ul>
        @include('result.litict')
        @include('result.litktg')
        @include('result.litlok')
        @include('result.litpend')
        @include('result.litjns')
        @include('result.litltr')
        @include('result.litum')
        @include('result.litkel')
        
        @foreach($ktg as $keys => $kategori)
        <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
          <div class="card-body">
            <h5 class="text-center">Kategori {{$kategori->kategori}}</h5>
          </div>
        </div>

        <ul class="list-group" style="margin-top: 10px;">
              <li class="list-group-item d-flex justify-content-between">
                <div> Level 0</div>
                @if($litktg[0]->count())
                  @for($i=0;$i<=count($litktg[0])-1;$i++)
                    @if($litktg[0][$i]->ktg_id == $kategori->id)
                    <div> {{$litktg[0][$i]->total}} Responden | {{intval(($litktg[0][$i]->total)*100/($litktg[5][$i]->total))}} %</div>
                    @endif
                  @endfor
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 1</div>
                @if($litktg[1]->count())
                  @for($i=0;$i<=count($litktg[1])-1;$i++)
                    @if($litktg[1][$i]->ktg_id == $kategori->id)
                    <div> {{$litktg[1][$i]->total}} Responden | {{intval(($litktg[1][$i]->total)*100/($litktg[5][$i]->total))}} %</div>
                    @endif
                  @endfor
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 2</div>
                @if($litktg[2]->count())
                 @for($i=0;$i<=count($litktg[2])-1;$i++)
                    @if($litktg[2][$i]->ktg_id == $kategori->id)
                    <div> {{$litktg[2][$i]->total}} Responden | {{intval(($litktg[2][$i]->total)*100/($litktg[5][$i]->total))}} %</div>
                    @endif
                  @endfor
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 3</div>
                @if($litktg[3]->count())
                  @for($i=0;$i<=count($litktg[3])-1;$i++)
                    @if($litktg[3][$i]->ktg_id == $kategori->id)
                    <div> {{$litktg[3][$i]->total}} Responden | {{intval(($litktg[3][$i]->total)*100/($litktg[5][$i]->total))}} %</div>
                    @endif
                  @endfor
                @endif
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <div> Level 4</div>
                @if($litktg[4]->count())
                 @for($i=0;$i<=count($litktg[4])-1;$i++)
                    @if($litktg[4][$i]->ktg_id == $kategori->id)
                    <div> {{$litktg[4][$i]->total}} Responden | {{intval(($litktg[4][$i]->total)*100/($litktg[5][$i]->total))}} %</div>
                    @endif
                  @endfor
                @endif
              </li>
            </ul>

        @endforeach
        
      </div>

    </div>

  </div>



</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
@endpush

