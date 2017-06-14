<?php

  $n= $_SESSION['weyd_user'];
  session_Start();
  session_destroy();
unset($n);
  header("location:login.php");



 ?>
