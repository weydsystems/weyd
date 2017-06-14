
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
<title>Seller Profile</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
<script src="jquery.min.js"></script>


<script>
        paceOptions = {
            elements: true
        };
        $("html").ready(function(){
          $("#warning").hide();
    $("#success").hide();
        });
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<?php
session_Start();
require("core/config.php");
require("core/sqlicon.php");
$followerName = $_SESSION['weyd_user'];
GLOBAL $p;
$p = $_GET['p'];
if(isset($_GET['p'])){
  //get the details of the item owner
  $sp = $pdo->prepare("SELECT * FROM users  WHERE seller_id='$p'");
  $sp->execute();
  $rows = $sp->fetch(PDO::FETCH_ASSOC);
  $ff= $rows['seller_id'];
  $fName =$rows['firstname']." ".$rows['lastname'];
//fetch this users followers
  // fetch ads and uploads
  $sp2 = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id= ads_uploads.ads_id WHERE ads.seller_id='$p'");
  $sp2->execute();
  $allAds = $sp2->rowCount();
  $adrows = $sp2->fetchAll();


  //get the details of the folloyee
  $sel = $pdo->prepare("SELECT * FROM users WHERE firstname='$followerName'");
  $sel->execute();
  $userFollow =$sel->fetch(PDO::FETCH_ASSOC);
  $followerID = $userFollow['seller_id'];


  //retrieve the id and status of the item owner and check if he's following the user already
  $fes =$pdo->prepare("SELECT * FROM followers WHERE seller_id='$ff' AND follower_id='$followerID'");
  $fes->execute($ff,$followerID);
  $checkFollow = $fes->fetch(PDO::FETCH_ASSOC);
  $status = $checkFollow ['status'];
  $myFollow = $checkFollow['follower_id'];



}
if(isset($_GET['acn'])=="follow" &&(!$_SESSION['weyd_user'])){
  $url=$_SERVER['HTTP_REFERER'];
  header("Location:login.php");
}else  if(isset($_GET['acn'])=="follow" && $status="following" && $myFollow==$followerID){

    echo"<script>

$('document').ready(function(){
$('#warning').show().delay(2000).fadeOut();
$('#fuser').hide();
});

window.Location='seller-profile.php';
    </script>";
  }
else if(isset($_GET['acn'])=="follow" && $status !="following" && $myFollow!==$followerID){
  $les = $pdo->prepare("INSERT INTO followers(seller_id,status,follower_id) VALUES('$ff','following','$followerID')");
  $les->execute();
  if($les){
    echo"<script>

  $('document').ready(function(){
  $('#success').show().delay(2000).fadeOut();

  });

  window.Location='seller-profile.php';
    </script>";
  }
}

