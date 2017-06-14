<?php
ob_start();
session_Start();
require("../core/config.php");
require("../core/sqlicon.php");
if(!$_SESSION['weyd_user']){
  header("location:../login.php");

}else{

   if(isset($_GET['_ms?'])){
     $msid = $_GET['_ms?'];
     $apps4 = $pdo->prepare("SELECT * FROM inbox LEFT JOIN ads ON inbox.ads_id = ads.ads_id WHERE inbox.ms_id ='$msid'");
     $apps4->execute(array($user));
     $rows =  $apps4->fetch(PDO::FETCH_ASSOC);
     $recEmail =  $rows ['buyersemail'];
     $buyersname = $rows['buyersname'];


   }
}
  if(isset($_GET['_AcN'])=="wemgate"){
    $messag = $_GET['message_body'];


  }

 ?>




<!DOCTYPE html>
<html>
<head>
  <title>Weyd - Admin</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap/css/font-awesome.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/style.css">
    <!-- jQuery library -->
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled JavaScript -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
<div class="scrolla">
<div class="green-header">
  <div style="float: right; text-align: right">
  <p><b>Product Name: </b><?php echo $rows['ads_title'];?></p
  <p><b>Product code: </b><?php echo $rows['ads_id'];?></p>
  <a href="../tracking_op1.php?"><i class="btn btn-warning fa fa-ban">Send Tracking form</i></a>
  <a href="#"><i class="btn btn-danger fa fa-trash"> Delete</i></a>
</div>
<p><b>Buyer's Email Address:</b> <?php echo $rows['buyersemail'];?></p>
<p><b>Buyer's Name:</b> <?php echo $rows['buyersname'];?></p>
<p><b>Buyer's Phone number:</b><?php echo $rows['buyersphone'];?></p>
</div>
<div style="padding: 10px;">


  <div class="chat">
<div class="you"><?php echo $rows['message'];?></div>
<div class="me"><?php echo"";?></div>
</div>
</div>

<div class="form-bottom">
  <form method="get" action="">
    <div class="form-group">
  <textarea class="form-control" name="message_body"placeholder="Type a message to reply user" rows="4" required style="resize: none"></textarea>
  <a style="margin-top: 5px;" class="btn btn-block btn-success" href="?_ms?=<?php echo$rows['ms_id'];?>&&_AcN=wemgate">
    <span class="fa fa-paper-plane"> Send Message</span></a>
</div>
</form>
</div>



</div>
</div>

</body>
</html>
