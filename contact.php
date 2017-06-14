<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
  <div class="container">
  <div class="navbar-header">
  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
  <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
  <a href="/" class="navbar-brand logo logo-title" style="color:#159C81;">

  <span class="logo-icon" style="color:#159C81;">
    <!-- <i class="icon icon-search-1 ln-shadow-logo shape-0"></i>  -->
<img src="assets/ico/favicon.ico" style="">
  </span>
  WEYD</a></div>
  <div class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="https://instagram.com/weyd_ng"><i class="fa fa-instagram" style="font-size:20px; color:#16A085;"></i></a></li>
  <li><a href="https://facebook.com/weydng"><i class="fa fa-facebook" style="font-size:20px; color:#16A085;"></i></a></li>
<li id="loog1"><a href="login"><i class="fa fa-lock" style="font-size:20px; color:#16A085;"></i> Login</a></li>
<li id="loog2"><a href="account-home"><i class="fa fa-user" style="font-size:20px; color:#16A085;"></i><?php echo $userRow['firstname'];?></a></li>

  <li class="postadd">
    <a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads"><i class="fa fa-plus" style="font-size:10px;"></i>SELL AN ITEM</a></li>

</ul>
  </div>

  </div>

</nav>
</div>


<?php
ob_start();
if($_SESSION['weyd_user']){
echo"<script>
$(document).ready(function(){
$('#loog1').hide();
});
</script>";




}else{
echo"<script>
$(document).ready(function(){
$('#loog2').hide();
});
</script>";

}

?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7498179364642358",
    enable_page_level_ads: true
  });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84099429-1', 'auto');
  ga('send', 'pageview');

</script>
