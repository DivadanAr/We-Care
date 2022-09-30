<?php
    include 'koneksi.php';

    if(isset($_POST['simpandokter'])){
        $id_dokter = $_POST['id_dokter'];
        $nama_dokter = $_POST['nama_dokter'];
        $spesialisasi = $_POST['spesialisasi'];
        $kelamin = $_POST['kelamin'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];


        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png', 'pdf');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header('Location: datadokter.php?uploadberhasil');
            }else{
                echo "error upload";
            }
        }else{
            echo "gagal upload";
        }
    }

    $sqldokter = "INSERT INTO data_dokter (id_dokter, profil, nama_dokter, spesialisasi, kelamin, umur, alamat) VALUES ('$id_dokter', '$fileDestination', '$nama_dokter', '$spesialisasi', '$kelamin', '$umur', '$alamat')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: datadokter.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
?>

<?php
    include 'koneksi.php';

    if(isset($_POST['simpanevent'])){
        $id = $_POST['id'];
        $nama_event = $_POST['nama_event'];

        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png', 'pdf');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header('Location: dataevent.php?uploadberhasil');
            }else{
                echo "error upload";
            }
        }else{
            echo "gagal upload";
        }
    }

    $sqldokter = "INSERT INTO event (id, profil, nama_event) VALUES ('$id', '$fileDestination', '$nama_event')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: dataevent.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
    
?>

<?php

include 'koneksi.php';

if(isset($_POST['simpankonsul'])){
    $id_konsul = $_POST['id_konsul'];
    $nama_dokter = $_POST['nama_dokter'];
    $nama_pasien = $_POST['nama_pasien'];
    $keluhan = $_POST['keluhan'];
    $tanggal_konsul = $_POST['tangga_konsul'];

    $sqlkonsul = "INSERT INTO data_konsul (id_konsul, nama_dokter, nama_pasien, keluhan, tanggal_konsul) VALUES ('$id_konsuk', '$nama_dokter', '$nama_pasien', '$keluhan', '$tanggal_konsul')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: datakonsul.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }

}
?>