<?php
ob_start();
session_Start();
require("core/config.php");
require("core/sqlicon.php");
if(!$_SESSION['weyd_user']){
  header("location:login.php");

}else{
  include("core/ads-control.php");
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
<title>Weyd | Post Ads</title>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
<script src="jquery.min.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=408786366159478";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
        paceOptions = {
            elements: true
        };
    </script>
    <script>
$(document).ready(function(){

        $("#accordion").hide();
          $("#accordion1").hide();
          $("#accordion3").hide();
          $("#accordion4").hide();
        $("#acc").click(function(){
  $("#accordion").toggle();
        });

        $("#acc2").click(function(){
  $("#accordion1").toggle();
        });
        $("#acc3").click(function(){
    $("#accordion3").toggle();
        });
        $("#acc4").click(function(){
    $("#accordion4").toggle();
        });

});
</script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<?php include("defines/header.php");?>

<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-9 page-content">
<div class="inner-box category-content">
<h2 class="title-2 uppercase" id="acc2"><strong> <i class="icon-plus"></i>Add details</strong></h2>

<div class="row">
<div class="col-sm-12">
<form method="post" action="" class="form-horizontal" enctype="multipart/form-data" >
<fieldset>
<!-- main category -->
  <div id="accordion1">
    <div class="form-group">
    <label class="col-md-3 control-label">Main Category</label>
    <div class="col-md-8">
    <select name="main-category" id="category-group" class="form-control">
    <option value="0" selected="selected"> Select a category...</option>
                    <option>Mobiles</option>
              <option>Electronics and Appliances</option>
              <option>Health and Beauty</option>
              <option>Animals and Pets</option>
                <option>Real Estate</option>
              <option>Hobby, Sport and Kid</option>
              <option>Cars and Vehicles</option>

    </select>
    </div>
    </div>
    <!-- primary cattegory -->
    <div class="form-group">
    <label class="col-md-3 control-label">Category</label>
    <div class="col-md-8">
    <select name="sub-category" id="category-group" class="form-control"required="">
    <option value="0" selected="selected"> Select a category...</option>
    <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - MOBILE PHONE BRAND -
    </option>
    <option value="acer">Acer</option><option value="alcatel">Alcatel</option>
    <option value="apple">Apple iPhone</option><option value="asus">Asus</option><option value="benq">BenQ</option><option value="bird">Bird</option><option value="blackberry">Blackberry</option><option value="china-mobile">China Mobile</option><option value="dell">Dell</option><option value="ericsson">Ericsson</option>
    <option value="google-nexus">Google Nexus</option><option value="haier">Haier</option><option value="hp">HP</option><option value="htc">HTC</option><option value="huawei">Huawei</option><option value="i-mate">I-Mate</option>
    <option value="lenovo">Lenovo</option><option value="lg">LG</option><option value="mega-gate">Mega Gate</option><option value="microsoft">Microsoft</option><option value="motorola">Motorola</option><option value="nec">Nec</option><option value="nokia">Nokia</option><option value="palm">Palm</option>
    <option value="philips">Philips</option><option value="q-mobile">Q Mobile</option><option value="sagem">Sagem</option><option value="samsung">Samsung</option><option value="siemens">Siemens</option><option value="sony">Sony</option>
    <option value="sony-ericsson">Sony Ericsson</option><option value="sprint">Sprint</option><option value="tecno">Tecno</option><option value="vodafone">Vodafone</option><option value="zte">ZTE</option><option value="other">Other brand</option>
    <option value="Boats"> Boats</option>
    <option value="Vehicles"> Other Vehicles</option>

    <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Electronics and Appliances -
    </option>
    <option value="Computers & Tablets">Computers & Tablets</option>
    <option value="Computer Accessories">Computer Accessories</option>
    <option value="TVs">TVs</option>
    <option value="Video Accessories">Video Accessories</option>
    <option value="Cameras & Camcorders">Cameras & Camcorders</option>
    <option value="Audio & MP3">Audio & MP3</option>
    <option value="Other Electronics">Other Electronics</option>
    <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Health and Beauty -
    </option>

    <option value="Clothing & Fashion">Clothing & Fashion</option>
    <option value="Shoes & Footwear">Shoes & Footwear</option>
    <option value="Jewellery">Jewellery</option>
    <option value="Eyeglasses">Eyeglasses</option>
    <option value="Watches">Watches</option>
    <option value="Bags">Bags</option>
    <option value="Other Fashion Accessories">Other Fashion Accessories</option>
    <option value="Health & Beauty Products">Health & Beauty Products</option>
    <option value="Other Personal Items">Other Personal Items</option>

    <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Animals and Pets -
    </option>
    <option value="pets">Pets</option>
    <option value="Farm Animals">Farm Animals</option>
    <option value="Food for Animals">Food for Animals</option>
    <option value="Accessories for Animals">Accessories for Animals</option>
    <option value="Veterinary Services">Veterinary Services</option>
    <option value="Grooming Services">Grooming Services</option>
    <option value="Other Pets & Animals">Other Pets & Animals</option>
    <option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Real Estate -
    </option>
    <option value="Apartment"> Apartment</option>
    <option value="Home"> Home</option>
    <option value="Vacation"> Vacation Rentals</option>
    <option value="Commercial"> Commercial offices and local</option>
    <option value="Grounds"> Grounds</option>
    <option value="Houseshares"> Houseshares</option>
    <option value="Other real estate"> Other real estate</option>
    <option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
    -Hobby, Sport and Kid
    </option>
    <option value="Musical Instruments">Musical Instruments</option>
    <option value="Sports Equipment">Sports Equipment</option>
    <option value="Travel Items">Travel Items</option>
    <option value="Events & Tickets">Events & Tickets</option>
    <option value="Handicrafts">Handicrafts</option>
    <option value="Art & Collectibles">Art & Collectibles</option>
    <option value="Music, Books & Movies">Music, Books & Movies</option>
    <option value="Video Games & Consoles">Video Games & Consoles</option>
    <option value="Childrens Items">Childrens Items</option>
    <option value="other">other</option>

    <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Extra -
    </option>
    <option value="Other"> Other</option>
    </select>
    </div>
    </div>

    <!-- primary category ends -->
    <div class="form-group">
    <label class="col-md-3 control-label">Condition</label>
    <div class="col-md-8">
    <select name="condition" id="category-group" class="form-control"required="">
      <option value="0" selected="selected"> Select a condition</option>
    <option value="new">New</option>
    <option value="fairlyused"> Fairly used</option>
      <option value="refurbished">Refurbished</option>
              </select>
    </div>
    </div>



    <div class="form-group">
    <label class="col-md-3 control-label" for="Adtitle">Ad title</label>
    <div class="col-md-8">
    <input id="Adtitle" name="ads-title" placeholder="Ad title"
    class="form-control input-md"  type="text"required="">
    <span class="help-block">A great title needs at least 60 characters. </span>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-3 control-label" for="textarea">Describe ad </label>
    <div class="col-md-8">
    <textarea class="form-control" id="textarea" name="description" placeholder="Description"required=""></textarea>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-3 control-label" for="Price">Price</label>
    <div class="col-md-4">
    <div class="input-group"><span class="input-group-addon">&#8358;</span>
    <input id="Price" name="price" class="form-control" placeholder="placeholder"  type="number" required="">
    </div>
    </div>
    <div class="col-md-4">
    <div class="checkbox">
    <select name="negotiable" id="category-group" class="form-control"required="">
      <option value="0" selected="selected"> Select deal type</option>
    <option value="negotiable">Negotiable</option>
    <option value="none">Fixed</option>
              </select>
    </div>
    </div>
    </div>

  </div>
<div class="content-subheading" id="acc"><i class="icon-camera fa"></i> <strong>Add photo</strong></div>
<div id="accordion">
<form method="post" enctype="multipart/form-data">
  <div class="form-group">

  <div class="col-md-8">
    <label class="col-md-3 control-label" for="textarea">Front view</label>
  <div class="mb10">
  <input id="input-upload-img1" type="file" class="file"name="file" data-preview-file-type="text" required="">
  </div>
  <label class="col-md-3 control-label" for="textarea">Side view</label>
  <div class="mb10">
  <input id="input-upload-img2" type="file" class="file" name="file1"data-preview-file-type="text"required="">
  </div>
  <label class="col-md-3 control-label" for="textarea">Back view</label>
  <div class="mb10">
  <input id="input-upload-img3" type="file" class="file" name="file2"data-preview-file-type="text"required="">
  </div>
</form>
  <p class="help-block">Add up to 5 photos. Use a real image of your
  product, not catalogs.</p>
  </div>
</div></div>

<div class="content-subheading" id="acc3"><i class="icon-user fa"></i> <strong>Seller
Location</strong></div>

<div id="accordion3">


  <div class="form-group">
  <label class="col-md-3 control-label" for="textinput-name">Location</label>
  <div class="col-md-8">
    <select name="location" id="category-group" class="form-control"required="">
      <option value="0" selected="selected"> Select location / region</option>
      <option value="Abia">Abia</option>
      <option value="Adamawa">Adamawa</option>
      <option value="Anambra">Anambra</opiton>
      <option value="Akwa Ibom">Akwa Ibom</option>
      <option value="Bauchi">Bauchi</option>
      <option value="Bayelsa">Bayelsa</option>
      <option value="Benue">Benue</option>
      <option value="Borno">Borno</option>
      <option value="Cross River">Cross River</option>
      <option value="Delta">Delta</option>
      <option value="Ebonyi">Ebonyi</option>
      <option value="Enugu">Enugu</option>
      <option value="Edo">Edo</option>
      <option value="Ekiti">Ekiti</option>
      <option value="Gombe">Gombe</option>
      <option value="Imo">Imo</option>
      <option value="Jigawa">Jigawa</option>
      <option value="Kaduna">Kaduna</option>
      <option value="Kano">Kano</option>
      <option value="Katsina">Katsina</option>
      <option value="Kebbi"></option>
      <option value="Kogi">Kogi</option>
      <option value="Kwara">Kwara</option>
      <option value="Lagos">LAgos</option>
      <option value="Nasarawa">Nasarawa</potion>
      <option value="Niger">Niger</option>
      <option value="Ogun">Ogun</option>
      <option value="Ondo">Ondo</option>
      <option value="Osun">Osun</option>
      <option value="Oyo">Oyo</option>
      <option value="Plateau">Plateau</option>
      <option value="Rivers">Rivers</option>
      <option value="Sokoto"></option>
      <option value="Taraba">Taraba</option>
      <option value="Yobe">Yobe</option>
      <option value="Zamfara">Zamfara</potion>
  						</select>

  </div>
  </div>
</div>
<div class="content-subheading" id="acc4"><i class="icon-star fa"></i> <strong>Select an add-ons</strong></div>



<div id="accordion4">
  <div class="well">
  <h3><i class=" icon-certificate icon-color-1"></i> Web Add-ons
  </h3>
  <p>Premium jobs help promote their service by getting their ads more
  visibility with more
  job candidate what they want faster. <a href="help.html">Learn more</a>
  </p>
  <div class="form-group">
  <table class="table table-hover checkboxtable">
  <tr>
  <td>
  <div class="radio">
  <label>
  <input type="radio" name="optionsRadios" id="optionsRadios0" value="option0" checkedrequired="">
  <strong>Regular List </strong> </label>
  </div>
  </td>
  <td><p>  &#8358;00.00k</p></td>
  </tr>
  <tr>
  <td>
  <div class="radio">
  <label>
  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
  <strong>Top of the Page Ad </strong> </label>
  <img src="images/f2.png" style="float:right;"/>
  </div>
  </td>
  <td><p>&#8358;00.00k</p></td>
  </tr>
  <tr>
  <td>
  <div class="radio">
  <label>
  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
  <strong>Top of the Page Ad + Urgent Ad </strong>
  </label>
  <img src="images/f.png" style="float:right;"/>
  </div>
  </td>
  <td><p>&#8358;00.00k</p></td>
  </tr>
  <tr>
  <td>
  <div class="form-group">
  <div class="col-md-8">
  <select class="form-control" name="Method" id="PaymentMethod"disabled="disabled">
  <option value="2">Select Payment Method</option>
  <option value="3">Credit / Debit Card</option>
  <option value="5">Paypal</option>
  </select>
  </div>
  </div>
  </td>
  <td><p><strong>Grand total: &#8358;00.00k</strong></p></td>
  </tr>
  </table>
  </div>
  </div>

</div>

<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-8">
  <input type="submit" name="post-ads"  class="btn btn-success btn-lg" value="Sell"></div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>

<div class="col-md-3 reg-sidebar">
<div class="reg-sidebar-inner text-center">
<div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>
<h3><strong>Post a Free Classified</strong></h3>
<p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
adipiscing elit. </p>
</div>
<div class="panel sidebar-panel">
<div class="panel-heading uppercase">
<small><strong>How to sell quickly?</strong></small>
</div>
<div class="panel-content">
<div class="panel-body text-left">
<ul class="list-check">
<li> Use a brief title and description of the item</li>
<li> Make sure you post in the correct category</li>
<li> Add nice photos to your ad</li>
<li> Put a reasonable price</li>
<li> Check the item before publish</li>
</ul>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</div>

<?php include("footer.php");?>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#input-upload-img1").fileinput();
    $("#input-upload-img2").fileinput();
    $("#input-upload-img3").fileinput();
    $("#input-upload-img4").fileinput();
    $("#input-upload-img5").fileinput();


</script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.matchHeight-min.js"></script>

<script src="assets/js/hideMaxListItem.js"></script>

<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
