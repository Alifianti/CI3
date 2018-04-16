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
      <div class="btmspace-50">
  <h2>Add Gambar</h2>
    <?php echo form_open_multipart('coba/do_insert')?>
  <form>
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="btn btn-default" placeholder="Judul" name="judul">
    </div>
    <br>
    <div class="form-group">
      <label for="judul">Tempat</label>
      <input type="text" class="btn btn-default" placeholder="Tempat" name="tempat">
    </div>
    <br>
    <div class="form-group">
      <label for="judul">Tanggal</label>
      <input type="date" class="btn btn-default" name="tgl">
    </div>
    <br>
    <div class="form-group">
      <label for="judul">Caption</label>
      <textarea class="btn btn-default" name="caption"></textarea> 
    </div>
    <div class="btmspace-50">
      <label for="judul">gambar</label>
      <input type="file" class="btn btn-default" placeholder="Upload" name="userfile">
    </div>
    
    <button type="submit" name="btnSubmit" class="btn btn-default">Upload</button>
  </form>
</div>

      <!-- ################################################################################################ -->
    </div>
  </div>
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