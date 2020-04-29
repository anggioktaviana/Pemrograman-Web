<?php
include('koneksi.php');
$country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
	$nama_country[] = $row['nama_country'];
	
	$total = mysqli_query($koneksi,"SELECT total_cases as TotalCase from tb_case where id_country='".$row['id_country']."'");
	$row = $total->fetch_array();
	$jumlah_case[] = $row['TotalCase'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Grafik Case COVID-19</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<h2 align="left">BAR CHART CASE COVID-19 DI 10 NEGARA</h2>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_country); ?>,
				datasets: [{
					label: 'Grafik Case COVID-19',
					data: <?php echo json_encode($jumlah_case); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>