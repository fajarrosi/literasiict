<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
	<div class="card-body">
		<h5 class="text-center">Grafik Literasi </h5>
		<p class="text-center">berdasarkan Kategori</p>
		<select class="form-control" id="kategori" name="kategori">
			<option value="" selected>Select Kategori</option>
			@foreach($ktg as $keys => $kategori)
			<option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
			@endforeach
		</select>
		<canvas id="litktg"></canvas>
	</div>
</div>

@push('scripts')
<script type="text/javascript">
	$(function(){
		$('#kategori').on('change',function(){
			var id = $(this).val();
			if (id != '') {
				getKtg(id);
			}
		});
		function getKtg(id){
			$.ajax({
				url:"/litktg/"+id,
				success:function(data){
					var hasil =[];
					for (var i = 0; i < data.length; i++) {
						hasil.push(data[i]);
					}
					var ctx = document.getElementById("litktg").getContext('2d');
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