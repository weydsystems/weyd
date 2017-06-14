<?php foreach ($frows as $row) {
  ?>
<div class="item"><a href="ads-details.php?ads=<?php echo urlencode($row['ads_title']);?>">
  <span class="item-carousel-thumb">
  <img class="img-responsive" src="uploads/<?php echo $row['file']; ?>" alt="img">
  </span>
  <span class="item-name"><?php echo"<span style='color:#16A085; font-size:20px;'>".$row['ads_title'].'</span><br/>'."<span style='color:#E74C3C;'>&#8358;".number_format($row['price'])."</span>";?> </span>
  </a>

  </div>
<?php } ?>
