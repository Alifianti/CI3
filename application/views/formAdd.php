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

<?php echo validation_errors(); ?>

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url(<?php echo base_url('assets/images/demo/backgrounds/01.jpg')?>);"> 
  
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      
      <div class="btmspace-50">
  
    <?php echo form_open('data/do_insert')?>
  <form>
    
    <br>
    <div class="form-group">
      <label for="judul">Tempat</label>
      <input type="text" class="btn btn-default" placeholder="Tempat" name="tempat" value="<?php echo set_value('tempat')?>">
    </div>
    <br>
    
    <div class="form-group">
      <label for="judul">Harga</label>
      <input type="text" class="btn btn-default" placeholder="Harga Masuk" name="harga_masuk" value="<?php echo set_value('harga_masuk')?>">
    </div>
    <br>
    <button type="submit" name="btnSubmit" class="btn btn-default">Upload</button>
  </form>
</div>

      
    </div>
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