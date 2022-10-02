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

        $allowed = array('jpg','jpeg','png','jfif','gif','psd','pdf','eps');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                    $fileNameNew = $fileName;
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

    $sqldokter = "INSERT INTO data_dokter (id_dokter, profil, nama_dokter, spesialisasi, kelamin, umur, alamat) VALUES ('$id_dokter', '$fileNameNew', '$nama_dokter', '$spesialisasi', '$kelamin', '$umur', '$alamat')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: datadokter.php');
    }else{
        header('Location: simpandokter.php?status=gagal');
    }

?>