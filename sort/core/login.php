<?php

session_start();
class Login{
  public $email;
  public $pass;
  //sanitize mail method
  function sanitize($email){
    $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  return $email;
  }
  //sanitize password method
  function sanitizepass($pass){
    $pass= trim($_POST['password']);
  $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    return $pass;

  }
  function fetchUsers(){
    if(isset($_POST['submit'])){
      session_Start();
      require("core/sqlicon.php");
    //point to the various methods
    $email =$this->sanitize();
    $pass = $this->sanitizepass();
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
