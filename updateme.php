<?php
session_start();
ob_start();
require_once("core/config.php");
if(!$_SESSION['weyd_user']){
  header("location:login.php");
}
$weyd_user = $_SESSION['weyd_user'];
$target_dir = "userprofiles/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["update"])) {
  $address =$_POST['ad'];
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo"<script>alert('File is not an image.');
      window.location='updateme.php';
        </script>";
        $uploadOk = 0;
    }


    if (file_exists($target_file)) {
        echo"<script>alert('Sorry, file already exists.');
      window.location='updateme.php';
        </script>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        echo"<script>alert('Sorry, your file is too large.');
      window.location='updateme.php';
        </script>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo"<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
      window.location='updateme.php';
        </script>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo"<script>alert('Sorry, your file was not uploaded.');
      window.location='updateme.php';
        </script>";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $name= basename( $_FILES["file"]["name"]);
            $up = $pdo->prepare("UPDATE users SET address='$address', profile_picture='$name' WHERE firstname ='$weyd_user'");
            $up->execute();
            if($up){
              echo"<script>alert('Updated successfully!');
            window.location='account-home.php';
              </script>";
            }else{
              echo"<script>alert('Data could not be updated');
            window.location='updateme.php';
              </script>";
            }
        } else {

            echo"<script>alert('Sorry, there was an error uploading your file');
          window.location='updateme.php';
            </script>";
        }
    }

}
// Check if file already exists

// if(isset($_POST["update"])) {
//   $address = $_POST['ad'];
// if(is_array($_FILES)) {
//   $folder ="userprofiles/";
// $file = $_FILES['file']['tmp_name'];
// $source_properties = getimagesize($file);
// $image_type = $source_properties[2];
// if($image_type == IMAGETYPE_JPEG ) {
// $image_resource_id = imagecreatefromjpeg($file);
// $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
// $name =$_FILES['file']['name'];
// move_uploaded_file(imagejpeg($target_layer,$folder.$name));
// $up = $pdo->prepare("UPDATE users SET address='$address', profile_picture='$name' WHERE firstname ='$weyd_user'");
// $up->execute();
// if($up){
//   echo"<script>alert('Updated successfully!');
// window.location='account-home.php';
//   </script>";
// }else{
//   echo"<script>alert('Data could not be updated');
// window.location='updateme.php';
//   </script>";
// }
//
//
// }
// elseif( $image_type == IMAGETYPE_GIF )  {
// $image_resource_id = imagecreatefromgif($file);
// $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
// $name =$_FILES['file']['name'];
// move_uploaded_file(imagegif($target_layer,$folder.$name));
// // $up = $pdo->prepare("UPDATE users SET profile_picture='$name' WHERE firstname ='$weyd_user'");
// $up = $pdo->prepare("UPDATE users SET address='$address', profile_picture='$name' WHERE firstname ='$weyd_user'");
// $up->execute();
// if($up){
//   echo"<script>alert('Updated successfully!');
// window.location='account-home.php';
//   </script>";
// }else{
//   echo"<script>alert('Data could not be updated');
// window.location='updateme.php';
//   </script>";
// }
//
//
// }
// elseif( $image_type == IMAGETYPE_PNG ) {
// $image_resource_id = imagecreatefrompng($file);
// $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
// $name =$_FILES['file']['name'];
// move_uploaded_file(imagepng($target_layer,$folder.$name));
// // $up = $pdo->prepare("UPDATE users SET profile_picture='$name' WHERE firstname ='$weyd_user'");
// $up = $pdo->prepare("UPDATE users SET address='$address', profile_picture='$name' WHERE firstname ='$weyd_user'");
// $up->execute();
// if($up){
//   echo"<script>alert('Updated successfully!');
// window.location='account-home.php';
//   </script>";
// }else{
//   echo"<script>alert('Data could not be updated');
// window.location='updateme.php';
//   </script>";
// }
//
//
//
// }else{
//
// echo"<script>alert('File not recognized!');</script>";
// }
// }
// }
//  function fn_resize($image_resource_id,$width,$height) {
//   $target_width =200;
//   $target_height =200;
//   $target_layer=imagecreatetruecolor($target_width,$target_height);
//   imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);
//   return $target_layer;
//   }

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
<title>Weyd-Login</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<?php include("defines/header.php");?>
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-5 login-box">
<div class="panel panel-default">
<div class="panel-intro text-center">
<h2 class="logo-title">

<span class="logo-icon"> <img src="assets/ico/favicon.ico" style=""></span> WEYD
</h2>
</div>
<div class="panel-body">
<form method="post" action="" enctype="multipart/form-data">
  <div class="form-group">

  <label class="control-label">Address</label>
  <div class="input-icon">

  <input  type="text" name="ad"placeholder="No.3 Simpson street, lagos" class="form-control" required="">
  </div>
  </div>

<div class="form-group">

<label class="control-label">Profile image</label>
<div class="input-icon">

  <input id="input-upload-img1" type="file" class="file" name="file"data-preview-file-type="text">

</div>
</div>


<div class="form-group">
<input type="submit" name="update" class="btn btn-primary  btn-block" value="update"/>
</div>
</form>
</div>

</div>

</div>
</div>
</div>
</div>
</div><br/><br/>

<br/><br/><br/><br/><br/><br/>
<?php include("footer.php");?>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#input-upload-img1").fileinput();


</script>

<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/form-validation.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
