<?php
  if(isset($_POST['pop'])){
    $folder="uploads/";
    // $popname = $_SESSION['csUser'];
    $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $move = move_uploaded_file($file_loc,$folder.$file);
      // $ads_img = $conn->prepare("INSERT INTO pop(file,uname) VALUES (?,?)");
      // $ads_img->execute(array($file,$popname));

  }

 ?>
 <form method="post" action=""enctype="multipart/form-data">

<input type="file" name="file">

<input type="submit" name="pop" value="submit">

 </form>
