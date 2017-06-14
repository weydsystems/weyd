<?php
ob_Start();
session_Start();
require("core/config.php");
if(isset($_GET['check'])){
$l= $_GET['l'];
$f= $_GET['f'];
  // // $lookingfor = $_GET['ads'];
  $get = $pdo->prepare("SELECT * FROM ads WHERE location LIKE '%$l%' OR main_category LIKE '%$f%'ORDER BY main_category");
  $get->execute();
  $rowcount =$get->rowCount();
  $rows = $get->fetchAll();

}
?>
