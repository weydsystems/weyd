<?php


if(isset($_POST['submit'])){
  function Gen($length =6) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRST';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $first  = Gen();
  $md = md5($first);
  $_SESSION['new_w'] = $first;
if(empty($_POST['email'])){
  echo"<script>alert('Email cannot be blank');</script>";
}else{
  $e = $_POST['email'];
$b = $pdo->prepare("SELECT * FROM users WHERE email='$e'");
$b->execute(array($_POST['email']));
$rows = $b->fetch(PDO::FETCH_ASSOC);
$newemail = $rows['email'];
if($newemail==$_POST['email']){
  $_SESSION['nm'] = $first;
  echo"<script>
  $(document).ready(function(){
$('#b2').show();
$('#bb').hide();
$('#panel').hide();
  });
alert('Your password has been sent to your mail, kindly login and check');
  window.location='login.php';
  </script>";
$subject ="Password change\n\n";
$from ="support@weyd.com.ng\n";
$message ="Dear".$rows['firstname'].", your request to change password was successful\n.\n Find your login details below\n
<b>New password:</b>\t".$first." ";
  mail($e, $subject, $message,$from,"SoodarSoft Limited");
  $update = $pdo->prepare("UPDATE users SET password='$md' WHERE email='$e'");
  $update->execute();

}else{
  echo"<script>alert('User with $e does not exist!');</script>";
}
}
}
?>
