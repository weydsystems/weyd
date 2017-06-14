<?php
ob_start();
session_Start();
require("core/config.php");
  include("core/all-category-ads.php");

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
<title>Real Estate & Apartments -Category |Weyd</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
<sript src="jquery.min.js"></script>


<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
<script src="jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
<?php include("defines/header.php");?>

<div class="search-row-wrapper">
  <div class="container">
  <form action="category.php" method="GET">
  <div class="col-sm-3">
  <input name="ads"class="form-control keyword" type="text" placeholder="e.g. Mobile Sale" required="">
  </div>
  <div class="col-sm-3">

  <input name="brand"class="form-control keyword" type="text" placeholder="e.g. HTC" required="">
  </div>
  <div class="col-sm-3">
  <select class="form-control selecter" name="search1" id="id-location" required="">
  <option selected="selected" value="">All Locations</option>
    <option value="Abia">Abia</option>
    <option value="Adamawa">Adamawa</option>
    <option value="Anambra">Anambra</opiton>
    <option value="Akwa Ibom">Akwa Ibom</option>
    <option value="Bauchi">Bauchi</option>
    <option value="Bayelsa">Bayelsa</option>
    <option value="Benue">Benue</option>
    <option value="Borno">Borno</option>
    <option value="Cross River">Cross River</option>
    <option value="Delta">Delta</option>
    <option value="Ebonyi">Ebonyi</option>
    <option value="Enugu">Enugu</option>
    <option value="Edo">Edo</option>
    <option value="Ekiti">Ekiti</option>
    <option value="Gombe">Gombe</option>
    <option value="Imo">Imo</option>
    <option value="Jigawa">Jigawa</option>
    <option value="Kaduna">Kaduna</option>
    <option value="Kano">Kano</option>
    <option value="Katsina">Katsina</option>
    <option value="Kebbi"></option>
    <option value="Kogi">Kogi</option>
    <option value="Kwara">Kwara</option>
    <option value="Lagos">LAgos</option>
    <option value="Nasarawa">Nasarawa</potion>
    <option value="Niger">Niger</option>
    <option value="Ogun">Ogun</option>
    <option value="Ondo">Ondo</option>
    <option value="Osun">Osun</option>
    <option value="Oyo">Oyo</option>
    <option value="Plateau">Plateau</option>
    <option value="Rivers">Rivers</option>
    <option value="Sokoto"></option>
    <option value="Taraba">Taraba</option>
    <option value="Yobe">Yobe</option>
    <option value="Zamfara">Zamfara</potion>

  </select>
  </div>
  <div class="col-sm-3">
  <button type="submit" name="find" class="btn btn-block btn-primary" valur="find"><i class="fa fa-search"></i></button>
  </div>
  </form>
  </div>
</div>

<div class="main-container">
<div class="container">
<div class="row">

<div class="col-sm-3 page-sidebar mobile-filter-sidebar">
<?php include("defines/all-category-sidebar.php");?>
</div>

<div class="col-sm-20 page-content col-thin-left">
  <div class="col-sm-25 page-content">
  <div class="inner-box">
    <div class="weyd-col-decs">
      <form method="post" action="">
  <button type="name" name="fairly-used" class="dec">Fairly used</button>
  <button type="submit" name="new" class="dec2">New</button><br/>

</form>

</div><br/>
  <a href="real-estate.php"><h2 class="title-2"><i class="fa fa-home ln-shadow"></i>
  </h2></a>

<div class="category-list">
  <div class="table-responsive">
  <div class="table-action">

  </div>

  <?php include("core/real-estate-ads.php");?>
<!--- content -->


</div></div>


<div class="tab-box  save-search-bar text-center"><a href="#"> <i class=" icon-star-empty"></i>
Save Search </a></div>
</div>
</div>








<div class="post-promo text-center">
<h2> Do you have anything to sell ? </h2>
<h5>Sell your products online FOR FREE. It's easier than you think !</h5>
<a href="post-ads.php" class="btn btn-lg btn-border btn-post btn-danger">Get started</a>
</div>

</div>

</div>
</div>
</div>
<?php include("footer.php");?>

</div>






<script src="assets/js/jquery/jquery-latest.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
