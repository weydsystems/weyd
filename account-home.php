<?php
ob_start();
session_Start();

require("core/config.php");
require("core/sqlicon.php");
if(!$_SESSION['weyd_user']){
  header("location:login.php");

}else{


  include("core/welcome-home.php");
  include("core/my-ads.php");
//   $url=$_SERVER['HTTP_REFERER'];
//   echo"<script>alert('$url');</script>";
//
// if($url=="http://localhost/weyd/seller-profile.php"){
//
//     header("location:$url");
//   }

  if(isset($_POST['update-pass'])){
  $pass =md5($_POST['password']);
  if(isset($_POST['password'])==isset($_POST['password2'])){
    $up =$pdo->prepare("UPDATE users SET password ='$pass' WHERE firstname ='$user'");
    $gp =$up->execute(array($_POST['password']));
    if($gp){
echo"<script>alert('password successfully changed!');
window.location ='account-home.php';

</script>";

    }

  }else{
    echo"<script>alert('password do mismatch');</script>";
  }

  }



  //update my details

//   if(isset($_POST['updateme'])){
//     $upme =$pdo->prepare("UPDATE users SET firstname =?, lastname =?, email=?, phone= ? WHERE firstname ='$user'");
//     $gpme =$upme->execute(array($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['phone']));
//     if($gpme){
// echo"<script>alert('Details updated successfully');
// window.location ='account-home.php';
//
// </script>";
//
//     }else{
//     echo"<script>alert('Could not update');</script>";
//   }
//   }

  }

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

<?php include("defines/account-header.php");?>

<div class="main-container">
<div class="container">
<div class="row">
<?php include("defines/account-sidebar.php");?>
<div class="col-sm-9 page-content">
<div class="inner-box">
<div class="row">
<div class="col-md-5 col-xs-4 col-xxs-12">
<h3 class="no-padding text-center-480 useradmin"><a href="#">

  <img class="userImg" src="userprofiles/<?php echo$userRow['profile_picture']; ?>" alt="user">
  <?php echo"welcome back, ".strtoupper($userRow['firstname']);

  ?>


</a></h3>
<?php
$ar = uniqid(openssl_random_pseudo_bytes(100));
$met = bin2hex(openssl_random_pseudo_bytes(400));
if(empty($userRow['address'])){
echo"<span style='color:red; font-size:15px;'>your profile is 95% complete</span>
<span style='color:yellow; font-size:15px;'>

<a href='updateme.php?wyd=$ar&&metro=$met'>Click here to update</a>

</span>

";
}

?>
</div>
<div class="col-md-7 col-xs-8 col-xxs-12">
<div class="header-data text-center-xs">

<div class="hdata">
<div class="mcol-left">
<a href="seller-profile.php">
<i class="fa fa-users ln-shadow"></i></div>
<div class="mcol-right">

<p><?php echo$count3;?> <em>Followers</em></p>
</div>
</a>
<div class="clearfix"></div>
</div>

<div class="hdata">
<div class="mcol-left">

<i class="icon-th-thumb ln-shadow"></i></div>
<div class="mcol-right">

<p><a href="#"><?php echo$count1;?></a><em>Ads</em></p>
</div>
<div class="clearfix"></div>
</div>

<div class="hdata">
<div class="mcol-left">

<i class="fa fa-user ln-shadow"></i></div>
<div class="mcol-right">

<p><a href="#"><?php echo$count2;?></a> <em>Favorites </em></p>
</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
</div>
<div class="inner-box">
<div class="welcome-msg">
<h3>Your seller id is: <?php echo $userRow['seller_id'];?></h3>
</div>

<!-- my deetails -->
<?php require_once("core/my-details.php");?>
<!-- user blured details -->
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#collapseB2" data-toggle="collapse"> Settings </a>
</h4>
</div>
<div class="panel-collapse collapse" id="collapseB2">
<div class="panel-body">
<form method="post" action=""class="form-horizontal" role="form">
<div class="form-group">
<div class="col-sm-12">

</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">New Password</label>
<div class="col-sm-9">
<input type="password" name="password"class="form-control" placeholder="Password">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Confirm Password</label>
<div class="col-sm-9">
<input type="password" name="password2"class="form-control" placeholder="Confirm Password">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" name="update-pass"class="btn btn-default">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#collapseB3" data-toggle="collapse">
Preferences </a></h4>
</div>
<div class="panel-collapse collapse" id="collapseB3">
<div class="panel-body">
<div class="form-group">
<div class="col-sm-12">
<div class="checkbox">
<label>
<input type="checkbox">
I want to receive newsletter. </label>
</div>
<div class="checkbox">
<label>
<input type="checkbox">
I want to receive advice on buying and selling. </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

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

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.6/dist/account-home.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 18:25:20 GMT -->
</html>
