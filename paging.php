<?php
  $pdo = new PDO("mysql:hostname=localhost;dbname=dbtuts",'root','prince');
  $page =(int)(!isset($_GET['page']) ? 1 :$_GET['page']);
  $limit = 10;
  $start = ($page *$limit)-$limit;
  $statement = "tbl_uploads";
  $r =$pdo->prepare("SELECT * FROM {$statement} LIMIT {$start},{$limit}");
  $r->execute();
  while($row =$r->fetch(PDO::FETCH_ASSOC)){

    echo $row['file'];
    echo"<br/>";
  }
  ?>
<?php
for($i=1;$i<=$limit; $i++){
 ?>
<a href="?page=<?php echo$i;?>"><?php echo $i;?></a>

<?php } ?>
