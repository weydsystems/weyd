<form method="get" action="">
<input type="text" name="email" placeholder="email"/><br/>
<input type="password" name="password" placeholder="password"/><br/>
<input type="submit" name="submit" value="login"/>
</form>
<?php
if(isset($_GET['submit'])){
$mysqli = new mysqli("localhost","root","prince","weyd");
$email = $_GET['email'];
$pass = $_GET['password'];
$password = md5($pass);
$res = $mysqli->query("SELECT * FROM users WHERE email='$email'");
while($row = mysqli_fetch_assoc($res)){
$pass2=  $row['password'];
}
$count =$res->num_rows;
if($pass2==$password){
  echo"hello".$count."";
}
}
 ?>
