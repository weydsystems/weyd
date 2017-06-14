  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>sjdjsjdsj</title>
    </head>
    <body>
  <form method="post" action="" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="name"/><br/>
  <input type="text" name="age" placeholder="age"/><br/>  
<br/>
  <button type="submit" name="submit">Submit</button>


  </form>

  <?php

require_once("core/config.php");
if(isset($_POST['submit'])){
  $folder ="uploads/";
  $file = $_FILES['file']['name'];
  $loc = $_FILES['file']['tmp_name'];

  $send = $pdo->prepare("INSERT INTO b(name, age,file) VALUES(?,?,?)");
  $send->execute(array($_POST['name'],$_POST['age'],$file));
  // move_uploaded_file($loc,$folder.$file);
  if($send){


    echo"<script>alert('successfull');</script>";
  }


}
  ?>
    </body>
  </html>
