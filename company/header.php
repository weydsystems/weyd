<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<?php include("config.php");?>
<?php
session_start();
$admin = $_SESSION['weyd_admin'];
if(!isset($_SESSION['weyd_admin'])){
header("Location:index.php");
}


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Weyd - Admin</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="font-awesome.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
    <!-- jQuery library -->
  <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <!-- Latest compiled JavaScript -->
  <script src="bootstrap.min.js"></script>
</head>

<body>
  <div id="header">
    <div class="side-btn"><span id="menu_toggle" class="fa fa-bars"></span>
      <a class="logo" href="home.php">Weyd Admin</a>
      <strong class="w-msg">Welcome, <?php echo strtoupper($admin);?></strong>
    </div>
  </div>
<script>
  $("#menu_toggle").click(function(e) {
    $(".col-md-3").toggle();
    $(".col-md-9").toggleClass("full_width");
  });


  $(window).resize(function() {
  	if ($(window).width() <= 1000) {
      $("#menu_toggle").ready(function() {

      	$("#sidebar").hide(function() {

      		 $("#menu_toggle").click(function() {

      		 	 $("#sidebar").show();
      		 });
      	});
      });
  	}
  });
</script>

  <div class="container-fluid">
    <div class="row">
    <?php include 'side-bar.php'; ?>
      <div class="col-xs-12 col-sm-12 col-md-9">
        <div id="right-bar">
