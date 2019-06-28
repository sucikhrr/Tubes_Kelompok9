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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
      <br><br><br>
      

<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table>
 
  <?php foreach ($mahasiswa as $mhw)
  {
    if($mhw->id==1)
    {
      echo "<div class='row'>
            <div class='col-sm-4'>";
      echo "<img src='../../assets/images/mb.jpg' style='width:210px; height:300px;'><br></div>";
      echo "<div style='color:white;font-size:25px;'>$mhw->title <br>";
      echo "<a style='color:white;font-size:16px;'>
             Genre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action,Comedy,Sci-fi <br>
             
             Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $mhw->durasi minutes<br>
             Sutradara &nbsp;&nbsp;&nbsp;  F.Gary Gray <br>
             Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.$mhw->harga<br>
             Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA</div></div><br>";
    echo "<p style='font-size:25px;'> Schedule </p>";
      foreach ($time as $key) 
      {
        if($key->id<=3)
        {
  ?>
            <form action="seat" method="post">
            <input type="text" name="jam" hidden value="<?php echo $key->time;?>">
            <input type="text" name="harga" hidden value="<?php echo $mhw->harga;?>">
            <input type="text" name="durasi" hidden value="<?php echo $mhw->durasi;?>">
            <input type="text" name="judul" hidden value="<?php echo $mhw->title;?>">
            
            <?php echo "<tr><input type='submit' value='$key->time'style='color:black;width:90px; height:40px;'></tr>";
                  echo "</form>";
        }
      }
    }
  }
  ?>

 <?php echo"<br><br><br><br><br>" ?>
  <?php foreach ($mahasiswa as $mhw)
  {
    if($mhw->id==2)
    {
      echo "<div class='row'>
            <div class='col-sm-4'>";
      echo "<img src='../../assets/images/ty.jpg' style='width:210px; height:300px;'><br></div>";
      echo "<div style='color:white;font-size:25px;'><p style='color:white;font-size:25px;'>$mhw->title</p>";
      echo "<a style='color:white;font-size:16px;'>
             Genre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animation,Comedy,Adventure <br>
             
             Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $mhw->durasi minutes<br>
             Sutradara &nbsp;&nbsp;&nbsp;  John Cooley <br>
             Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.$mhw->harga<br>
             Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA<br>
             </div></div><br>";
    echo "<p style='font-size:25px;'> Schedule </p>";

      foreach ($time as $key) 
      {
        if($key->id<=2)
        {
          ?><form action="seat" method="post">
            <input type="text" name="jam" hidden value="<?php echo $key->time;?>">
            <input type="text" name="harga" hidden value="<?php echo $mhw->harga;?>">
            <input type="text" name="durasi" hidden value="<?php echo $mhw->durasi;?>">
            <input type="text" name="judul" hidden value="<?php echo $mhw->title;?>">
            <?php echo "<tr><input type='submit' value='$key->time' style='color:black;width:90px; height:40px;'></tr>";
                  echo "</form>";
        }
      }
    }
  }
  ?>
  <br><br><br>


  <?php foreach ($mahasiswa as $mhw)
  {
    if($mhw->id==3)
    {
      echo "<div class='row'>
            <div class='col-sm-4'>";
      echo "<img src='../../assets/images/x.jpg' style='width:210px; height:300px;'><br></div>";
      echo "<div style='color:white;font-size:25px;'><p style='color:white;font-size:25px;'>$mhw->title</p>";
      echo "<a style='color:white;font-size:16px;'>
             Genre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action,Sci-fi,Adventure <br>
             
             Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $mhw->durasi minutes<br>
             Sutradara &nbsp;&nbsp;&nbsp;  Simon Kinberg <br>
             Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.$mhw->harga<br>
             Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA<br>
             </div></div><br>";
    echo "<p style='font-size:25px;'> Schedule </p>";

      foreach ($time as $key) 
      {
        if($key->id<=1)
        {
          ?><form action="seat" method="post">
            <input type="text" name="jam" hidden value="<?php echo $key->time;?>">
            <input type="text" name="harga" hidden value="<?php echo $mhw->harga;?>">
            <input type="text" name="durasi" hidden value="<?php echo $mhw->durasi;?>">
            <input type="text" name="judul" hidden value="<?php echo $mhw->title;?>">
            <?php echo "<tr><input type='submit' value='$key->time' style='color:black;width:90px; height:40px;'></tr>";
                  echo "</form>";
        }
      }
    }
  }
  ?>
</table>

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