$hf = $pdo->prepare("SELECT * FROM users LEFT JOIN followers ON users.seller_id = followers.follower_id WHERE
   followers.seller_id='$p'");
$hf->execute();
$fcounts = $hf->rowCount();
$pics = $hf->fetchAll();
//following

$fp = $pdo->prepare("SELECT * FROM users LEFT JOIN followers ON users.seller_id = followers.follower_id WHERE followers.follower_id='$p'");
$fp->execute();
$fpics = $fp->fetchAll();

 ?>
<body>
<div id="wrapper">
<?php include("defines/header.php");?>
<div class="main-container inner-page">
<div class="container">
<div class="section-content">
<div class="inner-box ">
  <div class="alert alert-warning alert-dismissable fade in" id="warning">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> You have already followed <?php echo$fName;?>
  </div>
  <div class="alert alert-success alert-dismissable fade in" id="success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> Your are now following <?php echo$fName;?>
    </div>


<div class="row">
<div class="col-sm-6">
<div class="seller-info seller-profile">
<div class="seller-profile-img">
<a><img src="userprofiles/<?php echo$rows['profile_picture'];?>" class="img-responsive thumbnail" alt="img"> </a>
</div>
<h3 class="no-margin no-padding link-color uppercase ">
<?php echo $rows['firstname']." ".$rows['lastname'];?>
</h3>
<div class="text-muted">

</div>
<div class="user-ads-action">
<a class="btn btn-sm   btn-default " data-toggle="modal" href="#contactAdvertiser"><i class=" icon-mail-2"></i> Send a message </a>
<a href="?w_view=<?php echo base64_encode(openssl_random_pseudo_bytes(10)); ?>&&p=<?php echo$p?>&&acn=follow"class="btn btn-sm  btn-success" id="fuser"><i class=" icon-plus"></i> Follow </a>
</div>
<div class="seller-social-list">
<ul class="share-this-post">
<li><a class="google-plus"><i class="fa fa-google-plus"></i></a>
</li>
<li><a class="facebook"><i class="fa fa-facebook"></i></a>
</li>
<li><a><i class="fa fa-twitter"></i></a>
</li>
<li><a class="pinterest"><i class="fa fa-pinterest"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="seller-contact-info">
<h3 class="no-margin uppercase color-danger"> Contact Information </h3>
<dl class="dl-horizontal">
<dt>Address:</dt>
<dd class="contact-sensitive"> <?php echo $rows['address'];?>
</dd>

<dt>Mobile Phone:</dt>
<dd class="contact-sensitive"> <?php echo $rows['phone'];?></dd>
<dt>E-mail:</dt>
<dd class="contact-sensitive"><?php echo $rows['email'];?></dd>
</dl>
</div>
</div>
</div>
</div>
<div class="section-block">
<div class="row">
<div class="col-sm-9 col-thin-left page-content ">
<div class="category-list">
<div class="tab-box ">

<ul class="nav nav-tabs add-tabs" role="tablist">
<li class="active"><a href="#allAds" role="tab" data-toggle="tab"> User all ads
<span class="badge"><?php echo $allAds;?></span></a></li>
</ul>
<div class="tab-filter">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Short by</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>

<div class="listing-filter">
<div class="pull-left col-xs-6">
<div class="breadcrumb-list"><a href="#" class="current">
<span>All ads</span></a><a href="#selectRegion" id="dropdownMenu1" data-toggle="modal"> <span class="caret"></span> </a></div>
</div>
<div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large "></i></span></div>
<div style="clear:both"></div>
</div>

<div class="adds-wrapper">











<!-- loop starts here -->
<?php foreach($adrows AS $ads){ ?>
<div class="item-list">
<div class="col-sm-2 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i></span> <a href="ads-details.php">
  <img class="thumbnail no-margin" src="uploads/<?php echo $ads['file'];?>" alt="img"></a></div>
</div>

<div class="col-sm-7 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="ads-details.php"><?php echo $ads['ads_title'];?></a></h5>
<span class="info-row"> <span class="date"><i class=" icon-clock">
</i> <?php echo date("d-M", $ads['ads_time']); ?> <?php echo date("h:i A", $ads['ads_time']); ?></span> - <span class="category"><?php echo $ads['main_category'];?> </span>- <span class="item-location">
  <i class="fa fa-map-marker"></i> <?php echo $ads['location'];?> </span> </span>
</div>
</div>

<div class="col-sm-3 text-right  price-box">
<h2 class="item-price"><?php echo "N".number_format($ads['price']); ?></h2>
<!-- <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> -->

</div>

</div>

<?php } ?>

<!--- loop ends here -->
</div>

<div class="tab-box  save-search-bar text-center"><a href="#"> <i class=" icon-plus"></i>
Follow User </a></div>
</div>


<div class="post-promo text-center">
<h2> Do you have anything to sell ? </h2>
<h5>Sell your products online FOR FREE. It's easier than you think !</h5>
<a href="post-ads.php" class="btn btn-lg btn-border btn-post btn-danger">Get started</a></div>

</div>
<div class="col-sm-3  page-sidebar-right">
<aside>

<div class="panel sidebar-panel panel-contact-seller">
<div class="panel-heading">Followers <span class="badge"><?php echo $fcounts;?></span>
</div>
<div class="panel-content user-info">
<div class="panel-body text-center">
<ul class="list-unstyled list-user-list long-list-user">
  <?php foreach($pics AS $pic){ ?>

<li><a href="seller-profile.php?w_view=<?php echo bin2hex(openssl_random_pseudo_bytes(20)); ?>&&p=<?php echo$pic['follower_id'];?>&&u==<?php echo base64_encode(openssl_random_pseudo_bytes(20)); ?>"><img alt="img" src="userprofiles/<?php echo$pic['profile_picture'];?>" class="img-circle   "></a></li>
<?php } ?>
</ul>
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
  <!-- <p><a class="pull-right" href="#"> Know more <i class="fa fa-angle-double-right"></i> </a></p> -->
</div>
</div>
</div>

</aside>
</div>

</div>
</div>
</div>
</div>
</div>
<?php include("footer.php");?>

</div>


<div class="modal fade" id="contactAdvertiser" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"><i class=" icon-mail-2"></i> Contact advertiser </h4>
</div>
<div class="modal-body">
<form role="form">
<div class="form-group">
<label for="recipient-name" class="control-label">Name:</label>
<input class="form-control required" id="recipient-name" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
</div>
<div class="form-group">
<label for="sender-email" class="control-label">E-mail:</label>
<input id="sender-email" type="text" data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" data-placement="top" placeholder="email@you.com" class="form-control email">
</div>
<div class="form-group">
<label for="recipient-Phone-Number" class="control-label">Phone Number:</label>
<input type="text" maxlength="60" class="form-control" id="recipient-Phone-Number">
</div>
<div class="form-group">
<label for="message-text" class="control-label">Message <span class="text-count">(300) </span>:</label>
<textarea class="form-control" id="message-text" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
</div>
<div class="form-group">
<p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not
valid. </p>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-success pull-right">Send message!</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-12">
<p>Popular cities in <strong>New York</strong>
</p>
<div style="clear:both"></div>
<div class="col-sm-6 no-padding">
<select class="form-control selecter  " id="region-state" name="region-state">
<option value="">All States/Provinces</option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="District of Columbia">District of Columbia</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option selected value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virgin Islands">Virgin Islands</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
</select>
</div>
<div style="clear:both"></div>
<hr class="hr-thin">
</div>
<div class="col-md-4">
<ul class="list-link list-unstyled">
<li><a href="#" title="">All Cities</a></li>
<li><a href="#" title="Albany">Albany</a></li>
<li><a href="#" title="Altamont">Altamont</a></li>
<li><a href="#" title="Amagansett">Amagansett</a></li>
<li><a href="#" title="Amawalk">Amawalk</a></li>
<li><a href="#" title="Bellport">Bellport</a></li>
<li><a href="#" title="Centereach">Centereach</a></li>
<li><a href="#" title="Chappaqua">Chappaqua</a></li>
<li><a href="#" title="East Elmhurst">East Elmhurst</a></li>
<li><a href="#" title="East Greenbush">East Greenbush</a></li>
<li><a href="#" title="East Meadow">East Meadow</a></li>
</ul>
</div>
<div class="col-md-4">
<ul class="list-link list-unstyled">
<li><a href="#" title="Elmont">Elmont</a></li>
<li><a href="#" title="Elmsford">Elmsford</a></li>
<li><a href="#" title="Farmingville">Farmingville</a></li>
<li><a href="#" title="Floral Park">Floral Park</a></li>
<li><a href="#" title="Flushing">Flushing</a></li>
<li><a href="#" title="Fonda">Fonda</a></li>
<li><a href="#" title="Freeport">Freeport</a></li>
<li><a href="#" title="Fresh Meadows">Fresh Meadows</a></li>
<li><a href="#" title="Fultonville">Fultonville</a></li>
<li><a href="#" title="Gansevoort">Gansevoort</a></li>
<li><a href="#" title="Garden City">Garden City</a></li>
</ul>
</div>
<div class="col-md-4">
<ul class="list-link list-unstyled">
<li><a href="#" title="Oceanside">Oceanside</a></li>
<li><a href="#" title="Orangeburg">Orangeburg</a></li>
<li><a href="#" title="Orient">Orient</a></li>
<li><a href="#" title="Ozone Park">Ozone Park</a></li>
<li><a href="#" title="Palatine Bridge">Palatine Bridge</a></li>
<li><a href="#" title="Patterson">Patterson</a></li>
<li><a href="#" title="Pearl River">Pearl River</a></li>
<li><a href="#" title="Peekskill">Peekskill</a></li>
<li><a href="#" title="Pelham">Pelham</a></li>
<li><a href="#" title="Penn Yan">Penn Yan</a></li>
<li><a href="#" title="Peru">Peru</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
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

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.6/dist/seller-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 18:27:05 GMT -->
</html>
