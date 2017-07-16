<?php
ob_start();
session_Start();
require("core/config.php");
require("core/sqlicon.php");
  include("core/welcome-home.php");
  include("core/all-home-ads.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Refurbished products| Fairly used & Brand new  Electronics, Phones, Fashion & more on  Weyd</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="description" content="Weyd- Nigeria&#039;s No.1 Online Market for refurbished, fairly used and brand new items | Sell an item free,get connected to ready minded buyers, sell phones, car accessories, electronics, apartments &amp; more on weyd.com.ng" />

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/android-chrome-384x384.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/android-chrome-192x192.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/mstile-150x150.png">
<link rel="shortcut icon" href="assets/ico/favicon-32x32.png">

<link href="bootstrap.css" rel="stylesheet" media="screen"rel="stylesheet">
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.cycle.all.js" type="text/javascript"></script>


<script>
        paceOptions = {
            elements: true
        };
        </script>

<script src="assets/js/pace.min.js"></script>
<style>.themeControll{background:#2d3e50;height:auto;width:170px;position:fixed;left:0;padding:20px 0;top:100px;z-index:999999;-webkit-transform:translateX(0);-moz-transform:translateX(0);-o-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);opacity:1;-ms-filter:none;filter:none;-webkit-transition:opacity .5s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);-moz-transition:opacity .5s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);-o-transition:opacity .5s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);-ms-transition:opacity .5s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);transition:opacity .5s linear,transform .7s cubic-bezier(.56,.48,0,.99);}.themeControll.active{display:block;-webkit-transform:translateX(-170px);-moz-transform:translateX(-170px);-o-transform:translateX(-170px);-ms-transform:translateX(-170px);transform:translateX(-170px);-webkit-transition:opacity .5s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);-moz-transition:opacity .5s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);-o-transition:opacity .5s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);-ms-transition:opacity .5s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);transition:opacity .5s linear,transform .7s cubic-bezier(.56,.48,0,.99);}.themeControll a{border-bottom:1px solid rgba(255,255,255,0.1);border-radius:0;clear:both;color:#fff;display:block;height:auto;line-height:16px;margin-bottom:5px;padding-bottom:8px;text-transform:capitalize;width:auto;font-family:Roboto Condensed,Helvetica Neue,Helvetica,sans-serif;}.tbtn{background:#2D3E50;color:#FFFFFF!important;font-size:30px;height:auto;padding:10px;position:absolute;right:-40px;top:0;width:40px;cursor:pointer;}.linkinner{display:block;height:400px;}.linkScroll .scroller-bar{width:17px;}.linkScroll .scroller-bar,.linkScroll .scroller-track{background:#1d2e40!important;border-color:#1d2e40!important;}@media (max-width: 780px) {.themeControll{display:none;}}</style>
</head>
<body>
  <!-- this calls the side bar-->
<?php include("defines/side-bar.php");?>
<div id="wrapper">
  <!--  global header files -->
<?php include("defines/header.php");?>
<!-- index  container 1 files -->
<?php include("defines/index_container-1.php");?>

<div class="main-container">
<div class="container">



  <div class="col-lg-12 content-box ">
  <div class="row row-featured row-featured-category">
  <div class="col-lg-12  box-title no-border">
  <div class="inner"><h2>Browse top categories</h2>
  </div>
  </div>
  <?php include("defines/all-cats.php");?>
  </div>
  </div>
  <!-- top listing category  starts here-->

<div class="col-lg-12 content-box ">
<div class="row row-featured row-featured-category">
<div class="col-lg-12  box-title no-border">
<div class="inner"><h2><span>Trending</span>
Sales</h2>
</div>
</div>
<?php include("defines/top-listings.php");?>
</div>
</div>


<!-- top listing category ends here -->
<div style="clear: both"></div>
<div class="col-lg-12 content-box ">
<div class="row row-featured">
<div class="col-lg-12  box-title ">
<div class="inner"><h2><span>Trending  </span>
Phones </h2>
</div>
</div>
<div style="clear: both"></div>
<div class=" relative  content featured-list-row clearfix">
<nav class="slider-nav has-white-bg nav-narrow-svg">
<a class="prev">
<span class="nav-icon-wrap"></span>
</a>
<a class="next">
<span class="nav-icon-wrap"></span>
</a>
</nav>
<div class="no-margin featured-list-slider ">
<?php include("defines/sponsored-ads-listing.php");?>

</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-9 page-content col-thin-right">
<!-- <div class="inner-box category-content">
<h2 class="title-2">Find Classified Ads World Wide </h2>
<div class="row">
<div class="col-md-4 col-sm-4 ">
<div class="cat-list">
<h3 class="cat-title"><a href="mobiles.php"><i class="fa fa-mobile ln-shadow"></i>
Mobiles<span class="count"></span></a> <span data-target=".cat-id-2" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span></h3>

</div>
<div class="cat-list">
<h3 class="cat-title"><a href="category.php?token"><i class="icon-laptop ln-shadow"></i>
Electronics and appiances<span class="count"></span></a> <span data-target=".cat-id-2" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span></h3>

</div>
<div class="cat-list">
<h3 class="cat-title"><a href="job-home.php"><i class="icon-home ln-shadow"></i>
Jobs <span class="count">6375</span></a>
<span data-target=".cat-id-3" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>

</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="cat-list">
<h3 class="cat-title"><a href="category.php"><i class="fa fa-briefcase ln-shadow"></i> Services <span class="count">45,526</span></a>
<span data-target=".cat-id-4" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>

</ul>
</div>
<div class="cat-list">
<h3 class="cat-title"><a href="category.php"><i class="icon-book-open ln-shadow"></i> Learning <span class="count">26,529</span></a> <span data-target=".cat-id-5" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>

</div>
<div class="cat-list">
<h3 class="cat-title"><a href="category.php"><i class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
<span data-target=".cat-id-6" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>

</div>
<div class="cat-list">
<h3 class="cat-title"><a href="category.php"><i class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
<span data-target=".cat-id-6" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>

</div>
</div>
<div class="col-md-4 col-sm-4   last-column">
<div class="cat-list">
<h3 class="cat-title"><a href="category.php"><i class=" icon-basket-1 ln-shadow"></i> For Sale <span class="count">64,526</span></a> <span data-target=".cat-id-7" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>
</div>
<div class="cat-list ">
<h3 class="cat-title"><a href="category.php"><i class=" icon-theatre ln-shadow"></i> Community <span class="count">5,30</span> </a> <span data-target=".cat-id-8" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>
</div>
<div class="cat-list ">
<h3 class="cat-title"><a href="category.php"><i class=" icon-theatre ln-shadow"></i> Community <span class="count">5,30</span> </a> <span data-target=".cat-id-8" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>
</div>
<div class="cat-list ">
<h3 class="cat-title"><a href="category.php"><i class=" icon-theatre ln-shadow"></i> Community <span class="count">5,30</span> </a> <span data-target=".cat-id-8" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>
</div>
</div>
</div> -->
<!-- </div> -->
</div>

</div>
</div>
</div>

<!-- <div class="page-info hasOverly" style="background: url(images/wm.jpg); background-size:cover">
<div class="bg-overly">
<div class="container text-center section-promo">
<div class="row">
<div class="col-sm-3 col-xs-6 col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon  icon-group"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>2200</span></h5>
<div class="iconbox-wrap-text">Trusted Seller</div>
</div>
</div>

</div>

</div>
<div class="col-sm-3 col-xs-6 col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon  icon-th-large-1"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>100</span></h5>
<div class="iconbox-wrap-text">Categories</div>
</div>
</div>

</div>

</div>
<div class="col-sm-3 col-xs-6  col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon  icon-map"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>700</span></h5>
<div class="iconbox-wrap-text">Location
  <?php
    $stmt = $mysqli->query("select totalvisit from totalview where page='yourpage' ");
  ?>

  <p>This page is viewed <?php echo mysqli_num_rows(($stmt));?> times.</p>

</div>
</div>
</div>


</div>

</div>
<div class="col-sm-3 col-xs-6 col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon icon-facebook"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>50,000</span></h5>
<div class="iconbox-wrap-text"> Facebook Fans</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>
</div> -->
<!-- information container -->
<!-- <div class="page-bottom-info">
<div class="page-bottom-info-inner">
<div class="page-bottom-info-content text-center">
  <h1>Do you have questions, comments or concerns? if yes then</h1>
  <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
  <i class="icon-mobile"></i> <span class="hide-xs color50">Reach us on</span> (+234)-817-904-1199 </a>

</div>
</div>
</div> -->

<!--- container ends here -->
<?php include("footer.php");?>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
<script>


</script>

<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>
</body>
</html>
