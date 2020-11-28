<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
	<div class="card-body">
		<h5 class="text-center">Grafik Literasi </h5>
		<p class="text-center">berdasarkan Latar Pendidikan</p>
		<select class="form-control" id="latar" name="latar">
			<option value="">Select Latar Pendidikan</option>
			@foreach($ltr as $keys => $ltar)
			<option value="{{$ltar->ltr_pend}}">{{$ltar->ltr_pend}}</option>
			@endforeach
		</select>
		<canvas id="litltr"></canvas>
	</div>
</div>

@push('scripts')
<script type="text/javascript">
	$(function(){
		$('#latar').on('change',function(){
			var id = $(this).val();
			if (id != '') {
				getLatar(id);
			}
		});

		function getLatar(id){
			$.ajax({
				url:"/litltr/"+id,
				success:function(data){
					var hasil =[];
					for (var i = 0; i < data.length; i++) {
						hasil.push(data[i]);
					}
					var ctx = document.getElementById("litltr").getContext('2d');
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