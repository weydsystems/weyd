<?php
ob_Start();
session_Start();
require("core/config.php");
if(isset($_GET['find'])){
  $location =$_GET['search1'];
  // $mainads = $_GET['ads'];
  $fetchAds = $pdo->prepare("SELECT * FROM ads location LIKE '%$location%'");
     $fetchAds->execute();
  $rowcount = $fetchAds->rowCount();
  $rows = $fetchAds->fetchAll();
}
 ?>
