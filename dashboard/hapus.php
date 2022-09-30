<?php
include 'koneksi.php';
    if (isset($_GET['id_dokter'])){
        header('Location: datadokter.php');
    
        $id_dokter = $_GET['id_dokter'];
        $sql = "DELETE FROM data_dokter WHERE id_dokter='$id_dokter'"; 
        $query1 = mysqli_query($connect, $sql);
        
    if($query1){
        header('Location: datadokter.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }

    if (isset($_GET['id_pasien'])){
        header('Location: datapasien.php');
    
        $id_pasien = $_GET['id_pasien'];
        $sql = "DELETE FROM data_pasien WHERE id_pasien='$id_pasien'"; 
        $query2 = mysqli_query($connect, $sql);
        
    if($query2){
        header('Location: datapasien.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }


    }
    if (isset($_GET['id_konsul'])){
        header('Location: datapasien.php');
    
        $id_konsul = $_GET['id_konsul'];
        $sql = "DELETE FROM data_konsul WHERE id_konsul='$id_konsul'"; 
        $query2 = mysqli_query($connect, $sql);
        
    if($query2){
        header('Location: datakonsul.php');
    }else{
        header('Location: hapus.php?status=gagal');
    }
    }
?>