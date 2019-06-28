<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
<script src="../../assets/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../../assets/js/cufon-yui.js" type="text/javascript"></script>
<script src="../../assets/js/cufon-replace.js" type="text/javascript"></script>
<script src="../../assets/js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="../../assets/js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Ci<span>Tix</span></a></div>
          <ul>
            <li><a href="#"><img src="../../assets/images/icon1-act.gif" alt="" /></a></li>
            <li><a href="#"><img src="../../assets/images/icon2.gif" alt="" /></a></li>
            <li><a href="#"><img src="../../assets/images/icon3.gif" alt="" /></a></li>

          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="<?php echo base_url(); ?>index.php/client/index" >Home</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/client/about">About</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/client/artikel">Movie</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/client/kontak">Contacts</a></li>
            <li class="last"><a href="<?php echo base_url(); ?>index.php/client/list"class="active">Order Ticket</a></li>
          </ul>
        </div>
      </div>





<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<form method="post" action="pay">
  <?php
    // echo "<center><h1>".$_POST["judul"]; 
    // echo "</h1>";
    echo "<h2>".$_POST["jam"];
    echo "</h2>";
    echo "<h2>".$_POST["durasi"]." menit</h2></center>";
  ?>
  <input type="text" name="judul" hidden value="<?php echo $_POST['judul']; ?>">
  <input type="text" name="jam" hidden value="<?php echo $_POST['jam']; ?>">
  <input type="text" name="durasi" hidden value="<?php echo $_POST['durasi']; ?>">
  <input type="text" name="harga" hidden value="<?php echo $_POST['harga']; ?>">
  <center>
	<br>
  <div class="blue" style="background-color: white;width:190px;height: 60px;">
	<p style="color: #e62e00;font-size: 25px;margin-top: 5px;" >Layar</p></div><br><br><br><br><br>
  <?php
    foreach ($seat as $key) {
    }
    for ($i=1; $i<=$key->seat; $i++) {
      if ($i<=5) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;&nbsp;&nbsp";
      } 
    }
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach ($seat as $key) {
    }
    for ($i=6; $i<=$key->seat; $i++) {
      if ($i<=10) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;&nbsp;&nbsp";
      } 
    }

    echo "<br><br>";
    foreach ($seat as $key) {
    }
    for ($i=11; $i<=$key->seat; $i++) {
      if ($i<=15) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


    foreach ($seat as $key) {
    }
    for ($i=16; $i<=$key->seat; $i++) {
      if ($i<=20) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }


    echo "<br><br>";
    foreach ($seat as $key) {
    }
    for ($i=21; $i<=$key->seat; $i++) {
      if ($i<=25) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach ($seat as $key) {
    }
    for ($i=26; $i<=$key->seat; $i++) {
      if ($i<=30) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }
    echo "<br><br>";

    foreach ($seat as $key) {
    }
    for ($i=31; $i<=$key->seat; $i++) {
      if ($i<=35) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    foreach ($seat as $key) {
    }
    for ($i=36; $i<=$key->seat; $i++) {
      if ($i<=40) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }
    echo "<br><br>";
    foreach ($seat as $key) {
    }
    for ($i=41; $i<=$key->seat; $i++) {
      if ($i<=45) {
        echo "<input type='radio' name='seat' value='$i'>
                $i &nbsp;";
      } 
    }

  ?></center><br>
  <br><input type="submit" name="submit" value="Submit" style="margin-left: 100px; background-color: #e62e00; color: white;">
</form><br><br>


  <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf">Copyright &copy; 2010- All Rights Reserved</p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>