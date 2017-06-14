<?php
session_start();
ob_start();
if(!$_SESSION['weyd_user']){
  header("location:login.php");
}else{
include("core/sqlicon.php");
 if(isset($_POST['add-cats'])){

     if(empty($_POST['cats-name'])){
       echo"<script>alert('Category name cannot be blank');
       window.location='add-category.php';</script>";
     }else{
       $cat_name = $_POST['cats-name'];
       $name = $_SESSION['weyd_user'];
       $sql ="INSERT INTO new_category(category,added_by) VALUES('$cat_name','$name')";
       $query = $mysqli->query($sql);
       if($query){
        echo"<script>alert('Your category has been added successfully, wait untill it completes 5');
        window.location ='index.php';</script>";
       }else{
        echo"<script>alert('Your order could not be completed!');
        window.location ='add-category.php';</script>";
       }

   }


 }
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

<label for="sender-email" class="control-label">Category Name</label>
<div class="input-icon"><i class="icon-user fa"></i>
<input  name="cats-name"type="text" placeholder="e.g Food and Agriculture" class="form-control email">
</div>
</div>

<div class="form-group">
<input type="submit" name="add-cats" class="btn btn-primary  btn-block"value="Add"/>
</div>
</form>
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

<script src="assets/js/form-validation.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
