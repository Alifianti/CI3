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
<title>Merciano</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('assets/images/demo/backgrounds/01.jpg');"> 
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
  <main class="hoc container clear"> 
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="btmspace-50 center" id="pages"> 
      <h3 class="btmspace-10">GALERY</h3>
      <p class="nospace">The Journal of Photography</p>
    </div>
    <ul class="nospace clear services">
      <li class="one_quarter first"><a href="#">
        <figure><img src="assets/images/demo/gallery/001.jpg" width="300" height="300">
          <figcaption>Exploring the Hidden Paradise of Nusa Penida with Visit Nusa Penida</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="assets/images/demo/gallery/002.jpg" width="300" height="200">
          <figcaption>A Journey to Flores with Compastrip</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="assets/images/demo/gallery/003.jpg" width="300" height="200">
          <figcaption>Wonderful Indonesia</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="assets/images/demo/gallery/004.jpg" width="300" height="200">
          <figcaption>Road Trip in South Turkey with @qatarairways & @sorstravel</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter first"><a href="#">
        <figure><img src="assets/images/demo/gallery/005.jpg" width="300" height="200">
          <figcaption>One Day at Sthala, A Tribute Portfolio Hotel</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="assets/images/demo/gallery/006.jpg" width="300" height="200">
          <figcaption>Exploring The Blue Paradise, Maldives with @maldiveslowbudget</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="assets/images/demo/gallery/007.jpg" width="300" height="200">
          <figcaption>Central Bali Adventure</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure><img src="assets/images/demo/gallery/008.jpg" width="300" height="300">
          <figcaption>Exploring Nusa Penida with Visit Nusa Penida</figcaption>
        </figure>
        </a></li>
    </ul>
    <p class="center"><a class="btn inverse" href="#">Ornare scelerisque</a></p>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('assets/images/demo/backgrounds/02.jpg');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="testimonial clear" id="aboutme">
      <blockquote>Wahyu Mahendra (@iwwm) is a photographer based in Bali, Indonesia. Wahyu's lifestyle as a travel and photographer makes him an attractive and exciting options for brands looking for adventure, travel and lifestyle content! His ability to craft a story in a creative and compelling way is what makes him an asset to any brand.</blockquote>
      <figure><img class="circle" src="assets/images/demo/gallery/11.jpg" alt="">
        <figcaption><strong>A.Doe</strong><br>
          <em>Job / Title</em></figcaption>
      </figure>
    </div>
    <p class="center"><a class="btn" href="#">Contact Person</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-50 center" id="tours">
      <h3 class="btmspace-10">TOURS</h3>
      
    </div>
    <div class="latest">
      <article class="clear">
        <?php foreach ($isi as $data) { ?>
        <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#">
          <img src="<?php echo base_url('assets/images/demo/gallery/'.$data['img']); ?>" alt=""></a></div>
        <div class="one_half">
          <h3 class="heading"><?php echo $data['caption']; ?></h3>
          <ul class="nospace meta">
            <li>
              <time datetime="<?php echo $data['tgl']; ?>">10<sup>th</sup> Februari 2018</time>
            </li>
            <li>by <a href="#">Admin</a></li>
          </ul>
          <p><?php echo $data['judul']; ?> &hellip;</p>
          <footer><a class="btn" href="#">Read More</a></footer>
        </div>
        <?php } ?>
      </article>
      <article class="clear">
        <div class="one_half first">
          <h3 class="heading">Aliquam vel quisque nec dolor ullamcorper lacinia ut nec dictum ipsum</h3>
          <ul class="nospace meta">
            <li>
              <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
            </li>
            <li>by <a href="#">Admin</a></li>
          </ul>
          <p>Sed vulputate mauris proin fermentum vitae diam non hendrerit vivamus pharetra interdum augue ut dignissim aenean placerat lectus ullamcorper malesuada sodales massa urna pulvinar&hellip;</p>
          <footer><a class="btn" href="#">Read More</a></footer>
        </div>
        <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img src="images/demo/540x333.png" alt=""></a></div>
      </article>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <section class="hoc container center clear"> 
    <!-- ################################################################################################ -->
    <p class="font-xs"><a href="#">Sollicitudin neque mauris ut</a></p>
    <h3 class="btmspace-10">Nibh mauris dapibus bibendum neque</h3>
    <p class="nospace">Sed at augue consectetur ultricies elit semper facilisis quam aliquam</p>
    <!-- ################################################################################################ -->
  </section>
  <div class="gmap clear"> 
    <!-- ################################################################################################ -->
    <div id="gmapcanvas"><!-- Leave Empty --></div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Scelerisque luctus</h6>
      <address class="btmspace-30">
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Fringilla eu efficitur</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Dictum dui quisque</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Lacinia gravida accumsan proin tincidunt auctor pharetra mauris id luctus tellus morbi eu magna sit amet.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Lacus rutrum volutpat</h6>
      <ul class="nospace linklist">
        <li><a href="#">Lobortis cursus sodales</a></li>
        <li><a href="#">Libero at iaculis sem morbi</a></li>
        <li><a href="#">Sed augue in sapien facilisis</a></li>
        <li><a href="#">Sollicitudin ut nec felis</a></li>
        <li><a href="#">Praesent maximus quam</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Vel feugiat sem nulla</h6>
      <p>Sit amet egestas porttitor metus ante ornare ipsum iaculis dapibus ante est.</p>
      <p>Convallis elit sagittis dapibus interdum proin a diam vel quam suscipit pharetra.</p>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
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
<script src="assets/layout/scripts/jquery.min.js"></script>
<script src="assets/layout/scripts/jquery.backtotop.js"></script>
<script src="assets/layout/scripts/jquery.mobilemenu.js"></script>
<script src="assets/http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/layout/scripts/gmaps.js"></script>
</body>
</html>