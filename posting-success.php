
<?php
ob_start();
session_start();
require("core/config.php");
$weyd_user = $_SESSION['weyd_user'];
require_once("core/config.php");
require_once("core/ads-control.php");
    echo"<script>alert('your ads was posted successfully!');</script>";
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
<title>Posting Success</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

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
<div class="col-md-12 page-content">
<div class="inner-box category-content">
<div class="row">
<div class="col-lg-12">
<div class="alert alert-success pgray  alert-lg" role="alert">
<h2 class="no-margin no-padding">&#10004; Congratulations! <?php echo $weyd_user;?> Your ads will be available
soon...</h2>
<p>Your ads is currently under review, click here <a href="account-myads.php"> to view your ads</p>
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

<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#input-upload-img1").fileinput();
    $("#input-upload-img2").fileinput();
    $("#input-upload-img3").fileinput();
    $("#input-upload-img4").fileinput();
    $("#input-upload-img5").fileinput();


</script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.6/dist/posting-success.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 18:26:53 GMT -->
</html>
