
<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
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
        <li><a  href="<?php echo base_url();?>Client">HOME</a></li>
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
         <div class="head">
          <h2>Now Showing</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Man In Black</span></span> <a href="#"><img src="<?php echo base_url();?>assets/css/images/maninblack.jpg" alt="" /></a> </div>
         
        <div class="movie">
          <table>
  <?php foreach ($mahasiswa as $mhw)
  {
    if($mhw->id==1)
    {
      echo "$mhw->title &nbsp Rp.$mhw->harga<br>$mhw->durasi menit<br><br>";
      foreach ($time as $key) 
      {
        if($key->id<=3)
        {
          ?><form action="seat" method="post">
            <input type="text" name="jam" hidden value="<?php echo $key->time;?>">
            <input type="text" name="harga" hidden value="<?php echo $mhw->harga;?>">
            <input type="text" name="durasi" hidden value="<?php echo $mhw->durasi;?>">
            <input type="text" name="judul" hidden value="<?php echo $mhw->title;?>">
            <?php echo "<tr><input type='submit' value='$key->time'></tr>";
                  echo "</form>";
        }
      }
    }
  }
  ?>


        </div>
        
       
</font>
<table>

  <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">X-Men : Dark pheonix</span></span> <a href="#"><img src="<?php echo base_url();?>assets/css/images/xmen.jpeg" alt="" /></a> </div>
         
        <div class="movie">
          <table>
  <?php foreach ($mahasiswa as $mhw)
  {
    if($mhw->id==2)
    {
      echo "$mhw->title &nbsp Rp.$mhw->harga<br>$mhw->durasi menit<br><br>";
      foreach ($time as $key) 
      {
        if($key->id<=3)
        {
          ?><form action="seat" method="post">
            <input type="text" name="jam" hidden value="<?php echo $key->time;?>">
            <input type="text" name="harga" hidden value="<?php echo $mhw->harga;?>">
            <input type="text" name="durasi" hidden value="<?php echo $mhw->durasi;?>">
            <input type="text" name="judul" hidden value="<?php echo $mhw->title;?>">
            <?php echo "<tr><input type='submit' value='$key->time'></tr>";
                  echo "</form>";
        }
      }
    }
  }
  ?>


        </div>
        
       
</font>
<table>
 <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">Toy Story 4</span></span> <a href="#"><img src="<?php echo base_url();?>assets/css/images/toystory.jpg" alt="" /></a> </div>
         
        <div class="movie">



  <div class="movie">
          <table>
  <?php foreach ($mahasiswa as $mhw)
  {
    if($mhw->id==3)
    {
      echo "$mhw->title &nbsp Rp.$mhw->harga<br>$mhw->durasi menit<br><br>";
      foreach ($time as $key) 
      {
        if($key->id<=3)
        {
          ?><form action="seat" method="post">
            <input type="text" name="jam" hidden value="<?php echo $key->time;?>">
            <input type="text" name="harga" hidden value="<?php echo $mhw->harga;?>">
            <input type="text" name="durasi" hidden value="<?php echo $mhw->durasi;?>">
            <input type="text" name="judul" hidden value="<?php echo $mhw->title;?>">
            <?php echo "<tr><input type='submit' value='$key->time'></tr>";
                  echo "</form>";
        }
      }
    }
  }
  ?>


        </div>
        
       
</font>

        
      
     
    </div>

   
</body>
</html>