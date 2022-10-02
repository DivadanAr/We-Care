<?php
    include 'koneksi.php';

    $id_konsul = hexdec(uniqid());
    $id_pasien = hexdec(uniqid())
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
    <!-- font quicksan -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="icon" href="assetslandingpage/iconlink.png">

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
                            <a href="landingpage.php"class="a-navbar"> <img src="home logo.png" alt=""> Home</a>
                        </li>
                    </ul>
                </div>
             </div>
        </div>
        <div class="background1"></div>
        <!-- form -->
    <form action="simpankonsul.php" method="POST">
        <div class="background2">
            <table>
                <div class="judul_form">
                    <h2>Form Konsultasi</h2>
                </div>
                <tr>
                    <td><input type="hidden" value="<?php echo $id_konsul?>" readonly name="id_konsul"></td>
                </tr>
                <tr>
                    <td><input type="hidden" value="<?php echo $id_pasien?>" name="id_pasien"></td>
                </tr>
                <tr>
                    <td>Nama :</td>
                </tr>
                <tr>
                    <td><input type="text" name="nama_pasien" required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Umur :</td>
                </tr>
                <tr>
                    <td><input type="number" name="umur" required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :</td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" >
                        <label for="laki_laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                        <label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                </tr>
                <tr>
                    <td><textarea name="alamat" id="" cols="80" rows="5" required="required" autocomplete="off"></textarea></td>
                </tr>
                    <td>No Telepon :</td>
                </tr>
                <tr>
                    <td><input type="number" name="telepon" required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Keluhan :</td>
                </tr>
                <tr>
                    <td><input type="text" name="keluhan" required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Dokter :</td>
                </tr>
                <tr>
                    <td><input type="text" name="nama_dokter" required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Tanggal Konsultasi :</td>
                </tr>
                <tr>
                    <td><input type="date" name="tanggal_konsul" required="required" autocomplete="off"></td>
                </tr>
                <tr>    
                    <td><input type="submit" name="simpankonsul" value="simpan"></td>
                    <td><input type="reset"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>