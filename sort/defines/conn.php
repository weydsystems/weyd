<?php

try{
  $pdo = new PDO("mysql:hostname=localhost;dbname=weyd",'root','prince');
}catch(PDOexception $e){
  $e->getMessage();
}


 ?>
