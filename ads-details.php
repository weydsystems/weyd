<?php
ob_start();
session_Start();
require("core/config.php");
require_once("core/ads-listener.php");
if(isset($_GET['order'])){
  echo"<script>alert('weyd tracking system is not available now...');

window.location='index.php';
  </script>";
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
<title><?php echo $ads_file['ads_title'];?> on weyd.com.ng</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="description" content="Weyd- Nigeria&#039;s No.1 Online Market for refurbished, fairly used and brand new items | Sell an item free,get connected to ready minded buyers, sell phones, car accessories, electronics, apartments &amp; more on weyd.com.ng" />


<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">

<link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
<script src="jquery.min.js"></script>

<script>


</script>
</head>
<body>
<div id="wrapper">
<?php include("defines/header.php");?>

<div class="main-container">
<div class="container">
<ol class="breadcrumb pull-left">
  <div class="alert alert-warning alert-dismissable fade in" id="warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> Please login to send message! <a href="login.php">Login</a><?php echo$fName;?>
  </div>
<li><a href="index.php"><i class="icon-home fa"></i></a></li>
<li><a href="category.php?ads=<?php echo$ads_file['main_category'];?>&brand=<?php echo$ads_file['sub_category'];?>&search1=<?php echo$ads_file['location'];?>&find=">All Ads</a></li>
<li class="active"><?php echo$ads_file['main_category'];?></li>
</ol>
<div class="pull-right backtolist"><a href="index.php"> <i class="fa fa-angle-double-left"></i> Back to Results</a></div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-9 page-content col-thin-right">
<div class="inner inner-box ads-details-wrapper">
<h2> <?php echo strtoupper($ads_file['ads_title']);?> &nbsp;
<small class="label label-default adlistingtype" style="background:#159C81;"><?php echo$ads_file['ads_condition'];?></small>
<small class="label label-default adlistingtype"><?php echo$ads_file['deal_type'];?></small>

</h2>
<span class="info-row"> <span class="date"><i class=" icon-clock"> </i><?php echo date("d-M", $ads_file['ads_time']); ?> <?php echo date("h:i A", $ads_file['ads_time']); ?></span> - <span class="category"><?php echo$ads_file['main_category'];?></span>- <span class="item-location"><i class="fa fa-map-marker"></i><?php echo$ads_file['location'];?></span> </span>
<div class="ads-image">
<h1 class="pricetag"> <?php echo "N".number_format($ads_file['price']); ?></h1>
<ul class="bxslider">
<li><img src="uploads/<?php echo $ads_file['file'];?>" alt="img"/></li>
<li><img src="uploads/<?php echo $ads_file['file1'];?>"alt="img"/></li>
<li><img src="uploads/<?php echo $ads_file['file2'];?>"alt="img"/></li>
</ul>
<div id="bx-pager">
<a class="thumb-item-link" data-slide-index="0" href="#"><img src="uploads/<?php echo $ads_file['file'];?>" alt="img"/></a>
<a class="thumb-item-link" data-slide-index="1" href="#"><img src="uploads/<?php echo $ads_file['file1'];?>" alt="img"/></a>
<a class="thumb-item-link" data-slide-index="2" href="#"><img src="uploads/<?php echo $ads_file['file2'];?>" alt="img"/></a>

</div>
</div>

<div class="Ads-Details">
<h5 class="list-title"><strong>Ads Detsils</strong></h5>
<div class="row">
<div class="ads-details-info col-md-8">
<p><?php echo$ads_file['ads_description'];?></p>
<h4>TRENDING ADS</h4>
<ul class="list-circle">

</ul>


</div>
<div class="col-md-4">
<aside class="panel panel-body panel-details">
<ul>
<li>
<p class=" no-margin "><strong>Price:</strong> <?php echo$ads_file['price'];?></p>
</li>
<li>
<p class="no-margin"><strong>Type:</strong> <?php echo$ads_file['main_category'];?></p>
</li>
<li>
<p class="no-margin"><strong>Location:</strong> <?php echo$ads_file['location'];?> </p>
</li>
<li>
<p class=" no-margin "><strong>Condition:</strong> <?php echo$ads_file['ads_condition'];?></p>
</li>
<li>
<p class="no-margin"><strong>Brand:</strong> <?php echo$ads_file['sub_category'];?></p>
</li>
</ul>
</aside>
<div class="ads-action">
<ul class="list-border">
<li><a href="?order=track"> <i class="fa fa-globe" aria-hidden="true"></i>Track order</a></li>
<li><a href="#"> <i class="fa fa-user" aria-hidden="true"></i>View seller profile</a></li>
</ul>
</div>
</div>
</div>
<div class="content-footer text-left"><a class="btn  btn-default" data-toggle="modal" href="#contactAdvertiser"><i class=" icon-mail-2"></i> Send a message </a> <a class="btn  btn-info"><i class=" icon-phone-1"></i> <?php echo$ads_file['phone'];?> </a></div>
</div>
</div>

</div>

<div class="col-sm-3  page-sidebar-right">
<aside>
<div class="panel sidebar-panel panel-contact-seller">
<div class="panel-heading">Contact Seller</div>
<div class="panel-content user-info">
<div class="panel-body text-center">
<div class="seller-info">
<h3 class="no-margin"><?php echo $ads_file['firstname']." ".$ads_file['lastname'];?></h1>
<p>Location: <strong><?php echo$ads_file['location'];?></strong></p>
<p> Joined: <strong><?php echo date("d-M-y, h:iA", $ads_file['ads_time']); ?></strong></p>
</div>
<div class="user-ads-action"><a href="#contactAdvertiser" data-toggle="modal" class="btn   btn-default btn-block"><i class=" icon-mail-2"></i> Send a message </a> <a class="btn  btn-info btn-block"><i class=" icon-phone-1"></i><?php echo$ads_file['phone'];?>
</a></div>
</div>
</div>
</div>
<div class="panel sidebar-panel">
<div class="panel-heading">Safety Tips for Buyers</div>
<div class="panel-content">
<div class="panel-body text-left">
<ul class="list-check">
<li> Meet seller at a public place</li>
<li> Check the item before you buy</li>
<li> Pay only after collecting the item</li>
</ul>
<p><a class="pull-right" href="#"> Know more <i class="fa fa-angle-double-right"></i> </a></p>
</div>
</div>
</div>

</aside>
</div>

</div>
</div>
</div>

<?php include("footer.php");?>

</div>


<div class="modal fade" id="reportAdvertiser" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> There's something wrong with this ads?
</h4>
</div>
<div class="modal-body">
<form role="form">
<div class="form-group">
<label for="report-reason" class="control-label">Reason:</label>
<select name="report-reason" id="report-reason" class="form-control">
<option value="">Select a reason</option>
<option value="soldUnavailable">Item unavailable</option>
<option value="fraud">Fraud</option>
<option value="duplicate">Duplicate</option>
<option value="spam">Spam</option>
<option value="wrongCategory">Wrong category</option>
<option value="other">Other</option>
</select>
</div>
<div class="form-group">
<label for="recipient-email" class="control-label">Your E-mail:</label>
<input type="text" name="email" maxlength="60" class="form-control" id="recipient-email">
</div>
<div class="form-group">
<label for="message-text2" class="control-label">Message <span class="text-count">(300) </span>:</label>
<textarea class="form-control" id="message-text2"></textarea>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary">Send Report</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="contactAdvertiser" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"><i class=" icon-mail-2"></i> Contact advertiser </h4>
</div>
<div class="modal-body">
<form method="post" action="" role="form">
<div class="form-group">
<label for="recipient-name" class="control-label">Name:</label>
<input class="form-control required" id="recipient-name" name="buyersname"placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
</div>
<div class="form-group">
<label for="sender-email" class="control-label">E-mail:</label>
<input id="sender-email" type="email" name="buyersemail"data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" data-placement="top" placeholder="email@you.com" class="form-control email">
</div>
<div class="form-group">
<label for="recipient-Phone-Number" class="control-label">Phone Number:</label>
<input type="text" maxlength="60" name="buyersphone"class="form-control" id="recipient-Phone-Number">
</div>
<div class="form-group">
<label for="message-text" class="control-label">Message <span class="text-count">(300) </span>:</label>
<textarea class="form-control" name="message"id="message-text" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
</div>
<div class="form-group">
<p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not
valid. </p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<input type="submit" name="send-message"class="btn btn-success pull-right" value="Send message" id="msg">
</div>
</form>
</div>

</div>
</div>
</div>



<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });


</script>

<script src="assets/js/form-validation.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>


</html>
