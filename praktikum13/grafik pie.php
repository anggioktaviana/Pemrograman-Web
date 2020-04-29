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
<!doctype html>
<html>

<head>
	<title>Pie Chart Case COVID-19</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<h2 align="left">PIE CHART CASE COVID-19 DI 10 NEGARA</h2>
	<div id="canvas-holder" style="width:50%" align="center">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($jumlah_case); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(178, 40, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(140, 200, 75, 0.2)',
					'rgba(11, 84, 150, 0.2)',
					'rgba(90, 250, 260, 0.2)',
					'rgba(228, 142, 203, 0.2)',
					'rgba(75, 12, 250, 0.2)',
					'rgba(47, 111, 63, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(178, 40, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(140, 200, 75, 1)',
					'rgba(11, 84, 150, 1)',
					'rgba(90, 250, 260, 1)',
					'rgba(228, 142, 203, 1)',
					'rgba(75, 12, 250, 1)',
					'rgba(47, 111, 63, 1)'
					],
					label: 'Presentase Total Kasus COVID-19 di 10 Negara'
				}],
				labels: <?php echo json_encode($nama_country); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
	</script>
</body>

</html>
