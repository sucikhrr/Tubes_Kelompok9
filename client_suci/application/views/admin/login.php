<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ADMIN</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<style>
body
{
	background-color:  #1a1a1a;
}
.a
{
	margin-left: 300px;
	border-style: solid;
  border-width: 5px;
  border-color: #e62e00;
  width: 650px;
  height: 400px;
  margin-top: 100px;
}
#set
{
	margin-left: 60px;
}

h2{
	color:  #e62e00;
	font-family: Monotype Corsiva;
	font-size: 40px;
	margin-top: 100px;
	margin-left: 180px;
	}
#user1
{
	color: #e68a00;
	font-size: 22px;
	font-family: Time new Roman;
}

#pass1
{
	color: #e68a00;
	font-size: 22px;
	font-family: Time new Roman;
}
#tombol
{
	margin-left: 370px;
	background-color: #e68a00;
	color: white;
}
</style>




</head>

<body>
	<?php
echo form_open('admin/login');
?>
<div class="a">
<div class="container" id="set">
  <h2>Form Login</h2><br>
  <form class="form-horizontal" action="/action_page.php">

    <div class="form-group">
      <label class="control-label col-sm-2" for="username" id="user1">Username:</label>
      <div class="col-sm-10" id="user2">
        <input type="text" class="form-control" id="text" placeholder="Enter Username" name="username" style="width: 280px">
      </div>
    </div><br><br>
    <div class="form-group" >
      <label class="control-label col-sm-2" for="password"id="pass1">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" style="width: 280px">
      </div>
    </div>
    </div><br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit" id="tombol">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>


<!-- <?php
/*echo form_open('Client/login');*/
?>

<input type="text" name="username" placeholder="username"><br>
<input type="password" name="password" placeholder="password">

<button type="submit" name="submit">Login</button>
</form> -->
</body>
</html>



