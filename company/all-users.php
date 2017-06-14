<?php include 'header.php'; ?>
<?php include("core/usersclass.php");?>
<div style="border-bottom: #ccc thin solid; margin-bottom: 1%">
  <h3>Total Users <!-- <?php echo $show['firstname']." ".$show['lastname'];?> --></h3>
  <p>All users <!-- <?php echo"<span style='color:red'>".$show['ads_id']."</span>";?> --></p>
</div>

<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Lastname</th>
      <th>Firstname</th>
      <th>Email Address</th>
      <th>Email Verify</th>
      <th>Total Ads</th>
      <th>Approved Ads</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users AS $user) { ?>
    <tr>
      <td> <?php echo $user['firstname'];?></td>
      <td><?php echo $user['lastname'];?></td>
      <td><?php echo $user['email'];?></td>
      <td>Yes</td>
      <td>55</td>
      <td>42</td>
    </tr>
<?php } ?>
  </tbody>
</table>
</div>

<?php include 'footer.php'; ?>
