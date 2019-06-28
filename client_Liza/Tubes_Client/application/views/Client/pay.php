  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHunter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="<?php echo base_url();?>Client">MovieHunter</a></h1>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <li><a  href="#">HOME</a></li>
        <li><a class="active" href="#">TICKET</a></li>
        <li><a href="#">COMING SOON</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
    <div id="sub-navigation">
      
      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="content">
      <div class="box">
     <?php
    echo "<center><h1>".$_POST["judul"]; 
    echo "</h1>";
    echo "<h2>".$_POST["jam"];
    echo "</h2>";
    echo "<h3>".$_POST["seat"]."</h3>";
    echo "<h3>".$_POST["durasi"]." menit</h3>";
    echo "<h3>Rp.".$_POST["harga"]."</h3></center>";
  ?>

    </div>

   
</body>
</html>