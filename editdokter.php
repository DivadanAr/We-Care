<?php

include 'koneksi.php';

if (isset($_POST['simpan'])){
    $id_dokter = $_POST['id_dokter'];
    $nama_dokter = $_POST['nama_dokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $kelamin = $_POST['kelamin'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE data_dokter SET nama_dokter='$nama_dokter', spesialisasi='$spesialisasi', kelamin='$kelamin', umur='$umur', alamat='$alamat' WHERE id_dokter='$id_dokter'";
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: datadokter.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>