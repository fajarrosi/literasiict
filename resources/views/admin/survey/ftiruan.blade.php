@extends('templates.master')
@include('templates.nav')
@section('title')
<title>Survey Telah Berhasil</title>
@endsection

@section('content')


<main id="main">
	<!-- ======= Tabs Section ======= -->
	<section id="tabs" class="tabs" style="margin-top: 25px;">
		<div class="container" data-aos="fade-up">
			<div class="row justify-content-center" style="margin-top: 30px;">
				<div class="col-lg-8  order-2 order-lg-1 mt-3 mt-lg-0 newbox" data-aos="fade-up" data-aos-delay="100">
					<h1 class="text-center">Terima Kasih Sudah Mengisi Survey</h1>
					<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
						<div class="card-body">
							<h5>Hasil Survey Responden</h5>
							<hr style="margin-top: 0px;">
							<p>
								Berdasarkan atas apa yang telah Anda isi di dalam survey, tingkat literasi ICT Anda termasuk ke dalam kategori Level yang artinya Anda memiliki pemahaman yang  dalam literasi ICT. Dengan rincian sebagai berikut 
							</p>
								<ul class="list-group" style="margin-top: 10px;">
									<li class="list-group-item d-flex">Tingkat Literasi  Anda termasuk kedalam kategori Level  yang artinya Anda memiliki pemahaman yang dalam literasi </li>
								</ul> 
							<p style="margin-top: 10px;">
								Anda dapat meningkatkan literasi anda dengan mengikuti pelatihan yang telah kami berikan berdasarkan tingkat literasi ICT Anda. Berikut merupakan rekomendasi pelatihan untuk Anda.
							</p>

								<ul class="list-group" style="margin-top: 10px;">
									<li class="list-group-item d-flex" >
											<div class="col-lg-4" style="padding-left: 0px;">  <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid"></div>
											<div class="col-lg-8">
												<h4><b>Pelatihan Komputer</b></h4>
												<hr style="margin-top: 0px;">
												<p style="text-align: justify;">magna etiam tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque</p>
												<div class="text-center"><button>Daftar Sekarang</button></div>
											</div>
									</li>
									
								</ul>
						</div>
					</div>

				</div>

			</div>
			

		</div>
	</section><!-- End Tabs Section -->
</main><!-- End #main -->


@endsection