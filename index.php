<?php
require 'functions.php';

$artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
$artikel1 = mysqli_query($koneksi, "SELECT * FROM artikel1");
$artikel2 = mysqli_query($koneksi, "SELECT * FROM artikel2");
$artikel3 = mysqli_query($koneksi, "SELECT * FROM artikel3");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PICASSO GALLERY</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!-- NAVBAR -->
        <div id="navbar" class="navbar">
            <ul id="home" class="juganavbar">
                <li>
                    <form>
                        <a href=# class="home" onclick="topFunction()" id="scroll-btn" title="Top">HOME</a>
                        <a href=# class="artist" onclick="return smoothScroll('artis')">ARTIST</a>
                        <a href="gallery.php" class="support" onclick="return smoothScroll()">GALLERY</a>
                        <a href=# class="about" onclick="return smoothScroll('about')" >ABOUT</a>
                        <img class="searchicon" src="img/search icon.png"/>
                    </form>
                </li>
                <li class="bordernavbar">
                </li>
            </ul>
        </div>
        <!-- NAVBAR SELESAI -->

<!-- hh -->
<div class="container" id="slider-utama">
	<div class="slider-wrapper">
		<img src="img/penangkapanpangerandiponegoro.jpg" class="slide" />
		<img src="img/lion hunt.jpg" class="slide" />
		<img src="img/penangkapanpangerandiponegoro.jpg" class="slide" />
		<img src="img/SixHorsemen1860.jpg" class="slide" />
	</div>
