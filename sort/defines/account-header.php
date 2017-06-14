<title><?php echo $userRow['firstname']."`s Account on";?> |Weyd.com.ng</title>
<script src="jquery.min.js"></script>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">

<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>

  <div class="header">
  <nav class="navbar   navbar-site navbar-default" role="navigation">
    <div class="container">
    <div class="navbar-header">
    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
    <a href="index.php" class="navbar-brand logo logo-title" style="color:#159C81;">

    <span class="logo-icon" style="color:#159C81;">
      <!-- <i class="icon icon-search-1 ln-shadow-logo shape-0"></i>  -->
  <img src="assets/ico/favicon.ico" style="">
    </span>
    WEYD</a></div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">

      <li><a href="<?php echo('logout.php?logout')?>">Signout <i class="glyphicon glyphicon-off"></i> </a></li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span><?php echo $userRow['firstname']." ".$userRow['lastname'];?></span> <i class="icon-user fa"></i>
      <i class=" icon-down-open-big fa"></i></a>
      <ul class="dropdown-menu user-menu">
      <li class="active"><a href="account-home.php"><i class="icon-home"></i> Personal Home
      </a></li>
      <li><a href="account-myads.php"><i class="icon-th-thumb"></i> My ads </a></li>
      <li><a href="account-favourite-ads.php"><i class="icon-heart"></i> Favourite ads </a>
      </li>
      <li><a href="inbox.php"><i class="icon-folder-close"></i> Inbox
      </a></li>
      <li><a href="account-pending-approval-ads.php"><i class="icon-hourglass"></i> Pending
      approval </a></li>
      </ul>
      </li>
    <li><a href="https://instagram.com/weyd_ng"><i class="fa fa-instagram" style="font-size:20px; color:#16A085;"></i></a></li>
    <li><a href="https://facebook.com/weydng"><i class="fa fa-facebook" style="font-size:20px; color:#16A085;"></i></a></li>

    <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.php"><i class="fa fa-plus" style="font-size:10px;"></i>SELL AN ITEM</a></li>

  </ul>
    </div>

    </div>

  </nav>
  </div>
