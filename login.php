<?php
include("core/sqlicon.php");
 include("core/login.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>Weyd-Login</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">



<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<?php include("defines/header.php");?>

<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-5 login-box">
<div class="panel panel-default">
<div class="panel-intro text-center">
<h2 class="logo-title">

<span class="logo-icon"> <img src="assets/ico/favicon.ico" style=""></span> WEYD
</h2>
</div>
<div class="panel-body">
<form method="post" action="">
<div class="form-group">

<label for="sender-email" class="control-label">Email:</label>
<div class="input-icon"><i class="icon-user fa"></i>
<input  name="email"type="email" placeholder="<?php echo$user;?>" class="form-control email">
</div>
</div>
<div class="form-group">
<label for="user-pass" class="control-label">Password:</label>
<div class="input-icon"><i class="icon-lock fa"></i>

<input type="password"name="password" class="form-control" placeholder="Password" id="user-pass">
</div>
</div>
<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary  btn-block"value="Login"/>
</div>
</form>
</div>


<fb:login-button
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
<div class="panel-footer">

<p class="text-center pull-right"><a href="forgot-password.php"> Lost your password? </a>
</p>
<div style=" clear:both"></div>
</div>
</div>
<div class="login-box-btm text-center">
<p> Don't have an account? <br>
<a href="signup.php"><strong>Sign Up !</strong> </a></p>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php");?>

</div>



<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/form-validation.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>
