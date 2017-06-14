<?php
$h = $pdo->prepare("SELECT * FROM users LEFT JOIN ads ON users.seller_id = ads.seller_id LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='unapproved'");
$h->execute();
$check = $h->rowCount();
$rows = $h->fetchAll();
if($check ==0){
  echo"<script>alert('No current ads');</script>";
}
