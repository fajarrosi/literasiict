<div class="card" style="margin-top: 10px;margin-bottom: 10px;">
  <div class="card-body">
    <h5 class="text-center">Grafik Literasi ICT </h5>
    <canvas id="litict"></canvas>
  </div>
</div>

@push('scripts')
<script type="text/javascript">
  $(function(){
    $.ajax({
      url:"{{ route('litict') }}",
      method:"GET",
      success:function(data){
        if(data.length == 0){
        }else{
          var hasil =[];
          for (var i = 0; i < data.length; i++) {
            hasil.push(data[i]);
          }
          var ctx = document.getElementById("litict").getContext('2d');
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

        
        
      }
    });
    
  });
  
</script>
@endpush