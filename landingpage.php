<?php
include 'koneksi.php';
$event = mysqli_query($connect, "SELECT * FROM `event` ORDER BY id DESC LIMIT 2");
$dokter = mysqli_query($connect, "SELECT * FROM `data_dokter`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- font quicksan -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- font ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- icon -->
    <link rel="icon" href="assetslandingpage/iconlink.png">

    <title>WeCare-Hospital</title>
</head>

<body>
    <div id="home" class="header">
        <div class="container-navbar">
            <div class="navbar">
                <div class="logo">
                    <img src="assetslandingpage/hospital.png" alt="">
                </div>
                <div class="menu">
                    <ul class="ul-navbar">
                        <li class="li-navbar">
                            <a href="#home" class="a-navbar"> <img src="assetslandingpage/home logo.png" alt=""> Home</a>
                        </li>
                        <li class="li-navbar">
                            <a href="#disease" class="a-navbar"><img src="assetslandingpage/virus.png" alt="">Disease</a>
                        </li>
                        <li class="li-navbar">
                            <a href="#dokter" class="a-navbar"><img src="assetslandingpage/doctor.png" alt="">Doctors</a>
                        </li>
                        <li class="li-navbar">
                            <a href="#about" class="a-navbar"><img src="assetslandingpage/info logo.png" alt="">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pelapis">
            <div class="judul">
                <h1>We<img src="assetslandingpage/hospital.png" alt="">Care</h1>
            </div>
            <div class="consult">
                <a href="form_consult.php"><img src="assetslandingpage/building hospital.png" alt="">Consult +</a>
            </div>
        </div>
    </div>

    <!-- content1 -->
    <div id="wecare" class="slideshow">
        <div class="container">
            <div class="content-slide">
                <div class="imgslide-fade">
                    <div class="numberslide">1 / 3</div>
                    <img src="assetslandingpage/rs 3.jpg" alt="">
                    <div class="text">Rumah Sakit</div>
                </div>

                <div class="imgslide-fade">
                    <div class="numberslide">2 / 3</div>
                    <img src="assetslandingpage/rs_slide2.png" alt="">
                    <div class="text">kamar Rumah Sakit</div>
                </div>

                <div class="imgslide-fade">
                    <div class="numberslide">3 / 3</div>
                    <img src="assetslandingpage/rs_slide3.jpg" alt="">
                    <div class="text">Kantor Administrasi</div>
                </div>

                <a class="prev" onclick="nextslide(-1)">&#10094;</a>
                <a class="next" onclick="nextslide(1)">&#10095;</a>
            </div>
            <div class="page">
                <span class="dot" onclick="dotslide(1)"></span>
                <span class="dot" onclick="dotslide(2)"></span>
                <span class="dot" onclick="dotslide(3)"></span>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlide(slideIndex);

        function nextslide(n) {
            showSlide(slideIndex += n);
        }

        function dotslide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide-fade");
            var dot = document.getElementsByClassName("dot");

            if (n > slides.length) {
                slideIndex = 1
            }

            if (n < 1) {
                slideIndex = slides.length;
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                dot[i].clasName = dot[i].className.replace;
                ("active")
            }

            slides[slideIndex - 1].style.display = "block"
        }
    </script>
    <!-- card text -->
    <div class="card-text-wecare">
        <p>WeCare Hospital @KitaPeduli</p>
        <p>WeCare Hospital adalah rumah sakit <br> yang melayani jenis penyakit seperti <br> Mata......</p>
    </div>


    <!-- content2 -->
    <div id="events" class="container2">
        <div class="subjudul">
            <img src="assetslandingpage/hospital.png" alt="">
            <p>Events</p>
        </div>

        <div class="background">
            <?php
                while($imgevent = mysqli_fetch_array($event)){
                    echo "
                        <div class='event1'>
                            <img src='uploads/$imgevent[gambar]'>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>

    <!-- content3 -->
    <div id="disease" class="container3">
        <div class="disease">
            <img src="assetslandingpage/disease.png" alt="">
            <p>DISEASE</p>
        </div>
        <div class="penyakit">
            <div class="disease1">
                <img src="assetslandingpage/red-eyes.png" alt="">
                <p>INFECTED EYE</p>

            </div>
            <div class="disease1">
                <img src="assetslandingpage/paru-paru.png" alt="">
                <p>PENYAKIT PARU-PARU</p>
            </div>
            <div class="disease1">
                <img src="assetslandingpage/covid19.png" alt="">
                <p>COVID 19</p>
            </div>
        </div>
    </div>

    <div class="detail_penyakit">
        <img src="assetslandingpage/penyakit-mata irited.jpg" alt="">
        <div class="text_detail">
            <h2>Infection eye</h2>
            <p>Infeksi mata adalah suatu kondisi atau penyakit mata yang disebabkan oleh mikroorganisme (mikroba) yang
                tumbuh dan berkembang biak pada mata. Mikroorganisme bisa berupa virus, bakteri, jamur, dan parasit.
                Semuanya akan menimbulkan masalah, seperti mata merah, belekan, berair, dan sebagainya sesuai
                karakteristik masing-masing.</p>
        </div>
    </div>
    <div id="dokter" class="head_dokter">
        <div class="logo_doctors">
            <img src="assetslandingpage/hospital.png" alt="">
        </div>
        <div class="judul_doctors">
            <h3>Doctors</h3>
        </div>
    </div>
    <div class="dokter">
        <?php
            while($imgdokter = mysqli_fetch_array($dokter)){
                echo "
                <div class='dokter_card'>
                    <img src='uploads/$imgdokter[profil]'>
                <div class='card-details'>
                    <h2>$imgdokter[nama_dokter]<h2>
                    <p>$imgdokter[spesialisasi]<p>
                </div>
                </div>
                ";
            }
        ?>
    </div>
    <div id="comment" class="gambarcomment">
        <img src="assetslandingpage/hospital.png" alt="">
        <p>Comment</p>
    </div>
    <div class="comment">
        <form action="simpankomen.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Masukan nama anda!" name="nama_pengguna"  required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="email" placeholder="Masukan email anda!" name="email"  required="required" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Tulis Pesan anda</td>
                </tr>
                <tr>
                    <td><textarea name="komentar" cols="30" rows="10" placeholder="Masukan pesan anda!"  required="required" autocomplete="off"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpankomen"></td>
                </tr>
            </table>
        </form>
    </div>

    <!--footer-->
    <footer id="about" class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#wecare">WeCare</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#disease">Disease</a></li>
                        <li><a href="#dokter">Doctors</a></li>
                        <li><a href="#comment">Add Comment</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <div class="contact1">
                            <img src="assetslandingpage/phone-call logo.png" alt="">
                            <li><a href="#">+62 821-1377-9271</a></li>
                        </div>
                        <div class="contact1">
                            <img src="assetslandingpage/phone-call logo.png" alt="">
                            <li><a href="#">+62 812-9013-2557</a></li>
                        </div>
                        <div class="contact1">
                            <img src="assetslandingpage/email logo.png" alt="">
                            <li><a href="#">WeCare@gmail.com</a></li>
                        </div>
                        <div class="contact1">
                            <img src="assetslandingpage/email logo.png" alt="">
                            <li><a href="#">PeopleCare@gmail.com</a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow Sosial Media</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>