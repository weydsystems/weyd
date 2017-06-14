<?php
session_Start();
$user = $_SESSION['weyd_user'];
GLOBAL $myId;
$myId = $_GET['ads'];
if(isset($_GET['ads'])){
  // echo"<script>alert('$myId');</script>";
  $h = $pdo->prepare("SELECT * FROM users LEFT JOIN ads ON users.seller_id = ads.seller_id LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_title='$myId'");
  $h->execute(array($myId));
  $ads_file = $h->fetch(PDO::FETCH_ASSOC);
  $id1 = $ads_file['ads_id'];
  $id2= $ads_file['seller_id'];

}
if(!$user){

}else if(isset($_POST['send-message'])){
$send = $pdo->prepare("INSERT INTO inbox (ads_id,seller_id,buyersname,buyersemail,buyersphone,message) VALUES(?,?,?,?,?,?)");
 $execSend = $send->execute(array($id1,$id2,$_POST['buyersname'],$_POST['buyersemail'],$_POST['buyersphone'],$_POST['message']));


}


 ?>
