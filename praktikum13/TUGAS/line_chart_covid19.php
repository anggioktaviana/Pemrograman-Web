<?php
include('koneksi.php');
$country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    $nama_country[] = $row['nama_country'];

    $totalnew = mysqli_query($koneksi,"SELECT new_cases as NewCase from data_covid where id_country='".$row['id_country']."'");
    $row = $totalnew->fetch_array();
    $new_case[] = $row['NewCase'];
    }

    $country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    

    $totaldeath = mysqli_query($koneksi,"SELECT total_death as TotalDeaths from data_covid where id_country='".$row['id_country']."'");
    $row = $totaldeath->fetch_array();
    $total_death[] = $row['TotalDeaths'];
    }

    $country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    
    
    $totalnewdeath = mysqli_query($koneksi,"SELECT new_death as NewDeath from data_covid where id_country='".$row['id_country']."'");
    $row = $totalnewdeath->fetch_array();
    $case_newdeath[] = $row['NewDeath'];
    }
    
    $country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    

    $totalrecovered = mysqli_query($koneksi,"SELECT total_recovered as TotalRecovered from data_covid where id_country='".$row['id_country']."'");
    $row = $totalrecovered->fetch_array();
    $total_recovered[] = $row['TotalRecovered'];
    }
    
    $country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    

    $activecase = mysqli_query($koneksi,"SELECT active_cases as ActiveCases from data_covid where id_country='".$row['id_country']."'");
    $row = $activecase->fetch_array();
    $active_case[] = $row['ActiveCases'];
    }

    $country = mysqli_query($koneksi,"SELECT * from tb_country");
while($row = mysqli_fetch_array($country)){
    
    $totalcase = mysqli_query($koneksi,"SELECT total_cases as TotalCase from data_covid where id_country='".$row['id_country']."'");
    $row = $totalcase->fetch_array();
    $total_case[] = $row['TotalCase'];}
    ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Line Chart Case COVID-19</title>
    <script type="text/javascript" src="Chart.js"></script>
    <style type="text/css">
        .container{
            width: 50%;
            margin: 15px auto;
        }
    </style>
</head>
<body>
    <h2 align="center">LINE CHART CASE COVID-19 DI 10 NEGARA</h2>
    <div class="container" style="width: 1000px;height: 600px">
        <canvas id="myChart"></canvas>
    </div>


    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var data= {
                labels: <?php echo json_encode($nama_country); ?>,
                datasets: [{
                    label: 'New Case',
                    data: <?php echo json_encode($new_case); ?>,
                    backgroundColor: 'rgba(155, 10, 132, 0.5)',
                    borderColor: 'rgba(155, 10, 132, 1)',
                    borderWidth: 2
                },
                {
                    label: 'Total Deaths',
                    data: <?php echo json_encode($total_death); ?>,
                    backgroundColor: 'rgba(11, 84, 150, 0.5)',
                    borderColor: 'rgba(11, 84, 150, 1)',
                    borderWidth: 2
                },
                {
                    label: 'New Deaths',
                    data: <?php echo json_encode($case_newdeath); ?>,
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 2
                },
                {
                    label: 'Total Recovered',
                    data: <?php echo json_encode($total_recovered); ?>,
                    backgroundColor: 'rgba(90, 399, 12, 0.5)',
                    borderColor: 'rgba(90,399,12,1)',
                    borderWidth: 2
                },
                {
                    label: 'Active Cases',
                    data: <?php echo json_encode($active_case); ?>,
                    backgroundColor: 'rgba(400, 20, 12, 0.5)',
                    borderColor: 'rgba(400,20,12,1)',
                    borderWidth: 2
                },
                {
                    label: 'Total Cases',
                    data: <?php echo json_encode($total_case); ?>,
                    backgroundColor: 'rgba(105, 105, 105, 0.5)',
                    borderColor: 'rgba(105, 105, 105, 1)',
                    borderWidth: 2
                }]
            };

    var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                barValueSpacing: 0,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                        }
                    }],
                    xAxes: [{
                            gridLines: {
                                color: "rgba(0,0,0,0)",
                            }
                    }]
                }
            }
        });
    </script>
</body>
</html>