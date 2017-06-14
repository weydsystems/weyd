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
<title>Payment history</title>

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
<?php include("defines/header.php");?>

<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-3 page-sidebar">
<aside>
<div class="inner-box">
<div class="user-panel-sidebar">
<div class="collapse-box">
<h5 class="collapse-title no-border"> My Classified <a class="pull-right" data-toggle="collapse" href="#MyClassified"><i class="fa fa-angle-down"></i></a></h5>
<div id="MyClassified" class="panel-collapse collapse in">
<ul class="acc-list">
<li><a href="account-home.html"><i class="icon-home"></i> Personal Home </a>
</li>
</ul>
</div>
</div>

<div class="collapse-box">
<h5 class="collapse-title"> My Ads <a class="pull-right" data-toggle="collapse" href="#MyAds"><i class="fa fa-angle-down"></i></a>
</h5>
<div id="MyAds" class="panel-collapse collapse in">
<ul class="acc-list">
<li><a href="account-myads.html"><i class="icon-docs"></i> My ads <span class="badge">42</span> </a></li>
<li><a href="account-favourite-ads.html"><i class="icon-heart"></i>
Favourite ads <span class="badge">42</span> </a></li>
<li><a href="account-saved-search.html"><i class="icon-star-circled"></i>
Saved search <span class="badge">42</span> </a></li>
<li><a href="account-archived-ads.html"><i class="icon-folder-close"></i>
Archived ads <span class="badge">12</span></a></li>
<li><a href="account-pending-approval-ads.html"><i class="icon-hourglass"></i> Pending approval <span class="badge">42</span></a></li>
</ul>
</div>
</div>

<div class="collapse-box">
<h5 class="collapse-title"> Terminate Account <a class="pull-right" data-toggle="collapse" href="#TerminateAccount"><i class="fa fa-angle-down"></i></a></h5>
<div id="TerminateAccount" class="panel-collapse collapse in">
<ul class="acc-list">
<li><a href="account-close.html"><i class="icon-cancel-circled "></i> Close
account </a></li>
</ul>
</div>
</div>

</div>
</div>

</aside>
</div>

<div class="col-sm-9 page-content">
<div class="inner-box">
<h2 class="title-2"><i class="icon-money"></i> View Transactions </h2>
<div style="clear:both"></div>
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th><span> ID</span></th>
<th>Description</th>
<th><strong>Payment Method</strong></th>
<th> Value</th>
<th> Date</th>
<th> Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>#01PA</td>
<td> Ad Fees - Pay for a single ad <br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days
</td>
<td>Paid by Mastercard <br> MasterCard. 52008282XXXX
</td>
<td>$40</td>
<td>02/21/2016 08:56</td>
<td><span class="label label-success">Done</span>
</td>
</tr>
<tr>
<td>#02PA</td>
<td><p>Ad Fees - Pay for a single ad<br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days</p>
</td>
<td>Paid by Mastercard <br> MasterCard. 52008282XXXX
</td>
<td>$40</td>
<td>02/21/2016 08:56</td>
<td><span class="label label-success">Done</span>
</td>
</tr>
<tr>
<td>#03PA</td>
<td><p>Ad Fees - Pay for a single ad<br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days</p>
</td>
<td> Pending payments
</td>
<td>$40</td>
<td>03/31/2016 11:25</td>
<td><span class="label label-info">Pending </span>
</td>
</tr>
<tr>
<td>#01PA</td>
<td>Ad Fees - Pay for a single ad <br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days
</td>
<td>Paid by Mastercard <br> MasterCard. 52008282XXXX
</td>
<td>$40</td>
<td>03/31/2016 11:25</td>
<td><span class="label label-success">Done</span>
</td>
</tr>
<tr>
<td>#02PA</td>
<td><p>Ad Fees - Pay for a single ad<br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days</p>
</td>
<td>Paid by Mastercard <br> MasterCard. 52008282XXXX
</td>
<td>$40</td>
<td>03/29/2016 11:39</td>
<td><span class="label label-success">Done</span>
</td>
</tr>
<tr>
<td>#03PA</td>
<td><p>Ad Fees - Pay for a single ad<br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days</p>
</td>
<td> Pending payments
</td>
<td>$40</td>
<td>03/20/2016 18:00</td>
<td><span class="label label-info">Pending </span>
</td>
</tr>
<tr>
<td>#01PA</td>
<td>Ad Fees - Pay for a single ad <br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days
</td>
<td>Paid by Mastercard <br> MasterCard. 52008282XXXX
</td>
<td>$40</td>
<td>03/17/2016 10:17</td>
<td><span class="label label-success">Done</span>
</td>
</tr>
<tr>
<td>#02PA</td>
<td><p>Ad Fees - Pay for a single ad<br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days</p>
</td>
<td>Paid by Mastercard <br> MasterCard. 52008282XXXX
</td>
<td>$40</td>
<td>03/17/2016 10:17</td>
<td><span class="label label-success">Done</span>
</td>
</tr>
<tr>
<td>#03PA</td>
<td><p>Ad Fees - Pay for a single ad<br>
<strong>Ads Type</strong> Premium <br>
<strong>Ads Duration</strong> 30 Days</p>
</td>
<td> Pending payments
</td>
<td>$40</td>
<td>03/15/2016 12:17</td>
<td><span class="label label-info">Pending </span>
</td>
</tr>
</tbody>
</table>
</div>
<div style="clear:both"></div>
</div>
</div>

</div>

</div>

</div>

<?php include("footer.php");?>

</div>


<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/icheck.min.html"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

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

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.6/dist/statements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 18:26:53 GMT -->
</html>
