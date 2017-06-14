<div class="col-md-3">
<div id="sidebar">
  <ul id="side-nav">
    <li class="<?= ($activePage == 'index') ? 'selected':''; ?>"><a href="index.php"><span class="fa fa-home"> Dashboard</span></a></li>
    <li class="<?= ($activePage == 'all-users') ? 'selected':''; ?>"><a href="all-users.php"><span class="fa fa-user"> Total Users</span></a></li>
    <li class="<?= ($activePage == 'posted-ads') ? 'selected':''; ?>"><a href="posted-ads.php"><span class="fa fa-credit-card"> Posted ads</span></a></li>
    <li class="<?= ($activePage == 'logout') ? 'selected':''; ?>"><a href="logout.php?logout"><span class="fa fa-sign-out"> Logout</span></a></li>
  </ul>
</div>
</div>
