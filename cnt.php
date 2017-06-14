<?php
$pdo = new PDO("mysql:hostname=localhost;dbname=weyd",'root','prince');
if(isset($_POST['submit'])){
$sql = $pdo->prepare("INSERT INTO feedback (fname,lname,company,email,msg) VALUES(?,?,?,?,?)");
$d =$sql->execute(array($_POST['firstname'],$_POST['lastname'],$_POST['company'],$_POST['email'],$_POST['message']));
}
// if(isset($_POST['send'])){
//   $mysqli = new mysqli("localhost","root","prince","weyd");
//   $fname =$_POST['firstname'];
//   $lastname =$_POST['lastname'];
//   $comp =$_POST['company'];
//   $email =$_POST['email'];
//   $msg =$_POST['message'];
// $sql ="INSERT INTO contacts (id,firstname,lastname,company,email,message) VALUES('3',$fname','$lastname','$comp','$email','$msg')";
// $query =  $mysqli->query($sql);
// if($query){
//   echo"<script>alert('sjfsjfj');</script>";
// }
//
// }
//

 ?>



 <form method="post" action="">
   <input tupe="text" name="firstname" /><br/>
   <input type="text" name="lastname" /><br/>
   <input type="text" name="company" /><br/>
   <input type="text" name="email" /><br/>
   <input type="text" name="message" /><br/>
   <input type="submit" name="submit" value="submit">
 </form>
