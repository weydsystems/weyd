
<?php
if(isset($_POST['submit'])){
  $mysqli = new mysqli("localhost","root","prince","weyd");
$file = $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$type_array = array("image/jpg","image/jpeg","image/png","image/gif");
$folder="uploads/";

$ads_id='jfjuuuj';


  for($i=0;$i<count($file_loc); $i++){
  if(move_uploaded_file($file_loc[$i],$folder.$file[$i]))
  {
  $name = $file[$i];
  $y =$name;
  $n =$name;
  $newtype = $file_type[$i];
  $yt = $file_type[$i];
  $nt = $file_type[$i];
  $newsize = $file_size[$i];
  $sz= $file_size[$i];
  $nz = $file_size[$i];

    $sql="INSERT INTO ads_uploads(`file`,`type`,`size`) VALUES('$y','$yt','$sz')";
    $mysqli->query($sql);


  }else{
  echo"<script>alert('File input cannot be empty!');</script>";
  }
}
}
?>
 <form method="post" enctype="multipart/form-data">

   <div class="form-group">
   <label class="col-md-3 control-label" for="textarea"> Picture </label>
   <div class="col-md-8">
   <div class="mb10">
   <input id="input-upload-img1" type="file" class="file"name="file[]" data-preview-file-type="text">
   </div>
   <div class="mb10">
   <input id="input-upload-img2" type="file" class="file" name="file[]"data-preview-file-type="text">
   </div>

   <p class="help-block">Add up to 5 photos. Use a real image of your
   product, not catalogs.</p>
   </div>
   </div>


<input type="submit" name="submit" value="submit"/>
</form>
