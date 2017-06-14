<?php

session_start();
  $url=$_SERVER['HTTP_REFERER'];
class Login{
  public $email;
  public $pass;
  //sanitize mail method
  function fetchUsers(){
    if(isset($_POST['submit'])){

      session_Start();
      require("core/sqlicon.php");

    //point to the various methods
    $email = trim($_POST['email']);
    $pass= trim($_POST['password']);
    $password = md5($pass);
    $res = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($res);
    $pass2=  $row['password'];
    $email2 = $row['email'];
    $count =$res->num_rows;
    if($password !==$pass2 ||$email!==$email2){
      $Error ="<script>alert('No match found!');</script>";
      $Error2 ="<script>alert('Please provide a valid password or email');</script>";
      echo $Error,$Error2;

    }else if($count==1 && $pass2==$password){
        $_SESSION['weyd_user'] =$row['firstname'];

  header("location:account-home.php");



    }

}
  }
}

$g = new Login;

echo $g->fetchUsers();

 ?>
