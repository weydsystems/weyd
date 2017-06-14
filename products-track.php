<?php
require_once("core/config.php");
require_once("core/tracker.php");


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
<title>Track Products | weyd.com.ng</title>

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
<div class="col-md-8 page-content">
<div class="inner-box category-content">
<h2 class="title-2"><i class="icon-user-add"></i> Your tracking a products with:  ID </h2>
<div class="row">
<div class="col-sm-12">
<form method="post" action=""class="form-horizontal">
<fieldset>

<div class="form-group required">
<label class="col-md-4 control-label">Full Name<sup>*</sup></label>
<div class="col-md-6">
  <span id="error"><?php echo $fnameError;?></span>
<input name="fullname" placeholder="Full Name" class="form-control input-md"  type="text">
</div>
</div>
<div class="form-group required">
<label for="inputEmail3" class="col-md-4 control-label">E-mail
<sup>*</sup></label>
<div class="col-md-6">
<input type="email" name="email"class="form-control" placeholder="E-mail"id="inputEmail3">
</div>
</div>

<div class="form-group required">
<label class="col-md-4 control-label">Phone Number <sup>*</sup></label>
<div class="col-md-6">
<input name="phone" placeholder="Phone Number" class="form-control input-md" type="text">
</div>
</div>



<div class="form-group required">
<label class="col-md-4 control-label">Residential Address <sup>*</sup></label>
<div class="col-md-6">
<input name="address" placeholder="Residential address" class="form-control input-md" type="text">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8">
<div class="termbox mb10">
<label class="checkbox-inline" for="checkboxes-1">
<input name="checkboxes" id="checkboxes-1" value="1" type="checkbox">
I have read and agree to the <a href="terms-conditions.php">Terms
& Conditions</a> </label>
</div>
<div style="clear:both"></div>
<input type="submit" name="track" class="btn btn-primary" value="Submit"></div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>

<div class="col-md-4 reg-sidebar">
<div class="reg-sidebar-inner text-center">
<div class="promo-text-box"><i class="fa fa-users" style="color:#145d5d; font-size:50px;"></i>
<h3><strong>Post a Free Classified</strong></h3>
<p> Post your free online classified ads on weyd and get connected to real buyers. </p>
</div>
<div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>
<h3><strong>Create and Manage Items</strong></h3>
<p>Managing option ranges from creating of ads to deleting of unwanted ads from being posted.</p>
</div>
<div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>
<h3><strong>Create your Favorite ads list.</strong></h3>
<p>What would you like to sell on weyd? sell anything that is best for you, the market is free and open for sellers to interact with buyers</p>
</div>
</div>
</div>
</div>

</div>

</div>

<?php include("footer.php");?>
</div>

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

</html>
