
<script type="text/javascript" src="chartjs/Chart.js"></script>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

         <div class="col-xl-12 col-lg-6">

 
    <div class="card">
        <div class="card-header">
            <strong>Grafik</strong> Grafik
        </div>
    <div class="card-body card-block">


<div style="width: 500px;height: 500px">
        <canvas id="myChart"></canvas>
    </div>

<script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Perempuan", "Laki-Laki"],
                datasets: [{
                    label: '# of Votes',
                    data: [
                    <?php 

                    require_once "koneksi.php";
                    $jumlah_perempuan = mysqli_query($db,"select * from pengguna where jns_kelamin='Perempuan'");
                    echo mysqli_num_rows($jumlah_perempuan);
                    ?>, 
                <?php 
                require_once "koneksi.php";
                $jumlah_laki = mysqli_query($db,"select * from pengguna where jns_kelamin='Laki-Laki'");
                echo mysqli_num_rows($jumlah_laki);
                ?>
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
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
</div>
</div>
</div>
                    </div>
                </div>
            </div>
        </div>
        </div>