</div>
<!-- hh -->
        <!-- Content 2-->
        <div class="divcontent2">
            
            <ul class="content2">
                <li>
                    <a class="judulcontent2a">THE ACT ART</a>
                    <a class="judulcontent2b">IST</a> 
                </li>
                <img class="contentgambar2" src="img/content2.png"/>
                <div class="divcontent22" style="width:400px;">
                <main>
                        <?php foreach ($artikel1 as $item) : ?>
                        <br><br>
                        <h3 class="artikelhome"><?php echo ($item['judul1']) ?></h3>
                        <br><br>
                        <a class="artikelhome2" ><?php echo ($item['isi_artikel1']) ?></a>
                        <br><br>
                        <?php endforeach; ?>
                </main>
                </div>
            </ul>
        </div>
        <!-- Content 2 -->

        <!-- content3 -->
        <div class="content3">
            <a class="content3a1">New Gallery</a>
            <a class="content3a">New Gallery</a>
            
            <div class="content3c">
                <ul class="content3b">
                    <img class="gambarcontent3b" src="img/content3-1.png"/>
                </ul>
                <ul class="content3b">
                    <img class="gambarcontent3b" src="img/content3-2.png"/>
                </ul>
                <ul class="content3b">
                    <img class="gambarcontent3b" src="img/content3-3.png"/>
                </ul>
            </div>
            <div class="desgambar3">
                <ul>
                    <p class="desgambar3a-1">1631</p>
                    <p class="desgambar3a-2">Rembrandt Harmensz. van Rijn</p>
                    <p class="desgambar3a-3">Old Man with a Gold Chain</p>
                    <p class="desgambar3a-4">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still life.</p>
                </ul>
                <ul>
                    <p class="desgambar3b-1">1887</p>
                    <p class="desgambar3b-2">Vincent van Gogh</p>
                    <p class="desgambar3b-3">Self-portrait</p>
                    <p class="desgambar3b-4">In 1886 Vincent van Gogh left his native Holland and settled in Paris, where his beloved brother Theo was a dealer in paintings. Van Gogh created at least twenty-four self-portraits during his two-year stay in the energetic French capital.</p>
                </ul>
                <ul>
                    <p class="desgambar3c-1">1881</p>
                    <p class="desgambar3c-2">Pierre-Auguste Renoir</p>
                    <p class="desgambar3c-3">Two Sisters (On the Terrace)</p>
                    <p class="desgambar3c-4">He loves everything that is joyous, brilliant, and consoling in life,” an anonymous interviewer once wrote about Pierre-Auguste Renoir. This may explain why Two Sisters (On the Terrace) is one of the most popular paintings in the Art Institute.</p>
                </ul>
            </div>
            <div>
                <ul>
                    <p class="content3d" href="gallery.php">All Gallery</p>
                </ul>
            </div>
        </div>
        <!-- content3 -->

        <!-- content4 -->
        <div class="content4">
            <ul>
                <li class="content4b">
                    <p class="content4a" >
                        <img class="gambarcontent4a" src="img/content4-1.png"/>
                    </p>
                    <main>
                                <?php foreach ($artikel2 as $item) : ?>
                                <br><br>
                                <h3 class="content4c"><?php echo ($item['judul2']) ?></h3>
                                <br><br>
                                <p class="content4f"><?php echo ($item['isi_artikel2']) ?></p>
                                <?php endforeach; ?>
                        </main>
                <li>
                    <img class="gambarcontent4b" src="img/content4-2.png"/>
                    <img class="gambarcontent4c" src="img/content4-3.png"/>
                    <div>
                    <main>
                                <?php foreach ($artikel3 as $item) : ?>
                                <br><br>
                                <h3 class="content4d"><?php echo ($item['judul3']) ?></h3>
                                <br><br>
                                <p class="content4e"><?php echo ($item['isi_artikel3']) ?></p>
                                <br><br>
                                <?php endforeach; ?>
                        </main>
                    </div>
                </li>
            </ul>
        </div>
        <!-- content4 -->
        
        <!-- artis -->
        <div class="artiss" id="artis">
            <a class="judulartis">AMPART</a>
            <div >
                <img class="artisgambar1" src="img/penangkapanpangerandiponegoro.jpg"/>
                <img class="artisgambar2" src="img/raden saleh.jpg"/>
                <img class="artisgambar3" src="img/deandels.jpg"/>
                <img class="artisgambar4" src="img/SixHorsemen1860.jpg"/>
            </div>
            <div class="desartisgambar">
                <p class="desartisgambar1a">1857</p>
                <p class="desartisgambar1b">Penangkapan Pangeran Diponegoro</p>
                <p class="desartisgambar2a">1807</p>
                <p class="desartisgambar2b">Raden Saleh Syarif Bustaman</p>
                <p class="desartisgambar3a">1838</p>
                <p class="desartisgambar3b">Posthumous Portrait of Herman Willem Daendels</p>
                <p class="desartisgambar4a">1860</p>
                <p class="desartisgambar4b">Enam Pengendara Kuda Mengejar Rusa</p>
            </div>
            <div class="artiscelebrate">
                <p class="artiscelebrate1">Celebrate<br/>whit us</p>
                <p class="artiscelebrate2">70</p>
                <p class="artiscelebrate3">Years</p>
            </div>
        </div>
        <!-- artis -->

        <!-- FOOTER -->
        <div class="backgroundfooter" id="about">
            <ul>
                <li class="picaso2">
                    <img  src="img/picasso 2.png"/>
                </li>
                <li>
                    <a class="footersosmed">Jangan Lupa Mampir Sosial Media Kita</a>
                </li>
                <li class="sosmed">
                    <a href="https://www.instagram.com/kanniyoo/">
                        <img class="sosmedicon" src="img/fb icon.png"/>
                    </a>
                    <a href="https://www.instagram.com/kanniyoo/">
                        <img class="sosmedicon" src="img/ig icon.png"/>
                    </a>
                   <a href="https://www.instagram.com/kanniyoo/">
                    <img class="sosmedicon" src="img/twitter icon.png"/>
                   </a>
                </li>
            </ul>
        </div>
        <!-- FOOTER SELESAI -->

        <script src="main.js"></script>
    </body>
</html>