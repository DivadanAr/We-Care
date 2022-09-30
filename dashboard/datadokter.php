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

    $sql_konsultan_terbaru = "SELECT * FROM data_konsul ORDER BY id_dokter DESC LIMIT 3";
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
            <li><a href="dashboard.php"><img src="assets/home.png" alt=""></a></li>
            <li><a href="datadokter.php"><img src="assets/doctor.png" alt=""></a></li>
            <li><a href="datapasien.php"><img src="assets/patient.png" alt=""></a></li>
            <li><a href="datakonsultan.php"><img src="assets/konsul.png" alt=""></a></li>
        </ul>
        </div>
        <div class="navbar">
            <button class="menu"><img src="assets/menu.png" alt=""></button>
        </div>
    </div>
    <div class="container">
        <div class="card-content">
            <p>Data Dokter</p>
            <div class="table">
                <table class="table1">
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>BIDANG</th>
                        <th>KELAMIN</th>
                        <th>UMUR</th>
                        <th>ALAMAT</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM data_dokter";
                    $query = mysqli_query($connect, $sql);

                    while($dokter = mysqli_fetch_array($query)){
                        echo "<tr>
                        <td>$dokter[id_dokter]</td>
                        <td>$dokter[nama_dokter]</td>
                        <td>$dokter[spesialisasi]</td>
                        <td>$dokter[kelamin]</td>
                        <td>$dokter[umur]</td>
                        <td>$dokter[alamat]</td>
                        <td class='action'>
                            <a href='editdokter.php?id_dokter=".$dokter['id_dokter']."'><img src='assets/edit.png'></a>
                            <a href='hapusdokter.php?id_dokter=".$dokter['id_dokter']."'><img src='assets/hapus.png'></a>
                        </td>
                    </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>