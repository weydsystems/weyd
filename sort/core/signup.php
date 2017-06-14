<?php
session_start();
class SignUp{
  //seller_id Generator
  function Gen($length = 8) {
      $characters = '0123456789ABCD-EFGHIJKLMNOP-QRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = 'WE-YD-';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  function users()
  {
    if(isset($_POST['submit'])){
    $id =$this->Gen();
    try{
      $pdo = new PDO("mysql:hostname=localhost;dbname=weyd",'root','prince');
    }catch(PDOexception $e){
      $e->getMessage();
    }

      // $p = $row['email'];
      // $p2 = $row['phone'];

    if(empty($_POST['fname'])){
echo"<script>alert('First Name is required');</script>";
    }else   if(empty($_POST['lname'])){
echo"<script>alert('Last Name is required ');</script>";
    }else   if(empty($_POST['phone'])){
echo"<script>alert('Please enter a phone number');</script>";
    }else   if(empty($_POST['email'])){
echo"<script>alert('Email address is required!');</script>";
    } else   if(empty($_POST['password'])){
      echo"<script>alert('Please Enter atleast six characters of password');</script>";
      //Test before execution
    }else{

      //validation
      $db = $pdo->prepare("SELECT * FROM users WHERE email =? OR phone =?");
      $db->execute(array($_POST['email'],$_POST['phone']));
      $row = $db->fetch(PDO::FETCH_ASSOC);
      if($row['email'] == $_POST['email']){
        echo"<script>alert('Email already already exist');</script>";
      } else if($row['phone'] == $_POST['phone']){
        echo"<script>alert('Phone number already already exist');</script>";
      }
      else {

  $_SESSION['weyd_user'] = $_POST['email'];
  $insert = $pdo->prepare("INSERT INTO users(seller_id,firstname,lastname,phone,email,password) VALUES(?,?,?,?,?,?)");
  $g = $insert->execute(array($id,$_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['email'],md5($_POST['password'])));
//if there's no error, email user and redirect to login
  header("location:login.php");
  $email = mail("Hello\n\r\n\r",$_POST['fname'],"<br/>Welcome to Weyd.ng",$_POST['email']);

//ends
}
    }
      }
    }

}
//class object
$use = new SignUp;
echo $use->users();
 ?>
