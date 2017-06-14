

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
<title>Password reset | Weyd</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
<script src="jquery.min.js"></script>
<script>
        paceOptions = {
            elements: true
        };
        $(document).ready(function(){
          $("#b2").hide();
        });
    </script>
<script src="assets/js/pace.min.js"></script>
<?php
session_Start();
include("core/config.php");
// include("core/reset-pass-control.php");
//7SMHQE
if(isset($_POST['submit'])){
if(empty($_POST['email'])){
  echo"<script>alert('Email cannot be blank');</script>";
}else{
  function Gen($length =6) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRST';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $first  = Gen();
  $md = md5($first);
  $e = $_POST['email'];
$b = $pdo->prepare("SELECT * FROM users WHERE email='$e'");
$b->execute(array($_POST['email']));
$rows = $b->fetch(PDO::FETCH_ASSOC);
$newemail = $rows['email'];
if($newemail==$_POST['email']){
  echo"<script>
alert('Your password has been sent to $first your mail, kindly login and check');
  window.location='login.php';
  </script>";
$subject ="Password change\n\n";
$from ="support@weyd.com.ng\n";
$message ="Dear".$rows['firstname'].", your request to change password was successful\n.\n Find your login details below\n
New password:\t".$first." ";
  mail($e, $subject, $message,$from,"SoodarSoft Limited");
  $update = $pdo->prepare("UPDATE users SET password='$md' WHERE email='$e'");
  $update->execute();

}else{
  echo"<script>alert('User with $e does not exist!');</script>";
}
}
}
 ?>

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

<span class="logo-icon"><img src="assets/ico/favicon.ico" style="">
</span>Weyd<span></span>
</h2>
</div>
<div class="panel-body" id="panel">
<form method="post" action=""role="form">
<div class="form-group">
<label for="sender-email" class="control-label">Email:</label>
<div class="input-icon"><i class="icon-user fa"></i>
<input id="sender-email" name="email"type="text" placeholder="Email" class="form-control email">
</div>
</div>
<div class="form-group">
<button type="submit" name="submit"class="btn btn-primary btn-lg btn-block">Send me my password
</button>
</div>
</form>
</div>
<div class="panel-footer">
<p class="text-center "><a href="login.php"> Back to Login </a></p>
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

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.6/dist/forgot-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 18:26:46 GMT -->
</html>
