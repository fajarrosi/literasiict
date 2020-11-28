@extends('templates.master')

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
        @include ('admin.kuesioner.navk')
        @yield('kuesioner')
        
      </div>
    </section><!-- End Tabs Section -->
 </main><!-- End #main -->


@endsection