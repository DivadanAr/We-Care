<?php
    include 'koneksi.php';

    if(isset($_POST['simpanpenyakit'])){
        $id_penyakit = $_POST['id_penyakit'];
        $nama_penyakit = $_POST['nama_penyakit'];
        $keterangan = $_POST['keterangan'];

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

    $sqldokter = "INSERT INTO penyakit (id_penyakit,  nama_penyakit, gambar, keterangan) VALUES ('$id_penyakit', '$nama_penyakit', '$fileDestination', '$keterangan')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: datapenyakit.php');
    }else{
        header('Location: simpanpenyakit.php?status=gagal');
    }
    
?>
