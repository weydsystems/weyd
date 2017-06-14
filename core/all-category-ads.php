<?php
ob_Start();
session_Start();
require("core/config.php");
GLOBAL $g;
 $g = $_GET['key'];
//mobile class starts
   $fetchAds = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Mobiles'");
   $fetchAds->execute(array($user));
   $rows =  $fetchAds->fetchAll();
 $count1 = $fetchAds->rowCount();

 // }
//sort new products
 if(isset($_POST['new'])){
   $fetchAds = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Mobiles' AND ads.ads_condition='new'");
   $fetchAds->execute(array($user));
   $rows =  $fetchAds->fetchAll();
 }
 //sort fairly used products
 if(isset($_POST['fairly-used'])){
   $fetchAds = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Mobiles' AND ads.ads_condition='fairlyused'");
   $fetchAds->execute(array($user));
   $rows =  $fetchAds->fetchAll();
 }
 //mobile class ends

//electronics class
//
$fetchE = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Electronics and Appliances'");
$fetchE->execute(array($user));
$rows2 =  $fetchE->fetchAll();
$count2 = $fetchE->rowCount();

// }
//sort new products
if(isset($_POST['new'])){
$fetchE = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Electronics and Appliances' AND ads.ads_condition='new'");
$fetchE->execute(array($user));
$rows2 =  $fetchE->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchE = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Electronics and Appliances' AND ads.ads_condition='fairlyused'");
$fetchE->execute(array($user));
$rows2 =  $fetchE->fetchAll();

}


//health and beauty stats_kurtosis
$fetchHelt = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Hobby, Sport and Kid'");
$fetchHelt->execute(array($user));
$rows3 =  $fetchHelt->fetchAll();
$count3 = $fetchHelt->rowCount();


//sort new products
if(isset($_POST['new'])){
$fetchHelt= $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Hobby, Sport and Kid' AND ads.ads_condition='new'");
$fetchHelt->execute(array($user));
$rows3 =  $fetchHelt->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchHelt = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Hobby, Sport and Kid' AND ads.ads_condition='fairlyused'");
$fetchHelt->execute(array($user));
$rows3 =  $fetchHelt->fetchAll();

}

//
// health and beauty
$fetchB = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Health and Beauty'");
$fetchB->execute(array($user));
$rows4=  $fetchB->fetchAll();
$count4 = $fetchB->rowCount();


// //sort new products
if(isset($_POST['new'])){
$fetchB = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Health and Beauty' AND ads.ads_condition='new'");
$fetchB->execute(array($user));
$rows4 =  $fetchB->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchB = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Health and Beauty' AND ads.ads_condition='fairlyused'");
$fetchB->execute(array($user));
$rows4 =  $fetchB->fetchAll();

}

//real estate


$fetchRe = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Real Estate'");
$fetchRe->execute(array($user));
$rows5=  $fetchRe->fetchAll();
$count5 = $fetchRe->rowCount();


// //sort new products
if(isset($_POST['new'])){
$fetchRe = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Real Estate' AND ads.ads_condition='new'");
$fetchRe->execute(array($user));
$rows5 =  $fetchRe->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchRe = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Real Estate' AND ads.ads_condition='fairlyused'");
$fetchRe->execute(array($user));
$rows5 =  $fetchRe->fetchAll();
//cars and vehicles
}
$fetchCa = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Cars and Vehicles'");
$fetchCa->execute(array($user));
$rows6 =  $fetchCa->fetchAll();
$count6 = $fetchCa->rowCount();


// //sort new products
if(isset($_POST['new'])){
$fetchCa = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Cars and Vehicles' AND ads.ads_condition='new'");
$fetchCa->execute(array($user));
$rows6 =  $fetchCa->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchCa = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Cars and Vehicles' AND ads.ads_condition='fairlyused'");
$fetchCa->execute(array($user));
$rows6 =  $fetchCa->fetchAll();

}

//animal and pets
$fetchAn = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Animal and Pets'");
$fetchAn->execute(array($user));
$rows7 =  $fetchAn->fetchAll();
$count7 = $fetchAn->rowCount();


// //sort new products
if(isset($_POST['new'])){
$fetchAn = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Animal and Pets' AND ads.ads_condition='new'");
$fetchAn->execute(array($user));
$rows7 =  $fetchAn->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchAn = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='Animal and Pets' AND ads.ads_condition='fairlyused'");
$fetchAn->execute(array($user));
$rows7 =  $fetchAn->fetchAll();

}

//fashion




$fetchfa = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='fashion'");
$fetchfa->execute(array($user));
$rows8 =  $fetchfa->fetchAll();
$count8 = $fetchfa->rowCount();


// //sort new products
if(isset($_POST['new'])){
$fetchfa= $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='fashion' AND ads.ads_condition='new'");
$fetchfa->execute(array($user));
$rows8 =  $fetchfa->fetchAll();
}
//sort fairly used products
if(isset($_POST['fairly-used'])){
$fetchfa = $pdo->prepare("SELECT * FROM ads LEFT JOIN ads_uploads ON ads.ads_id = ads_uploads.ads_id WHERE ads.ads_status='approved' AND ads.main_category='fashion' AND ads.ads_condition='fairlyused'");
$fetchfa->execute(array($user));
$rows8 =  $fetchfa->fetchAll();

}


 ?>
