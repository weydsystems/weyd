<?php
if(isset($_GET['search'])){
 $pdo = new PDO("mysql:hostname=localhost;dbname=weyd",'root','prince');
 $q = $_GET['search'];
  $s = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id  WHERE ads_title LIKE '%$q%' OR main_category LIKE '%$q%' ");
  $s->execute(array($_GET['search']));




}
?>
<?php while($row = $s->fetch(PDO::FETCH_ASSOC)){?>
  <a href="ads-details.php?at=<?php echo$row['ads_title'];?>&token=<?php echo$row['ads_id'];?>" style="text-decoration:none;">
<div class="">
<img src="uploads/<?php echo $row['file']; ?>" alt="img" style="width:80px;height:40px;">&nbsp; &nbsp;
<p style="float:right; position:relative;left:-150px;top:-20px;"><?php echo$row['ads_title'];?></p>
</div>
</a>
  <?php } ?>
