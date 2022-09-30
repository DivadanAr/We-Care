<?php

include 'koneksi.php'

 $id_konsul = hexdec(uniqid())

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
    <title>Document</title>
    <!-- font ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <div id="home" class="header">
        <div class="container-navbar">
            <div class="navbar">
                <div class="logo">
                    <img src="hospital.png" alt="">
                </div>
                <div class="menu">
                    <ul class="ul-navbar">
                        <li class="li-navbar">
                            <a href="landingpage.html"class="a-navbar"> <img src="home logo.png" alt=""> Home</a>
                        </li>
                    </ul>
                </div>
             </div>
        </div>
        <div class="background1"></div>
        <!-- form -->
    <form action="">
        <div class="background2">
            <table>
                <div class="judul_form">
                    <h2>Form Konsultasi</h2>
                </div>
                <tr>
                    <td>ID</td>
                </tr>
                <tr>
                    <td><input type="text" value="<?php echo '$id_konsul'?>" readonly name="id_konsul"></td>
                </tr>
                <tr>
                    <td>Nama :</td>
                </tr>
                <tr>
                    <td><input type="text" name="nama_pasien"></td>
                </tr>
                <tr>
                    <td>Umur :</td>
                </tr>
                <tr>
                    <td><input type="number" name="umur"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :</td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="laki-laki" name="kelamin">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="perempuan" name="kelamin">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="80" rows="5" name="id_konsul" name="alamat"></textarea></td>
                </tr>
                    <td>No Telepon :</td>
                </tr>
                <tr>
                    <td><input type="number" name="id_konsul" name="telepon"></td>
                </tr>
                <tr>
                    <td>Keluhan :</td>
                </tr>
                <tr>
                    <td><input type="text" name="id_konsul" name="keluhan"></td>
                </tr>
                <tr>
                    <td>Dokter :</td>
                </tr>
                <tr>
                    <td><input type="text" name="id_konsul" name="nama_dokter"></td>
                </tr>
                <tr>
                    <td>Tanggal :</td>
                </tr>
                <tr>
                    <td><input type="date" name="tanggal_konsul"></td>
                </tr>
                <tr>    
                    <td><input type="submit"></td>
                    <td><input type="reset"></td>
                </tr>
            </table>
        </div>
        
    </form>
</body>
</html>