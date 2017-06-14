<?php
$mysqli = mysqli_connect("localhost","root","prince","weyd");

if(isset($_POST['submit'])){
$email = $_POST['email'];
$pas = $_POST['password'];
$sql = "SELECT * FROM users WHERE email ='$email' AND password ='$pas'";
$query =$mysqli->query($sql);
if($query){
  $_SESSION['weyd_user'] =$email;
  $row = mysqli_num_rows($query);
  echo"<script>alert('.$row.');</script>";
}
}
 ?>
<form method="post" action="">

<input type="email" name="email" placeholder="email"><br/>
<input type="password" name="password" placeholder="Password"><br/>
<input type="submit" name="submit" value="submit"/>
</form>
