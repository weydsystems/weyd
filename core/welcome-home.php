<?php
$sesUser =$_SESSION['weyd_user'];
$res=$mysqli->query("SELECT * FROM users WHERE firstname='$sesUser'");
$userRow=mysqli_fetch_assoc($res);
$name =$userRow['lastname'];
 ?>
