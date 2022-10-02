<?php

include 'koneksi.php';

if(isset($_POST['simpankonsul'])){
    $id_konsul = $_POST['id_konsul'];
    $id_pasien = $_POST['id_pasien'];
    $nama_pasien = $_POST['nama_pasien'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $keluhan = $_POST['keluhan'];
    $nama_dokter = $_POST['nama_dokter'];
    $tanggal_konsul = $_POST['tanggal_konsul'];
  
    $sql1 = "INSERT INTO `data_konsul` (`id_konsul`, `nama_dokter`, `nama_pasien`, `keluhan`, `tanggal_konsul`) VALUES ('$id_konsul', '$nama_dokter', '$nama_pasien', '$keluhan', '$tanggal_konsul')";
    $sql2 = "INSERT INTO `data_pasien` (`id_pasien`, `nama_pasien`, `umur`, `jenis_kelamin`, `penyakit`, `telepon`, `alamat`) VALUES ('$id_pasien', '$nama_pasien', '$umur', '$jenis_kelamin', '$keluhan', '$telepon', '$alamat')";

    mysqLi_query($connect, $sql1);
    mysqLi_query($connect, $sql2);

    header('location:landingpage.php?sukses');
}
?>