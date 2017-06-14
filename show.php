<?php
ob_Start();
session_Start();
require("core/config.php");
if(isset($_GET['find'])){
  $location =$_GET['search1'];
  // $mainads = $_GET['ads'];
  $fetchAds = $pdo->prepare("SELECT * FROM ads WHERE location LIKE '%$location%'");
     $fetchAds->execute();
  $rowcount = $fetchAds->rowCount();
}
 ?>

 <?php
 if($rowcount >0){
 foreach($rows = $fetchAds->fetchAll() AS $row){
 ?>
<p>TITLE:</p><?php echo$row['ads_title'];?>
 <?php  } }else{
    echo"no results found";
  } ?>
