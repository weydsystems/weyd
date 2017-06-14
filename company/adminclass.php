<?php
session_start();
if(isset($_POST['login'])){
if(empty($_POST['uname'])) {
  echo"<script>alert('Username cannot be blank');</script>";
}else if(empty($_POST['password'])){
  echo"<script>alert('Password cannot be blank');</script>";
}else if($_POST['uname'] =="prince darlington" && $_POST['password'] =="b@ttl3k0d3" || $_POST['uname'] =="umar farouq" && $_POST['password']=="@faruq@_123.#"){
$_SESSION['weyd_admin'] = $_POST['uname'];
header("Location:home.php");
}


}

?>
