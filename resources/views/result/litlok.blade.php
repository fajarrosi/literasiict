<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
	<div class="card-body">
		<h5 class="text-center">Grafik Literasi </h5>
		<p class="text-center">berdasarkan Lokasi</p>
		<select class="form-control" id="lokasi" name="lokasi">
			<option value="">Select Lokasi</option>
			@foreach($lok as $keys => $lokasi)
			<option value="{{$lokasi->lokasi}}">{{$lokasi->lokasi}}</option>
			@endforeach
		</select>
		<canvas id="litlok"></canvas>
	</div>
</div>

@push('scripts')
<script type="text/javascript">
	$(function(){
		$('#lokasi').on('change',function(){
			var id = $(this).val();
			console.log(id);
			if (id != '') {
				getLok(id);
			}
		});

		function getLok(id){
			$.ajax({
				url:"/litlok/"+id,
				success:function(data){
					var hasil =[];
					for (var i = 0; i < data.length; i++) {
						hasil.push(data[i]);
					}
					var ctx = document.getElementById("litlok").getContext('2d');
					var chart = new Chart(ctx,{
						type:'bar',
						data: {
							labels: ["Level 0", "Level 1", "Level 2", "Level 3", "Level 4"],
							datasets:[{
								label:'Jumlah Responden',
								backgroundColor:'rgba(54, 162, 235, 0.2)',
								borderColor: 'rgba(54, 162, 235, 1)',
								data:hasil
							}]
						},
						option:{
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero:true
									}
								}]
							}
						}

					});

				}
			});
		}
		
	});
</script>
@endpush