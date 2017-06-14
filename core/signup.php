<?php

session_start();
include("core/config.php");
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
      include("core/config.php");
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
        $my = $id;

  $_SESSION['weyd_user'] = $_POST['email'];
  $insert = $pdo->prepare("INSERT INTO users(seller_id,firstname,lastname,phone,email,password,address,profile_picture) VALUES(?,?,?,?,?,?,?,?)");
  $g = $insert->execute(array($my,$_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['email'],md5($_POST['password']),'',''));
//if there's no error, email user and redirect to login
$firstname =$_POST['fname'];

  require_once "mail/PHPMailerAutoload.php";

  $mail = new PHPMailer;


  //Tell PHPMailer to use SMTP
  $mail->isSMTP();
  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug = 2;
  //Ask for HTML-friendly debug output
  $mail->Debugoutput = 'html';

  //Set the hostname of the mail server
  $mail->Host = "sub4.mail.dreamhost.com";
  //Set the SMTP port number - likely to be 25, 465 or 587
  $mail->Port = 587;
  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;
  $mail->isHTML(true);
  $mail->CharSet="utf-8";
  //Username to use for SMTP authentication
  $mail->Username = "support@weyd.com.ng";
  //Password to use for SMTP authentication
  $mail->Password = "5NqeYEep";
  //Set who the message is to be sent from
  $mail->setFrom('support@weyd.com.ng','Weyd Team');
  //Set an alternative reply-to address
  $mail->addReplyTo('support@weyd.com.ng', 'Weyd Team');
  //Set who the message is to be sent to
  $mail->addAddress($_POST['email'],$_POST['fname']);

  //Set the subject line
  $mail->Subject = 'Welcom to weyd';
  //if you want to include text in the body.
  $mail->Body  ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width"/>
      <style type="text/css">

      * {
        margin: 0;
        padding: 0;
        font-size: 100%;

        line-height: 1.65; }
      img {
        max-width: 100%;
        margin: 0 auto;
        display: block; }

      body,
      .body-wrap {
        width: 100% !important;
        height: 100%;
        background: #efefef;
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: none; }

      a {
        color: #16A085;
        text-decoration: none; }

      .text-center {
        text-align: center; }

      .text-right {
        text-align: right; }

      .text-left {
        text-align: left; }

      .button {
        display: inline-block;
        color: white;
        background: #16A085;
        border: solid #16A085;
        border-width: 10px 20px 8px;
        font-weight: bold;
        border-radius: 4px; }

      h1, h2, h3, h4, h5, h6 {
        margin-bottom: 20px;
        line-height: 1.25; }
      h1 {
        font-size: 32px; }

      h2 {
        font-size: 28px; }

      h3 {
        font-size: 24px; }

      h4 {
        font-size: 20px; }

      h5 {
        font-size: 16px; }

      p, ul, ol {
        font-size: 16px;
        font-weight: normal;
        margin-bottom: 20px; }

      .container {
        display: block !important;
        clear: both !important;
        margin: 0 auto !important;
        max-width: 580px !important; }
        .container table {
          width: 100% !important;
          border-collapse: collapse; }
        .container .masthead {
          padding: 50px 0;
          background: #16A085;
          color: white; }
          .container .masthead h1 {
            margin: 0 auto !important;
            max-width: 90%;
            text-transform: uppercase; }
        .container .content {
          background: white;
          padding: 60px 35px; }
          .container .content.footer {
            background: none; }
            .container .content.footer p {
              margin-bottom: 0;
              color: #888;
              text-align: center;
              font-size: 14px; }
            .container .content.footer a {
              color: #888;
              text-decoration: none;
              font-weight: bold; }


      </style>
  </head>
  <body>
  <table class="body-wrap">
      <tr>
          <td class="container">

              <!-- Message start -->
              <table>
                  <tr>
                      <td align="center" class="masthead">

                          <h1>Welcome to weyd</h1>

                      </td>

                  </tr>
                  <tr>
                      <td class="content">
                        <a href="demo.weyd.com.ng" class="logo-text" style="text-decoration:none; position:relative;top:-40px;">
                          <img src="https://weyd.com.ng/assets/ico/favicon.ico" style="" width="80" height="78">
                        </a>

  				                <h2>Hi ,</h2>

                          <p>
  Thank you for joining us, welcome to weyd, your No.1 online market platfrom for buying and selling
   of fairly used, brand new and refurbished items.
   Our goal is to help your organization grow and prosper
    by helping you connect with a ready minded buyer within the country.


                          </p>
                          <h2 align="center">Lets Get Started</h2>

                          <table>
                              <tr>
                                  <td align="center">
                                      <p>
                                          <a href="https://weyd.com.ng/login.php" class="button">Login</a>
                                      </p>
                                  </td>
                              </tr>
                          </table>



                          <p><em>–Weyd Team</em></p>

                      </td>
                  </tr>
              </table>

          </td>
      </tr>
      <tr>
          <td class="container">

              <!-- Message start -->
              <table>
                  <tr>
                      <td class="content footer" align="center">
                          <p>Sent by <a href="#">Weyd Team</a>,3 Magnus Oyewole Close, Lagos</p>
                          <p><a href="mailto:">Support@weyd.com.ng</a></p>
                      </td>
                  </tr>
              </table>

          </td>
      </tr>
  </table>
  </body>
  </html>

  ';

  //send the message, check for errors
  if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    //  echo "Message sent!";
  }

if($g){
echo"<script>alert('Registration completed!');
window.location ='login.php';
</script>";

}else{
  echo"<script>alert('Error while registering');
  window.location ='login.php';
  </script>";
}
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
