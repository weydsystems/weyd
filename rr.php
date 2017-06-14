<?php
if(isset($_POST['submit'])){
  $mysqli = new mysqli("localhost","root","prince","dbtuts");
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="uploads/";

$id ="kskslfk";
for($i=0;$i<count($file_loc); $i++){
if(move_uploaded_file($file_loc[$i],$folder.$file[$i]))
{
  $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$file_size')";
mysqli_query($sql);

}else{
echo"<br/>";



echo"false";


}
}
}
?>


 <form method="post" enctype="multipart/form-data">
<input type="file" name="file[]" value="input file"/><br/>
<input type="file" name="file[]" value="input file"/><br/>
<input type="submit" name="submit" value="submit"/>
</form>
