<?php
include('koneksi.php');$country = mysqli_query($koneksi,"SELECT * from tb_country");
$country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    $nama_country[] = $row['nama_country'];

    $totalrecovered = mysqli_query($koneksi,"SELECT total_recovered as TotalRecovered from data_covid where id_country='".$row['id_country']."'");
    $row = $totalrecovered->fetch_array();
    $total_recovered[] = $row['TotalRecovered'];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Chart Total Recovered COVID-19</title>
	<title>Grafik Perbandingan Total Sembuh dari Covid-19 di 10 Negara</title>
	<script type="text/javascript" src="Chart.js"></script>
	<style type="text/css">
		.container{
			width: 50%;
			margin: 15px auto;
		}
	</style>
</head>
<body>
	<h2><center>GRAFIK PERBANDINGAN TOTAL SEMBUH DARI COVID-19 DI 10 NEGARA</center></h2><br>
	<b><center>GRAFIK BAR</center></b>
	<div class="container" style="width: 900px;height: 450px;" align="center">
		<canvas id="Chart-bar"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("Chart-bar").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_country); ?>,
				datasets: [{
					label: 'Total Sembuh dari Covid-19',
					data: <?php echo json_encode($total_recovered); ?>,
					backgroundColor: 'rgba(90, 399, 12, 0.7)',
                    borderColor: 'rgba(90,399,12,1)',
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
	<b><center>GRAFIK LINE</center></b>
	<div class="container" style="width: 1000px;height: 450px;" align="center">
		<canvas id="Chart-line"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("Chart-line").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_country); ?>,
				datasets: [{
					label: 'Total Sembuh dari Covid-19',
					data: <?php echo json_encode($total_recovered); ?>,
					backgroundColor: 'rgba(90, 399, 12, 0.7)',
                    borderColor: 'rgba(90,399,12,1)',
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
	</script><br><br>
	<b><center>GRAFIK PIE</center></b>
	<div class="container" style="width: 1000px;height: 450px;" align="center">
		<canvas id="Chart-pie"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("Chart-pie").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: <?php echo json_encode($nama_country); ?>,
				datasets: [{
					label: 'Total Sembuh dari Covid-19',
					data: <?php echo json_encode($total_recovered); ?>,
					backgroundColor: [
					'rgba(11, 84, 150, 0.7)',				
					'rgba(178, 40, 235, 0.7)',
					'rgba(47, 79, 79, 0.7)',		
					'rgba(75, 192, 192, 0.7)',
					'rgba(140, 200, 75, 0.7)',
					'rgba(255, 99, 132, 0.7)',
					'rgb(210, 180, 140, 0.7)',
					'rgba(400, 20, 12, 0.7)',
					'rgba(165, 42, 42, 0.7)',
					'rgba(255, 206, 86, 0.7)'		
					],
					borderColor: [
					'rgba(11, 84, 150, 1)',
					'rgba(178, 40, 235, 1)',
					'rgba(47, 79, 79, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(140, 200, 75, 1)',
					'rgba(255, 99, 132, 1)',
					'rgb(210, 180, 140, 1)',
					'rgba(400, 20, 12, 1)',
					'rgba(165, 42, 42, 1)',
					'rgba(255, 206, 86, 1)'
					],
				}]
			},
			options: {
				responsive:true
			}
		});
	</script><br><br>
	<b><center>GRAFIK DOUGHNUT</center></b>
	<div class="container" style="width: 1000px;height: 450px;" align="center">
		<canvas id="Chart-do"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("Chart-do").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama_country); ?>,
				datasets: [{
					label: 'Total Sembuh dari Covid-19',
					data: <?php echo json_encode($total_recovered); ?>,
					backgroundColor: [
					'rgba(11, 84, 150, 0.7)',				
					'rgba(178, 40, 235, 0.7)',
					'rgba(47, 79, 79, 0.7)',		
					'rgba(75, 192, 192, 0.7)',
					'rgba(140, 200, 75, 0.7)',
					'rgba(255, 99, 132, 0.7)',
					'rgb(210, 180, 140, 0.7)',
					'rgba(400, 20, 12, 0.7)',
					'rgba(165, 42, 42, 0.7)',
					'rgba(255, 206, 86, 0.7)'		
					],
					borderColor: [
					'rgba(11, 84, 150, 1)',
					'rgba(178, 40, 235, 1)',
					'rgba(47, 79, 79, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(140, 200, 75, 1)',
					'rgba(255, 99, 132, 1)',
					'rgb(210, 180, 140, 1)',
					'rgba(400, 20, 12, 1)',
					'rgba(165, 42, 42, 1)',
					'rgba(255, 206, 86, 1)'
					],
				}]
			},
			options: {
				responsive:true
			}
		});
	</script>
</body>
</html>