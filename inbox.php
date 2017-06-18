<?php
ob_start();
session_Start();
require("core/config.php");
require("core/sqlicon.php");
if(!$_SESSION['weyd_user']){
  header("location:login.php");

}else{
  include("core/welcome-home.php");
  include("core/my-ads.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>My Inbox</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">


<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<?php include("defines/account-header.php");?>
<div class="main-container">
<div class="container">
<div class="row">
  <?php
include("defines/account-sidebar.php");

   ?>

<div class="col-sm-9 page-content">
<div class="inner-box">
<h2 class="title-2"><i class="icon-folder-close"></i> My Inbox </h2>
<div class="container-fluid">
<div class="scrolla">
<table class="table table-hover">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Buyer's messaage</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="clickable-row" data-href="messagepreview.php">Dummy one</td>
      <td class="clickable-row" data-href="messagepreview.php"><strong>You have a new message from (buyer's name here)</strong></td>
      <td><a href="#"><span class="fa fa-send-o"> Track form</span></a><a href="#"> <span class="fa fa-trash"></span></a></td>
    </tr>
    <tr>
      <td class="clickable-row" data-href="messagepreview.php">Dummy one</td>
      <td class="clickable-row" data-href="messagepreview.php"><strong>You have a new message from (buyer's name here)</strong></td>
      <td><a href="#"><span class="fa fa-send-o"> Track form</span></a><a href="#"> <span class="fa fa-trash"></span></a></td>
    </tr>
    <tr>
      <td class="clickable-row" data-href="messagepreview.php">Dummy one</td>
      <td class="clickable-row" data-href="messagepreview.php"><strong>You have a new message from (buyer's name here)</strong></td>
      <td><a href="#"><span class="fa fa-send-o"> Track form</span></a><a href="#"> <span class="fa fa-trash"></span></a></td>
    </tr>
  </tbody>
</table>

</div>
</div>
<script>
jQuery(document).ready(function($){
  $(".clickable-row").click(function(){
    window.location = $(this).data("href");
  });
});
</script>
</div>
</div>

</div>

</div>

</div>
<?php include("footer.php");?>

</div>



<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/icheck.min.php"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/js/footablecd98.js?v=2-0-1" type="text/javascript"></script>
<script src="assets/js/footable.filtercd98.js?v=2-0-1" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#addManageTable').footable().bind('footable_filtering', function (e) {
            var selected = $('.filter-status').find(':selected').text();
            if (selected && selected.length > 0) {
                e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                e.clear = !e.filter;
            }
        });

        $('.clear-filter').click(function (e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
        });

    });
</script>

<script>

    function checkAll(bx) {
        var chkinput = document.getElementsByTagName('input');
        for (var i = 0; i < chkinput.length; i++) {
            if (chkinput[i].type == 'checkbox') {
                chkinput[i].checked = bx.checked;
            }
        }
    }

</script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>
