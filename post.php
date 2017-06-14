<?php
ob_start();
session_start();
require("core/config.php");
$weyd_user = $_SESSION['weyd_user'];
if(!$weyd_user){
 header("location:signup.php");
}else{
$get = $pdo->prepare("SELECT * FROM users WHERE firstname='$weyd_user'");
$get->execute();
$bind = $get->fetch(PDO::FETCH_ASSOC);
$seller_id = $bind['seller_id'];
}
  function Gen($length = 4) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = 'WADS-';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  $ads_id = Gen();
  if(isset($_POST['post-ads'])){
    $g = $pdo->prepare("INSERT INTO ads(ads_id,seller_id,main_category,sub_category,ads_condition,ads_title,ads_description,price,deal_type,location,ads_time,ads_date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $j = $g->execute(array($ads_id,$seller_id,trim($_POST['main-category']),trim($_POST['sub-category']),trim($_POST['condition']),trim($_POST['ads-title']),trim($_POST['description']),trim($_POST['price']),trim($_POST['negotiable']),trim($_POST['location']),time(),date("M:D:Y")));
    if($j){
      echo"<script>alert('entered!');</script>";
    }else{
      echo"<script>alert('skdkd');</script>";
    }

  }



?>


<div class="row">
<div class="col-sm-12">
<form method="post" action=""class="form-horizontal" enctype="multipart/form-data" >
<fieldset>
<!-- main category -->
  <div class="form-group">
  <label class="col-md-3 control-label">Main Category</label>
  <div class="col-md-8">
  <select name="main-category" id="category-group" class="form-control">
  <option value="0" selected="selected"> Select a category...</option>
  <option>Mobiles</option>
					  <option>Electronics and Appliances</option>
					  <option>Health and Beauty</option>
					  <option>Animals and Pets</option>
					 	  <option>Real, Estate</option>
					  <option>Books, Sports and hobbies</option>
					  <option>Fashion</option>
					  <option>Kids</option>

  </select>
  </div>
  </div>
<!-- primary cattegory -->
<div class="form-group">
<label class="col-md-3 control-label">Category</label>
<div class="col-md-8">
<select name="sub-category" id="category-group" class="form-control">
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
  -Books, Sport and Hobbies -
</option>

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
  <select name="condition" id="category-group" class="form-control">
    <option value="0" selected="selected"> Select a condition</option>
<option value="new">New</option>
<option value="fairlyused"> Fairly used</option>
						</select>
</div>
</div>



<div class="form-group">
<label class="col-md-3 control-label" for="Adtitle">Ad title</label>
<div class="col-md-8">
<input id="Adtitle" name="ads-title" placeholder="Ad title"
 class="form-control input-md"  type="text">
<span class="help-block">A great title needs at least 60 characters. </span>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="textarea">Describe ad </label>
<div class="col-md-8">
<textarea class="form-control" id="textarea" name="description" placeholder="Description"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="Price">Price</label>
<div class="col-md-4">
<div class="input-group"><span class="input-group-addon">$</span>
<input id="Price" name="price" class="form-control" placeholder="placeholder"  type="number">
</div>
</div>
<div class="col-md-4">
<div class="checkbox">
  <select name="negotiable" id="category-group" class="form-control">
    <option value="0" selected="selected"> Select deal type</option>
<option value="negotiable">Negotiable</option>
<option value="none">Fixed</option>
						</select>
</div>
</div>
</div>

<!-- <div class="form-group">
<label class="col-md-3 control-label" for="textarea"> Picture </label>
<div class="col-md-8">
<div class="mb10">
<input id="input-upload-img1" type="file" class="file"name="file[]" data-preview-file-type="text">
</div>
<div class="mb10">
<input id="input-upload-img2" type="file" class="file" name="file[]"data-preview-file-type="text">
</div>
<div class="mb10">
<input id="input-upload-img3" type="file" class="file" name="file[]"data-preview-file-type="text">
</div>
<div class="mb10">
<input id="input-upload-img4" type="file" class="file"name="file[]" data-preview-file-type="text">
</div>
<div class="mb10">
<input id="input-upload-img5" type="file" class="file" name="file[]" data-preview-file-type="text">
</div>
<p class="help-block">Add up to 5 photos. Use a real image of your
product, not catalogs.</p>
</div>
</div> -->
<div class="content-subheading"><i class="icon-user fa"></i> <strong>Seller
information</strong></div>


<div class="form-group">
<label class="col-md-3 control-label" for="textinput-name">Location</label>
<div class="col-md-8">
  <select name="location" id="category-group" class="form-control">
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

<div class="well">
<h3><i class=" icon-certificate icon-color-1"></i> Make your Ad Premium
</h3>
<p>Premium ads help sellers promote their product or service by getting
their ads more visibility with more
buyers and sell what they want faster. <a href="help.php">Learn
more</a></p>
<div class="form-group">

</div>
</div>

<!-- <div class="form-group">
<label class="col-md-3 control-label">Terms</label>
<div class="col-md-8">
<label class="checkbox-inline" for="checkboxes-0">
<input name="checkboxes" id="checkboxes-0" value="Remember above contact information." type="checkbox">
Remember above contact information. </label>
</div>
</div> -->

<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-8">
  <input type="submit" name="post-ads"  class="btn btn-success btn-lg" value="Sell"></div>
</div>
</fieldset>
</form>
</div>
</div>
