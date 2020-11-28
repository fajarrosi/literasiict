@extends('templates.master')
@include('templates.nav')
@section('title')
<title>Survey</title>
@endsection

@section('content')


<main id="main">
	<!-- ======= Tabs Section ======= -->
	<section id="tabs" class="tabs" style="margin-top: 25px;">
		<div class="container" data-aos="fade-up">
			<div class="row justify-content-center" style="margin-top: 30px;">
				<div class="col-lg-8  order-2 order-lg-1 mt-3 mt-lg-0 newbox" data-aos="fade-up" data-aos-delay="100">
					<h1 class="text-center">Survey</h1>
					<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
						<div class="card-body">
							<h5>Informasi Responden</h5>
							<hr style="margin-top: 0px;">
							<form method="POST" action="{{ route('survey.store') }}">
								@csrf

								<div class="form-group row">
									<label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

									<div class="col-md-6">
										<input id="nama" class="form-control" name="survey[nama]" required  autofocus placeholder="Masukkan Jawaban Anda">
									</div>
								</div>
								<div class="form-group row">
									<label for="tujuan" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>

									<div class="col-md-6">
										<select class="form-control" name="survey[jns_kel]">
											<option value="laki-laki">Laki-laki</option>
											<option value="perempuan">Perempuan</option>
										</select>

									</div>
								</div>
								<div class="form-group row">
									<label for="umur" class="col-md-4 col-form-label text-md-right">umur</label>

									<div class="col-md-6">
										<input id="umur" class="form-control" name="survey[umur]" required  autofocus placeholder="Masukkan Jawaban Anda">
									</div>
								</div>
								<div class="form-group row">
									<label for="ltr_pend" class="col-md-4 col-form-label text-md-right">Latar Pendidikan</label>

									<div class="col-md-6">
										<input id="ltr_pend" class="form-control" name="survey[ltr_pend]" required  autofocus placeholder="Masukkan Jawaban Anda">
									</div>
								</div>

								<div class="form-group row">
									<label for="pendptn" class="col-md-4 col-form-label text-md-right">Pendapatan</label>

									<div class="col-md-6">
										<input id="pendptn" class="form-control" name="survey[pendptn]" required  autofocus placeholder="Masukkan Jawaban Anda">
									</div>
								</div>

								<div class="form-group row">
									<label for="lokasi" class="col-md-4 col-form-label text-md-right">Tempat Tinggal</label>

									<div class="col-md-6">
										<input id="lokasi" class="form-control" name="survey[lokasi]" required  autofocus placeholder="Masukkan Jawaban Anda">
									</div>
								</div>

								<div class="form-group row">
									<label for="jns_ush" class="col-md-4 col-form-label text-md-right">Jenis Usaha</label>

									<div class="col-md-6">
										<input id="jns_ush" class="form-control" name="survey[jns_inds]" required  autofocus placeholder="Masukkan Jawaban Anda">
									</div>
								</div>

								<hr style="margin-top: 0px;">
								@foreach($kategori as $keys => $ktg)
								<h5>Bagian Kuesioner {{$ktg->kategori}}</h5>
								<hr style="margin-top: 0px;">

								@foreach($ktg->pertanyaan as $key => $pert)
								<div class="form-group row">
									<label for="judul" class="col-md-12 col-form-label">{{$pert->pertanyaan}}</label>

									<div class="col-md-12">

										<ul class="list-group" style="margin-top: 10px;">
											@foreach($pert->jawaban as $jwbn)
											<label for="jwbn{{ $keys}}{{ $key}}{{ $jwbn->id}}">
												<li class="list-group-item d-flex">
													<input type="radio" name="responses[{{ $keys}}][{{ $key}}][jwbn_id]" value="{{ $jwbn->id}}" id="jwbn{{ $keys}}{{ $key}}{{ $jwbn->id}}" required>{{$jwbn->display}}

												</li>
												<input type="hidden" name="responses[{{ $keys}}][{{ $key}}][pert_id]" value="{{$pert->id}}">
											</label>
											@endforeach
										</ul>

									</div>
								</div>
								@endforeach

								<hr style="margin-top: 0px;">
								@endforeach

								<div class="form-group row mb-0">
									<div class="col-md-8 offset-md-4">
										<button type="submit">
											Kirim
										</button>

									</div>
								</div>
							</form>
						</div>
					</div>



				</div>
			</div>

		</div>
	</section><!-- End Tabs Section -->
</main><!-- End #main -->


@endsection