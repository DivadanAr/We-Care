<?php
    include 'koneksi.php';
    $sql_dokter = "SELECT * FROM data_dokter";
    $data_dokter = mysqli_query($connect, $sql_dokter);
    $jumlah_dokter = mysqli_num_rows($data_dokter);

    $sql_pasien = "SELECT * FROM data_pasien";
    $data_pasien = mysqli_query($connect, $sql_pasien);
    $jumlah_pasien = mysqli_num_rows($data_pasien);

    //ambil data mahasiswa dimana jenis kelamin adalah laki-laki
    $dokter = mysqli_query($connect, "SELECT * FROM data_dokter");

    //ambil data mahasiswa dimana jenis kelamin adalah perempuan
    $pasien = mysqli_query($connect, "SELECT * FROM data_pasien");

    $sql_konsultan_terbaru = "SELECT * FROM data_konsul ORDER BY id_konsul DESC LIMIT 3";
    $data_konsultan = mysqLi_query($connect, $sql_konsultan_terbaru);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">

    <!-- quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    <title>Dashboard</title>
</head>
<body>
<div class="menubar">
        <div class="sidebar">
        <img src="assets/hospital.png" alt="">
        <ul class="menu">
            <li><a href="dashboard.php"><img src="assets/home.png" alt=""><p class="menutext">DASHBOARD</p></a></li>
            <li><a href="datadokter.php"><img src="assets/doctor.png" alt=""><p class="menutext2">DATA DOKTER</p></a></li>
            <li><a href="datapasien.php"><img src="assets/patient.png" alt=""><p class="menutext3">DATA PASIEN</p></a></li>
            <li><a href="datakonsultan.php"><img src="assets/konsul.png" alt=""><p class="menutext4">DATA KONSULTAN</p></a></li>
            <li><a href="dataevent.php"><img src="assets/event.png" alt=""><p class="menutext4">DATA EVENT</p></a></li>
            <li><a href="datapenyakit.php"><img src="assets/penyakit.png" alt=""><p class="menutext4">DATA PENYAKIT</p></a></li>
            <li><a href="datakomentar.php"><img src="assets/comment.png" alt=""><p class="menutext4">DATA COMMENT</p></a></li>
        </ul>
        </div>
        <div class="navbar">
            <button class="menu" id="toggle-sidebar" onclick="myFunction()"><img src="assets/menu.png" alt=""></button>
            <script src="main.js"></script>
        </div>
    </div>
    <div class="container">
        <div class="content">
        <div class="data-dokter">
                <div class="img-doctor">
                    <img src="assets/doctor.png" alt="">
                </div>
                <div class="text">
                    <p>Dokter</p>
                    <p><?php echo $jumlah_dokter;?></p>
                </div>
            </div>
            <div class="data-pasien">
                <div class="img-doctor">
                    <img src="assets/patient.png" alt="">
                </div>
                <div class="text">
                    <p>Pasien</p>
                    <p><?php echo $jumlah_pasien;?></p>
                </div>
            </div>
            <div class="right-content">
                <div class="recent-consult">
                    <p>Recent Konsultan</p>
                    <table class="table1">
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Pinjam</th>
                        </tr>
                        <?php
                        $data_konsultan = mysqLi_query ($connect,$sql_konsultan_terbaru);
                            while($data = mysqLi_fetch_array($data_konsultan)){
                                echo "
                        <tr>
                            <td>$data[nama_dokter]</td>
                            <td>$data[nama_pasien]</td>
                            <td>$data[tanggal_konsul]</td>
                        </tr>
                        ";
                        }
                        ?>
                    </table>

                </div>
                <div class="recent">
                    <p>Recent</p>
                </div>
            </div>
        </div>
        <div class="center-content">
            <div class="graphic-class">
                <p>Statistik Pasien & dokter</p>
                <canvas class="kelamin" id="chartjumlah"></canvas>
                <script>
                    var ctx = document.getElementById("chartjumlah");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Dokter', 'Pasien'],

                            datasets: [{
                                    label: 'jumlah data',

                                    data: [
                                        <?php echo mysqli_num_rows($dokter); ?>,
                                        <?php echo mysqli_num_rows($pasien);?>,
                                    ],

                                    backgroundColor: [
                                        'rgba(84, 255, 104, 0.5)',
                                        'rgba(54, 162, 235, 0.5)'
                                    ],

                                    borderColor: [
                                        'rgba(84, 255, 104, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                            }
                        }
                    });
                </script>
            </div>

    </div>
</body>
</html>