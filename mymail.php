<?php

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
$mail->setFrom('support@weyd.com.ng','WEYD TEAM');
//Set an alternative reply-to address
$mail->addReplyTo('support@weyd.com.ng', 'WEYD TEAM');
//Set who the message is to be sent to
$mail->addAddress('ekeminyd@gmail.com', 'John Doe');

//Set the subject line
$mail->Subject = 'Welcom to weyd';
//if you want to include text in the body.
$mail->Body  ='<!DOCTYPE html><html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
	</head>
	<style type="text/css">
body{
	background:#f7f7f7;
}
.container{
	margin:0 auto;
	width:600px;
	background:#C7C7D8;

}
.container p,h1,h2,h3{
	font-family: "Comic Sans MS", cursive, sans-serif;
	color:#464666;
	font-size: 25px;
}
header{
	padding:40px 40px;
	background: #16A085;
}
#get{
	background: #16A085;
	width:100px;
	float:center;
	height:30px;
border: 0px;
}
#get a{
	text-decoration: none;
	margin:10px;
	color: white;
	font-size: 20px;
}
	</style>
	<body>
<div class="container">
	<header>

	</header>
	<br/>
	<h1>Hi Prince,</h1>
		<br/>	<br/>
	<p>Thank you for joining us, welcome to weyd, your No.1 online market platfrom for buying and selling
	 of fairly used, brand new and refurbished items.
	 Our goal is to help your organization grow and prosper
		by helping you connect with a ready minded buyer within the country.</p>
		<h2 align="center">Get started </h2><br/>
		<div align="center"><button id="get"><a href="https://weyd.com.ng/login.php">Login</a></button></div>

</div>
	</body>
</html>
';

//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message sent!";
}

?>
