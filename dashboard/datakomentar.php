<?php
    include 'koneksi.php';
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
            <p>Data komentar</p>
            <div class="table">
                <table class="table1">
                    <tr>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>KOMENTAR</th>
                        <th>EDIT</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM komentar_pasien";
                    $query = mysqli_query($connect, $sql);

                    while($event = mysqli_fetch_array($query)){
                        echo "<tr>
                        <td>$event[nama_pasien]</td>
                        <td>$event[email]</td>
                        <td>$event[komentar]</td>
                        <td class='action'>
                            <a href='editevent.php?id_pasien=".$event['id_pasien']."'><img src='assets/edit.png'></a>
                            <a href='hapusevent.php?id_pasien=".$event['id_pasien']."'><img src='assets/hapus.png'></a>
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