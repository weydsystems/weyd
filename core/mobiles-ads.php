
<?php foreach($rows AS $row) {?>
  <div class="item-list">
  <div class="col-sm-2 no-padding photobox">
  <div class="add-image"><span class="photo-count">
    <i class="fa fa-camera"></i> </span> <a href="ads-details.php"><img class="thumbnail no-margin" src="uploads/<?php echo $row['file']; ?>" alt="img"></a>
  </div>
  </div>

  <div class="col-sm-7 add-desc-box">
  <div class="add-details">
  <h5 class="add-title"><a href="ads-details.php?ads=<?php echo urlencode($row['ads_title']);?>&token=<?php echo urlencode($row['ads_id']);?>&kk=<?php echo base64_encode(openssl_random_pseudo_bytes(100)).".php";?>"><?php echo"<span style='color:#16A085; font-size:20px;'>".$row['ads_title'].'</span><br/>'."<span style='color:#E74C3C;'>";?> </a></h5>
  <span class="info-row">

<span style="color:red;"class="tooltipHere" data-toggle="tooltip" data-placement="right" title="<?php echo$row['ads_title'];?>"><?php echo$row['ads_condition'];?></span>
     <br/><span class="date"><i class=" icon-clock"> </i> <?php echo date("d-M-y, h:iA", $row['ads_time']); ?></span> - <span class="category"><?php echo$row['main_category'];?> </span>-
     <span class="item-location"><i class="fa fa-map-marker"></i> <?php echo $row['location'];?> </span> </span></div>
  </div>

  <div class="col-sm-3 text-right  price-box">
  <h2 class="item-price"> <?php echo"&#8358;".number_format($row['price']);?></h2>
  <a class="btn btn-default  btn-sm make-favorite" href="?save"> <i class="fa fa-heart"></i> <span>Save</span> </a></div>

  </div>
<?php }?>
