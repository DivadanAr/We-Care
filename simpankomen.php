<?php
include 'koneksi.php';
    if(isset($_POST['simpankomen'])){
        $nama_pengguna = $_POST['nama_pengguna'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $sql = "INSERT INTO `komentar_pasien` (`nama_pengguna`, `email`, `komentar`) VALUES ('$nama_pengguna', '$email', '$komentar')";
        $query = mysqLi_query($connect, $sql);

        if($query){
            header('Location: landingpage.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>