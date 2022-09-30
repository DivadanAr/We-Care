<?php

include 'koneksi.php';

if (isset($_POST['simpan'])){
    $id_konsul = $_POST['id_konsul'];
    $nama_dokter = $_POST['nama_dokter'];
    $nama_pasien = $_POST['nama_pasien'];
    $penyakit = $_POST['penyakit'];
    $tanggal_konsul = $_POST['tanggal_konsul'];

    $sql = "UPDATE data_konsul SET nama_dokter='$nama_dokter', nama_pasien='$nama_pasien', keluhan='$keluhan', tanggal_konsul='$tanggal_konsul', umur='$umur', alamat='$alamat' WHERE id_dokter='$id_dokter'";
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: datadokter.php');
    }else{
        header('Location: edit.php?status=gagal');
    }

?>