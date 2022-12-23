<?php
require 'functions.php';

$artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
?>


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
                        <a href=index.php class="home" >HOME</a>
                        <a href=# class="artist" onclick="return smoothScroll('artis')">ARTIST</a>
                        <a href=# class="support" onclick="return smoothScroll()">GALLERY</a>
                        <a href=# class="about" onclick="return smoothScroll('about')" >ABOUT</a>
                        <img class="searchicon" src="img/search icon.png"/>
                    </form>
                </li>
                <li class="bordernavbar">
                </li>
            </ul>
        </div>
            <!-- NAVBAR SELESAI -->


        <!-- gallery 1 -->
        <div class="containergalery">
            <ul class="tabel1">
                <img class="profilartis1" src="img/raden saleh.jpg" />
                <p class="namaartis1">Raden Saleh Sjarif Boestaman</p>
                <div class="karyaartis1">
                    <div class="containerslide">
                        <div class="content-slide">
                            <div class="imgslide fade">
                                <div class="numberslide">1 / 3</div>
                                <img class="gambarslider" src="img/penangkapanpangerandiponegoro.jpg" alt="">
                                <div class="text">
                                    <b>Penangkapan Pangeran Diponegoro</b>
                                    <p class="text2">Penangkapan Pangeran Diponegoro adalah sebuah lukisan 1857 karya Raden Saleh, yang menggambarkan ditangkapnya Pangeran Diponegoro oleh Letnan Jenderal Hendrik Merkus de Kock pada 28 Maret 1830.</p>
                                </div>
                            </div>
                
                            <div class="imgslide fade">
                                <div class="numberslide">2 / 3</div>
                                <img class="gambarslider" src="img/lion hunt.jpg" alt="">
                                <div class="text">
                                    <b>Lion Hunt</b>
                                    <p class="text2">Lukisan Memburu Singa merupakan salah satu tema karya perupa seni lukis Indonesia, Raden Saleh pada tahun 1840 dengan menggunakan media Oil Paint On Canvas. Lukisan ini merupakan lukisan realisme dengan gaya mooi indie. Dengan teknik melukis menggunakan cat minyak di atas kanvas.</p>
                                </div>
                            </div>
                
                            <div class="imgslide fade">
                                <div class="numberslide">3 / 3</div>
                                <img class="gambarslider" src="img/pemandangan jawa.jpg" alt="">
                                <div class="text">
                                    <b>Pemandangan Jawa, dengan Harimau yang Mendengarkan Suara Sekelompok Pengembara</b>
                                    <p class="text2">Lukisan tersebut diselesaikan oleh Raden Saleh pada tahun 1849 di Dresden, pusat budaya Saxony masa itu. Lukisan tersebut dihadiahkan ke teman dan mitranya Ernest II, Duke Saxe-Coburg & Gotha, yang kemudian diwariskan oleh anak kedua cicit dari Ratu Victoria dan Pangeran Albert.</p>
                                </div>
                            </div>

                            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
                            <a class="next" onClick="nextslide(1)">&#10095;</a> 
                        </div>
                
                        <div class="page">
                            <span class="dot" onClick="dotslide(1)"></span>
                            <span class="dot" onClick="dotslide(2)"></span>
                            <span class="dot" onClick="dotslide(3)"></span>
                        </div>
                </div>
            </ul>
        </div>
        <!-- gallery 1 -->

        </div>
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