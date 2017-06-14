<?php
ob_start();
session_Start();
$user =$_SESSION['weyd_user'];
$us = $userRow['seller_id'];
  $fetchAds = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.seller_id ='$us'");
  $fetchAds->execute(array($user));
  $rows =  $fetchAds->fetchAll();
$count1 = $fetchAds->rowCount();

// pending ads starts here
$apps = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='unapproved' AND ads.seller_id='$us'");
$apps->execute(array($user));
$appsrows =  $apps->fetchAll();
$count2 = $apps->rowCount();
//pending ads ends here
//favourite ads starts here
$apps3 = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='favourite' AND ads.seller_id='$us'");
$apps3->execute(array($user));
$appsrows3 =  $apps3->fetchAll();
$count3 = $apps3->rowCount();

//inbox


//inbox ends
$apps4 = $pdo->prepare("SELECT * FROM inbox LEFT JOIN ads ON inbox.ads_id = ads.ads_id");
$apps4->execute(array($user));
$appsrows4 =  $apps4->fetchAll();
$count4 = $apps4->rowCount();

//delete ads
GLOBAL $adsname;
GLOBAL $bn;
$adsname = $_GET['name'];
$bn = $_GET['trash'];
if(isset($_GET['name'])){
  $_SESSION['name'] = $adsname;
  $del = $pdo->prepare("DELETE ads, ads_uploads FROM ads INNER JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id  WHERE ads.ads_id='$adsname'");
  $del->execute(Array($adsname));
  if($del){
    header("location:".$_SERVER['PHP_SELF']);
  }

  // echo"<script>alert('$adsname');</script>";
}
if(isset($_GET['trash'])){

    $del2 = $pdo->prepare("DELETE FROM inbox WHERE buyersemail='$bn'");
      $del2->execute(Array($bn));
  if($del2){
    header("location:".$_SERVER['PHP_SELF']);
  }
}


?>
