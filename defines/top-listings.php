<?php foreach ($rows as $row) {?>


  <div class="col-lg-2 col-md-3 col-sm-6 col-xs-4 f-category">
 <a href="ads-details.php??w_dir=<?php echo bin2hex(openssl_random_pseudo_bytes(20));?>&&ads=<?php echo urlencode($row['ads_title']);?>&&m=<?php echo base64_encode(openssl_random_pseudo_bytes(30));?>">
<img src="uploads/<?php echo $row['file']; ?>" class="img-responsive" alt="img">
  <div style="height:30px;"><h6> <?php echo"<span style='color:#16A085; font-size:15px;'>".$row['ads_title'].'
  </span><br/>'."<span style='color:#E74C3C;'></span>";?></h6></div>
  &nbsp;
<div style="font-size:15px;"><?php echo"&#8358;".number_format($row['price']);?>

<a href="??w_fv=<?php echo bin2hex(openssl_random_pseudo_bytes(1500));?>&&favourite=<?php echo urlencode($row['ads_id']);?>" style="color:#DD0908;"> <i class="fa fa-heart" style="color:#DD0908;"></i> <span>Save</span> </a>
</div>

</a>
  </div>
<?php }?>
