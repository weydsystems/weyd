<?php
ob_start();
session_start();
require("core/config.php");
$weyd_user = $_SESSION['weyd_user'];
if(!$weyd_user){
 header("location:login.php");
}else{
$get = $pdo->prepare("SELECT * FROM users WHERE firstname='$weyd_user'");
$get->execute();
$bind = $get->fetch(PDO::FETCH_ASSOC);
$seller_id = $bind['seller_id'];
$_SESSION['sid'] = $seller_id;
}
  function Gen($length = 4) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = 'WADS-';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $ads_id = Gen();
  $_SESSION['wd_ads'] = $ads_id;
  if(isset($_POST['post-ads'])){

    if(empty($_POST['main-category']))
      echo"<script>alert('You must select atleast one category');</script>";
     if(empty($_POST['sub-category']))
    echo"<script>alert('Sub category cannot be empty');</script>";
    if(empty($_POST['condition']))
   echo"<script>alert('Select atleast one condition');</script>";
    else
        echo"<script>alert('sdjjj');</script>";

//     $g = $pdo->prepare("INSERT INTO ads(ads_id,seller_id,main_category,sub_category,ads_condition,ads_title,ads_description,price,deal_type,location,ads_time,ads_date,ads_status,ads_pro) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
//     $j = $g->execute(array($ads_id,$seller_id,trim($_POST['main-category']),trim($_POST['sub-category']),trim($_POST['condition']),trim($_POST['ads-title']),trim($_POST['description']),trim($_POST['price']),trim($_POST['negotiable']),trim($_POST['location']),time(),date("M:D:Y"),'unapproved',''));
//
//     $folder="uploads/";
//     //file stage 1
//     $file = $_FILES['file']['name'];
//     $file_loc = $_FILES['file']['tmp_name'];
//     $move = move_uploaded_file($file_loc,$folder.$file);
//     //file stage 2
//     $file1 = $_FILES['file1']['name'];
//     $file_loc1 = $_FILES['file1']['tmp_name'];
//     $move1 = move_uploaded_file($file_loc1,$folder.$file1);
// //file stage3
// $file2 = $_FILES['file2']['name'];
// $file_loc2 = $_FILES['file2']['tmp_name'];
// $move2 = move_uploaded_file($file_loc2,$folder.$file2);
// //file stage 4
//
// $file3 = $_FILES['file3']['name'];
// $file_loc3 = $_FILES['file3']['tmp_name'];
// $move3 = move_uploaded_file($file_loc3,$folder.$file3);
//
// //file stage 5
//
// $file4 = $_FILES['file4']['name'];
// $file_loc4 = $_FILES['file4']['tmp_name'];
// $move4 = move_uploaded_file($file_loc4,$folder.$file4);
//
//     $ads_img = $pdo->prepare("INSERT INTO ads_uploads(ads_id,file,file1,file2,file3,file4) VALUES (?,?,?,?,?,?)");
//     $ads_img->execute(array($ads_id,$file,$file1,$file2,$file3,$file4));
//     if($j){
//
//       header("location:posting-success.php");
//
//     }else{
//       echo"<script>alert('Ads posting failed!');</script>";
//         header("location:post-ads.php");
//     }


  }




?>
