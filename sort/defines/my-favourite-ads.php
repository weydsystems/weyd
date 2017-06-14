<?php foreach($appsrows3 AS $row){?>
<tr>
<td style="width:2%" class="add-img-selector">
<div class="checkbox">
<label>
<input type="checkbox">
</label>
</div>
</td>
<td style="width:14%" class="add-img-td"><a href="ads-details.php"><img class="thumbnail  img-responsive" src="uploads/<?php echo $row['file']; ?>" alt="img"></a></td>
<td style="width:58%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.php?ads=<?php echo urlencode($row['ads_title']);?>"><?php echo $row['ads_title']; ?></a> </strong></p>
<p><strong> Posted On </strong>:
<?php echo date("d-M-y, h:iA", $row['ads_time']); ?> </p>
<p><strong>Visitors </strong>: 221 <strong>Located In:</strong> <?php echo $row['location']; ?>
</p>
</div>
</td>
<td style="width:16%" class="price-td">
<div><strong> <?php echo "N".number_format($row['price']); ?></strong></div>
</td>
<td style="width:10%" class="action-td">
<div>
<p><a class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Edit </a>
</p>
<p><a class="btn btn-info btn-xs"> <i class="fa fa-mail-forward"></i> Share
</a></p>
<p><a class="btn btn-danger btn-xs" name="delete" href="?name=<?php echo$row['ads_id'];?>"> <i class=" fa fa-trash"></i> Delete
</a></p>
</div>
</td>
</tr>
<?php } ?>
