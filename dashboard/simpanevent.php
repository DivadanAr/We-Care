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

    $sqldokter = "INSERT INTO event (id, gambar, nama_event) VALUES ('$id', '$fileDestination', '$nama_event')";
    $querydokter = mysqli_query($connect, $sqldokter);

    if($querydokter){
        header('Location: dataevent.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
    
?>
