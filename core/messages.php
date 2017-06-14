<?php foreach($appsrows4 AS $row){?>
<tr>
<td style="width:10%">
  <?php echo$row['ads_id'];?>
</td>
<td style="width:15%">
<?php echo$row['ads_title'];?>
</td>
<td style="width:30%">
<?php echo $row['message'];?>
</td>
<td style="width:">
<?php echo$row['buyersname'];?>
</td>
<td style="width:150px;">
<?php echo$row['buyersphone'];?>
</td>
<td style="width:170px;">
<?php echo$row['buyersemail'];?>
</td>

<td style="width:60px;">
  <a class="btn btn-danger btn-xs" name="delete"
  href="?trash=<?php echo$row['buyersemail'];?>"> <i class=" fa fa-trash"></i> Delete
  </a>

</td>

</tr>
<?php } ?>
