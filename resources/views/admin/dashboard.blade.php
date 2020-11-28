@extends('templates.master')
@section('title')
<title>Dashboard Admin</title>
@endsection
@include('templates.nav')
@push('css')
<style type="text/css">
</style>
@endpush
@section('content')


 <main id="main">
    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs" style="margin-top: 25px;">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" href="#tab-1">
              <i class="icofont-chart-bar-graph"></i>
              <h4 class="d-none d-lg-block">Kuesioner</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" href="#tab-2">
              <i class="icofont-chart-bar-graph"></i>
              <h4 class="d-none d-lg-block">Literasi Digital</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" href="#tab-3">
              <i class="icofont-chart-bar-graph"></i>
              <h4 class="d-none d-lg-block">Literasi Internet</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" href="#tab-4">
              <i class="icofont-chart-bar-graph"></i>
              <h4 class="d-none d-lg-block">Literasi Telepon Seluler</h4>
            </a>
          </li>
        </ul>

            @include ('admin.kuesioner')
        
      </div>
    </section><!-- End Tabs Section -->
 </main><!-- End #main -->

       <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="count-box" >
              <i class="icofont-chart-bar-graph"></i>
              <span>Hasil Pemetaan Literasi ICT</span>
              <p>Hasil Pemetaan Literasi ICT</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->
@endsection