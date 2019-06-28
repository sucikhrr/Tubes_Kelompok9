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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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


<center>
<table class="table table-dark table-hover" style="width: 470px;height: 200px; font-size: 20px;text-align: center;">
<br><br><br><br><br>
<?php
    echo "<tr><td>Judul</td><td>".$_POST["judul"]; 
    echo "</td></tr>";
    echo "<tr><td>Time</td><td>".$_POST["jam"];
    echo "</td></tr>";
    echo "<tr>><td>Seat</td><td>".$_POST["seat"]."</td></tr>";
    echo "<tr><td>Duration</td><td>".$_POST["durasi"]." menit</td></tr>";
    echo "<tr><td>Price</td><td>Rp.".$_POST["harga"]."</td></tr>";
  ?>
</table>
</center>

<br><br><br>



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