<?php
ob_start();
session_Start();
$user =$_SESSION['weyd_user'];
$us = $userRow['seller_id'];
  $fetchAds = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved'OR ads.ads_status='favourite'LIMIT 25");
  $fetchAds->execute(array($user));
  $rows =  $fetchAds->fetchAll();
//select from mobile phone category


$fetchFones = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' OR ads.ads_status='favourite' AND ads.main_category='Mobiles'");
$fetchFones->execute(array($user));
$frows =  $fetchFones->fetchAll();
//get the ads id
GLOBAL $get;
$get = $_GET['favourite'];
if(isset($_GET['favourite'])){
if(!$_SESSION['weyd_user']){
header("Location:login.php?location=" . urlencode($_SERVER['REQUEST_URI']));
}else{
  $upd = $pdo->prepare("UPDATE ads SET ads_status='favourite' WHERE ads_id='$get'");
  $upd->execute(array($_SESSION['weyd_user']));
  if($upd){
    header("location:account-favourite-ads.php");
  }

}
}

?>
