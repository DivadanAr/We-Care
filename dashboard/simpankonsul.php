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