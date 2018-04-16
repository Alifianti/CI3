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
<div class="bgded overlay" style="background-image:url(<?php echo base_url('assets/images/demo/backgrounds/01.jpg')?>);"> 
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <article>
        <h2 class="heading">IWWM</h2>
        <p>The Journal of Photography. People & Travels</p>
        <footer><a class="btn" href="#aboutme">About Me</a></footer>
      </article>
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">IWWM</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="<?php echo base_url()."coba" ?>">Home</a></li>
          <li><a class="drop" href="#pages">Pages</a></li>
          <li><a class="drop" href="#tours">Tours</a></li>
              <li><a href="#">Level 2</a></li>
        </ul>
          </li>
        </ul>
      </nav>
    </header>
  </div>
</div>

<div class="wrapper row3">
  <section class="hoc container clear"> 
    <?php foreach ($isi as $data) { ?>
    <div class="btmspace-50 center" id="tours">
      <h3 class="btmspace-10"><?php echo $data['judul']; ?></h3>
      
    </div>
    <div class="latest">
      <article class="clear">
        
          <h3 class="heading"><img src="<?php echo base_url('images/'.$data['img']); ?>" width="1299" height="937"></h3>
          <div class="btmspace-50 center" id="tours">
            <h3 class="btmspace-10"><?php echo $data['caption']; ?></h3>
          </div>
        </div>
      </article>
      <p class="center"><a class="btn inverse" href="<?php echo site_url('coba/edit_data/').$data['id'];?>">Edit</a>
      <a class="btn inverse" href="<?php echo site_url('coba/do_delete/').$data['id'];?>">Delete</a></p>
    </div>
        <?php } ?>
    
    <div class="clear"></div>
  </section>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url('assets/layout/scripts/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/layout/scripts/jquery.backtotop.js')?>"></script>
<script src="<?php echo base_url('assets/http://maps.google.com/maps/api/js?sensor=false')?>  "></script>
<script src="<?php echo base_url('assets/layout/scripts/gmaps.js')?>"></script>
</body>
</html>