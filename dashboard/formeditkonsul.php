<?php

include 'koneksi.php';

$id_konsul = $_GET['id_konsul'];
$sql = "SELECT * FROM data_konsul WHERE id_konsul='$id_konsul'";
$query = mysqli_query($connect, $sql);
$konsul = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)  < 1){
    die("Data Tidak Ditemukan");
}

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
        <div class="card-content">
            <div class="container">
        <div class="edit-content">
            <div class="judul">
                <p>Tambah Data Konsul</p>
            </div>
            <form action="simpan.php" method="post">
            <div class="form-edit">
                <table>
                    <tr>
                        <td><input type="hidden" name="id_dokter" value="<?php echo $idkonsul?>"  value="<?php echo $konsul['id_konsul']?>" readonly></td>
                    </tr>
                    <tr>
                        <th>Nama Dokter :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nama_dokter" value="<?php echo $konsul['nama_dokter']?>"></td>
                    </tr>
                    <tr>
                        <th>Nama Pasien :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nama_pasien" value="<?php echo $konsul['nama_pasien']?>"></td>
                    </tr>
                    <tr>
                        <th>keluhan :</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="keluhan"  value="<?php echo $konsul['keluhan']?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Konsul :</th>
                    </tr>
                    <tr>
                        <td><input type="date" name="tanggal_konsul"  value="<?php echo $konsul['tanggal_konsul']?>" ></td>
                    </tr>
            </table>
            <div class="btn-simpan-cancel">
                    <a class="" href="datakonsuk.php">cancel</a>
                    <input type="submit" name="simpan.php" value="simpan">
                </div>
            </form>
        </div>
    </div>
</body>
</html>