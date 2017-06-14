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

<link rel="stylesheet" href="bootstrap/css/font-awesome.css">

<link rel="stylesheet" href="bootstrap/css/style.css">
<link rel="stylesheet" href="bootstrap/css/font-awesome.css">

  <!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

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
  <div class="container-fluid">
  <div class="scrolla">
  <div class="green-header">
    <div style="float: right; text-align: right">
    <p><b>Product Name: </b>Dummy one</p
    <p><b>Product code: </b>WDGH-TVGG</p>
    <a href="#"><i class="btn btn-warning fa fa-ban"> Report</i></a>
    <a href="#"><i class="btn btn-danger fa fa-trash"> Delete</i></a>
  </div>
  <p><b>Buyer's Email Address:</b> user@example.com</p>
  <p><b>Buyer's Name:</b> User Example</p>
  <p><b>Buyer's Phone number:</b> 0800002000</p>
  </div>
  <div style="padding: 10px">
    <p>Hello there, I would like to know if your product is negotiable even though you added a fixed price, i don't have up to that.</p>
  </div>

  <div class="form-bottom">
    <form>
      <div class="form-group">
    <textarea class="form-control" placeholder="Type a message to reply user" rows="4" required style="resize: none"></textarea>
    <button type="submit" style="margin-top: 5px;" class="btn btn-block btn-success"><span class="fa fa-paper-plane"> Send Message</span></button>
  </div>
  </form>
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
