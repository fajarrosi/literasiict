<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
	<div class="card-body">
		<h5 class="text-center">Grafik Literasi </h5>
		<p class="text-center">berdasarkan Jenis Kelamin</p>
		<select class="form-control" id="kel" name="kel">
			<option value="">Select Jenis Kelamin</option>
			@foreach($kel as $keys => $kel)
			<option value="{{$kel->jns_kel}}">{{$kel->jns_kel}}</option>
			@endforeach
		</select>
		<canvas id="litkel"></canvas>
	</div>
</div>

@push('scripts')
<script type="text/javascript">
	$(function(){
		$('#kel').on('change',function(){
			var id = $(this).val();
			if (id != '') {
				getKel(id);
			}
		});

		function getKel(id){
			$.ajax({
				url:"/litkel/"+id,
				success:function(data){
					var hasil =[];
					for (var i = 0; i < data.length; i++) {
						hasil.push(data[i]);
					}
					var ctx = document.getElementById("litkel").getContext('2d');
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