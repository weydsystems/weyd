<?php
require('config.php');
require("adminclass.php");

 ?>

<!DOCTYPE html>
<html>

<head>
  <title>Weyd - Admin</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="font-awesome.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
    <!-- jQuery library -->
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled JavaScript -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
	<div id="login-center">
		<form method="post" action="" class="l-form">
			<div class="img-responsive" style="margin-bottom: 10px;">
				<center>
				<img src="img/img.png" class="img-circle" style="width: 30%">
				</center>
			</div>
			<div class="form-group">
				<input type="text" name="uname" placeholder="Username" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
			<input type="submit" name="login"class="btn btn-block btn-success" value="Login">
			<p style="margin-top: 5%">&larr; Back to <a style="color: #000" href="weyd.com.ng">Weyd.com.ng</a></p>
		</form>
	</div>
</div>
</body>

</html>
