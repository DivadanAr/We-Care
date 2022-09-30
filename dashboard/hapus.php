<?php
include 'koneksi.php';
    if (isset($_GET['id_dokter'])){
        header('Location: datadokter.php');
    $id_dokter = $_GET['id_dokter'];
    $sql1 = "DELETE FROM data_dokter WHERE id_dokter='$id_dokter'"; 
    $query1 = mysqli_query($connect, $sql1);    
    if($query1){
        header('Location: datadokter.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }

    
    

    if (isset($_GET['id_pasien'])){
        header('Location: datapasien.php');
    
    $id_pasien = $_GET['id_pasien'];
    $sql2 = "DELETE FROM data_pasien WHERE id_pasien='$id_pasien'"; 
    $query2 = mysqli_query($connect, $sql2);
    if($query2){
        header('Location: datapasien.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }



    if (isset($_GET['id_konsul'])){
        header('Location: datapasien.php');
    $id_konsul = $_GET['id_konsul'];
    $sql3 = "DELETE FROM data_konsul WHERE id_konsul='$id_konsul'"; 
    $query3 = mysqli_query($connect, $sql3);
    if($query3){
        header('Location: datakonsul.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }


    

    if (isset($_GET['nama_event'])){
        header('Location: dataevent.php');
    $nama_event = $_GET['nama_event'];
    $sql4 = "DELETE FROM event WHERE nama_event='$nama_event'"; 
    $query4 = mysqli_query($connect, $sql4);
    if($query4){
        header('Location: dataevent.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }




    if (isset($_GET['nama_komentar'])){
        header('Location: datakomentar.php');
    $nama_komentar = $_GET['nama_komentar'];
    $sql5 = "DELETE FROM data_dokter WHERE nama_pengguna='$nama_pengguna'"; 
    $query5 = mysqli_query($connect, $sql5);
    if($query5){
        header('Location: datakomentar.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }




    if (isset($_GET['nama_penyakit'])){
        header('Location: datapenyakit.php');
    $id_penyakit = $_GET['nama_penyakit'];
    $sql6 = "DELETE FROM data_dokter WHERE id_dokter='$id_dokter'"; 
    $query6 = mysqli_query($connect, $sql6);
    if($query6){
        header('Location: datadokter.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }

    
?>