<!DOCTYPE html>
<!--
Template Name: Merciano
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>IWWM Photography</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url('assets/layout/styles/layout.css')?>" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url(<?php echo base_url('assets/images/demo/backgrounds/01.jpg')?>);"> 
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h2 class="heading">IWWM</h2>
        <p>The Journal of Photography. People & Travels</p>
        <footer><a class="btn" href="#aboutme">About Me</a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">IWWM</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#pages">Pages</a></li>
          <li><a class="drop" href="#tours">Tours</a></li>
              <li><a href="#">Level 2</a></li>
        </ul>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-50 center" id="tours">
      <h3 class="btmspace-10">A Journey to Flores with Compastrip</h3>
      Road Trip di Turki Selatan: Bikin Mata selalu melek! Ini Alasannya.
22-27 Februari 2018 menjadi salah satu momen berharga di tahun 2018. Memang baru terhitung 2 bulan, tapi bila teringat kembali, ada ribuan momen yang sudah terekam mata. Salah satunya adalah perjalanan menyinggahi beberapa kota bersejarah di Turki bersama Qatar Airways & Sors Travel.

Qatar Airways kini membuka penerbangan baru menuju Adana, kota yang sangat asing di telinga saya. Mendengar kata Turki, semua orang pasti berucap Istanbul atau Cappacodia. Ketika pihak Qatar Airways menghubungi saya dan mengkonfirmasi perjalanan kami akan dimulai dari Adana, saya sangat excited untuk melihat sisi lain dari Negara yang 99%nya beragama Islam ini.

Road Trip kami dimulai dari kota Adana. Menelusuri sejarah kota ini membuat saya tak berhenti berdecak kagum. Spot pertama kami adalah Taşköprü, jembatan batu tertua di Adana. Jembatan yang umurnya ratusan tahun ini berada di jantung kota Adana. Dari jembatan ini, kami bisa menyaksikan kemegahan Masjid Sabanci yang dibangun oleh salah satu saudagar kaya raya pada tahun 1998. Kami melangkah ditemani oleh suara-suara burung yang menunggu santapan roti dari kami. Burung-burung ini senantiasa berputar-putar di sekitar jembatan, memberikan foreground yang indah dengan objek utama Masjid Sabanci ketika diabadikan.

Tak hanya megah di luar, ketika mengamati lebih dekat, rasa kagum kami semakin menjadi-jadi. Keagungan arsitektur masjid, dibalut dengan interior yang sangat detail, benar-benar membuat mata takjub ketika melangkah masuk menuju ruangan utama Masjid Sabanci.
    </div>
    <div class="latest">
      <article class="clear">
        <?php foreach ($isi as $data) { ?>

          <h3 class="heading"><img src="../../assets/images/demo/gallery/t1.jpg" width="1299" height="937"></h3>
          <p class="heading"><img src="../../assets/images/demo/gallery/t2.jpg" width="1300" height="974"></p>
          <p class="heading"><img src="../../assets/images/demo/gallery/t3.jpg" width="1300" height="866"></p>
          <p class="heading"><img src="../../assets/images/demo/gallery/t4.jpg" width="1300" height="974"></p>
          <p class="heading"><img src="../../assets/images/demo/gallery/t5.jpg" width="1300" height="974"></p>
          <p class="heading"><img src="../../assets/images/demo/gallery/t6.jpg" width="1100" height="1375"></p>
        </div>
        <?php } ?>
      </article>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url('assets/layout/scripts/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/layout/scripts/jquery.backtotop.js')?>"></script>
<script src="<?php echo base_url('assets/http://maps.google.com/maps/api/js?sensor=false')?>  "></script>
<script src="<?php echo base_url('assets/layout/scripts/gmaps.js')?>"></script>
</body>
</html>