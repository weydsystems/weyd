  <?php
$pdo = new pdo("mysql:host=localhost;dbname=weyd",'root','prince');
if(isset($_POST['submit'])){
  $sql =$pdo->prepare("INSERT INTO users (seller_id,firstname,lastname,phone,email,password) VALUES(?,?,?,?,?,?)");
  $g = $sql->execute(array('llelel',$_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['email'],$_POST['password']));

  if($g){
  echo"success";
  }else{
    echo"error";
  }
}

 ?>
