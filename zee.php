<?php
  session_start();
  include('../conn.php');

  if(!isset($_SESSION['mpAdmin'])){
    header("Location: index.php");
  }

  if(!isset($_GET['a'])){
    $samount = "10000";
  } else { $samount = $_GET['a']; }

  $cphqry = $conn->prepare("SELECT * FROM ph LEFT JOIN users ON ph.phuname = users.uname WHERE ph.ghuname = ? AND ph.amount = ? ORDER BY phdate ASC");
  $cphqry->execute(array("unmatched",$samount));
  $cphct = $cphqry->rowCount();
  $cph = $cphqry->fetchAll();

  $cghqry = $conn->prepare("SELECT * FROM gh LEFT JOIN users ON gh.uname = users.uname WHERE (gh.ph1 = ? OR gh.ph2 = ?) AND (gh.amount = ?) ORDER BY ghdate ASC");
  $cghqry->execute(array("unmatched","unmatched",$samount));
  $cghct = $cghqry->rowCount();
  $cgh = $cghqry->fetchAll();

  $usersm1 = $conn->prepare("SELECT * FROM users");
  $usersm1->execute();
  $userall = $usersm1->rowCount();
  $usersm2 = $conn->prepare("SELECT * FROM users WHERE status = ?");
  $usersm2->execute(array("active"));
  $useractive = $usersm2->rowCount();

  $userinactive = $userall - $useractive;

  if(isset($_POST['matchgh'])){
    if($_POST['ghuser'] !== ""){
      $upph = $conn->prepare("UPDATE ph SET ghuname = ?, phdate=? WHERE id = ?");
      $upph->execute(array($_POST['ghuser'],time(),$_POST['pid']));
      $phNo = $conn->prepare("SELECT * FROM gh WHERE uname = ? AND (ph1=? OR ph2=?) ORDER BY ghdate ASC LIMIT 1" );
      $phNo->execute(array($_POST['ghuser'],"unmatched","unmatched"));
      $phNo1 = $phNo->fetch(PDO::FETCH_ASSOC);
      if($phNo1['ph1'] == "unmatched"){
        $upgh = $conn->prepare("UPDATE gh SET ph1id=?, ph1 = ?, ph1Status=?, ph1time=? WHERE id = ?");
        $upgh->execute(array($_POST['pid'],$_POST['phuser'],"unconfirmed",time(),$phNo1['id']));
      } else {
        $upgh = $conn->prepare("UPDATE gh SET ph2id=?, ph2 = ?, ph2Status=?, ph2time=? WHERE id = ?");
        $upgh->execute(array($_POST['pid'],$_POST['phuser'],"unconfirmed",time(),$phNo1['id']));
      }
      if($upph){
          $phemailq = $conn->prepare("SELECT * FROM users WHERE uname =?");
          $phemailq->execute(array($_POST['phuser']));
          $phemail = $phemailq->fetch(PDO::FETCH_ASSOC);
          $phphone = $phemail['phone'];


          $ghemailq = $conn->prepare("SELECT * FROM users WHERE uname =?");
          $ghemailq->execute(array($_POST['ghuser']));
          $ghemail = $ghemailq->fetch(PDO::FETCH_ASSOC);
          $ghphone = $ghemail['phone'];

      }
    } echo "<script> alert('Your match was successful');>";
  }

  if(isset($_GET['action']) && $_GET['action'] == "automatch"){
    $levels = array("10000","10000","20000","50000","100000","200000");
      foreach ($levels as $level) {
        $ghqry = $conn->prepare("SELECT * FROM gh WHERE (ph1=? OR ph2=?) AND amount=? ORDER BY ghdate ASC");
        $ghqry->execute(array("unmatched","unmatched",$level));
        $ghinfo = $ghqry->fetchAll();
        foreach ($ghinfo as $gher) {
          $phqry = $conn->prepare("SELECT * FROM ph WHERE ghuname=? AND amount=? ORDER BY phdate ASC LIMIT 1");
          $phqry->execute(array("unmatched",$level));
          $phct = $phqry->rowCount();
          $phinfo=$phqry->fetch(PDO::FETCH_ASSOC);
          if($phct < 1){ $pher = "unmatched"; } else { $pher = $phinfo['phuname']; }

          $upph = $conn->prepare("UPDATE ph SET ghuname = ?, phdate=? WHERE id = ?");
          $upph->execute(array($gher['uname'],time(),$phinfo['id']));

          if($gher['ph1'] == "unmatched"){
            $upgh = $conn->prepare("UPDATE gh SET ph1id=?, ph1 = ?, ph1Status=?, ph1time=? WHERE id = ?");
            $upgh->execute(array($phinfo['id'],$pher,"unconfirmed",time(),$gher['id']));
          } else {
            $upgh = $conn->prepare("UPDATE gh SET ph2id=?, ph2 = ?, ph2Status=?, ph2time=? WHERE id = ?");
            $upgh->execute(array($phinfo['id'],$pher,"unconfirmed",time(),$gher['id']));
          }

          $phemailq = $conn->prepare("SELECT * FROM users WHERE uname =?");
          $phemailq->execute(array($pher));
          $phemail = $phemailq->fetch(PDO::FETCH_ASSOC);
          $phphone = $phemail['phone'];
          $phmsg = "Hello ".$phemail['name'].",\r\n\r\nYou have been assigned to Provide Help to a fellow Zeeva.net member. Please login to your office to view details. \r\n\r\nRegards! \r\n\r\nZeeva.net Team";
          mail($phemail['email'], "Zeeva - You have been assigned to provide help", $phmsg, "FROM: support@zeeva.net");


          $ghemailq = $conn->prepare("SELECT * FROM users WHERE uname =?");
          $ghemailq->execute(array($gher));
          $ghemail = $ghemailq->fetch(PDO::FETCH_ASSOC);
          $ghphone = $ghemail['phone'];
          $ghmsg = "Hello ".$ghemail['name'].",\r\n\r\nYou have been assigned to Get Help from a fellow Zeeva.net member. Please login to your office to view details. \r\n\r\nRegards! \r\n\r\nZeeva.net Team";
          mail($ghemail['email'], "Zeeva - You have been assigned to get help", $ghmsg, "FROM: support@zeeva.net");

        }
      }
    }

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.10.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.10.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/tbc-logo-136x128-4.png" type="image/x-icon">
  <meta name="description" content="Building a social community of people helping each other...">
  <title>Zeeva</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="../assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
<?php include('header.php'); ?>

<div class="container">
<div class="row" style="min-height:500px; padding-top:30px; background:#fff">
  <?php include('side-bar.php'); ?>
  <!-- <div class="col-sm-1"></div> -->
  <div class="col-sm-6 col-sm-offset-1 col-xs-12">
    <div class="row">
      <div style="padding:5px; background:#f0f0f0; border:#ccc thin solid; border-radius:5px" align="center">
        <h3> No time to manually match? <a href="?action=automatch" class="btn btn-sm btn-primary">Automated</a> </h3>
      </div>
    </div>

    <div class="row" style="margin-top:30px;">
      <div class="col-sm-3" style="margin:5px; padding:5px; background:#34495E;
      color:White; border:#ccc thin solid; border-radius:5px">
        <h4> All <br /> Users </h4>
        <?php echo $userall; ?>
      </div>
      <div class="col-sm-3" style="margin:5px; padding:5px; background:#34495E;
      color:White; border:#ccc thin solid; border-radius:5px">
        <h4> All <br /> Activated </h4>
        <?php echo $useractive; ?>
      </div>
      <div class="col-sm-3" style="margin:5px; padding:5px; background:#34495E;
      color:White; border:#ccc thin solid; border-radius:5px">
        <h4> All <br /> Inactive </h4>
        <?php echo $userinactive; ?>
      </div>
    </div>

    <div class="row" style="margin-top:30px; padding:5px; background:#f0f0f0; border:#ccc thin solid; border-radius:5px">
      Pick a level:
      <a href="?a=10000" class="btn btn-success">N10,000</a>
      <a href="?a=20000" class="btn btn-success">N20,000</a>
      <a href="?a=50000" class="btn btn-success">N50,000</a>
      <a href="?a=100000" class="btn btn-success">N100,000</a>
      <a href="?a=200000" class="btn btn-success">N200,000</a>

    </div>

    <div class="row" style="margin-top:30px; margin-bottom:30px;
     padding:5px; background:#f0f0f0; border:#ccc thin solid; border-radius:5px">

      <div style="padding:5px;">
        <div style="border-bottom:#ccc thin solid">
          <h3>Unmatched PH for N<?php echo number_format($samount,0); ?></h3>
        </div>
        <?php if($cphct < 1) { echo "No pending Provide Help."; } else {
          foreach ($cph as $cphData) {
        ?>
        <div style="padding:10px; border-bottom:#ccc thin dashed">
          <strong>Name:</strong> <?php echo $cphData['name']." (".$cphData['uname'].")"; ?> <br />
          <strong>Phone No:</strong> <?php echo $cphData['phone']; ?>  <br />
          <strong>Email:</strong> <?php echo $cphData['email']; ?>  <br />
          <strong>PH Date:</strong> <?php echo date("d/m/Y",$cphData['phdate']); ?>  <br />
            <form name="phmatch" method="post" action="">
              <strong>Match:</strong>
              <input type="hidden" name="pid" value="<?php echo $cphData['id']; ?>" />
              <input type="hidden" name="phuser" value="<?php echo $cphData['uname']; ?>" />
              <select name="ghuser">
                  <<option value="unmatched">--SELECT USERNAME--</option>
                <?php foreach($cgh AS $cghData) { ?>
                  <option value="<?php echo $cghData['uname']; ?>"> <?php echo $cghData['name']; ?> </option>
                <?php } ?>
              </select>
                <input type="submit" name="matchgh" value="Match" class="btn btn-primary" />


            </form>
          </div>
        <?php
          } }
        ?>
      </div>



    </div>
  </div>
</div>
</div>


  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="../assets/jarallax/jarallax.js"></script>
  <script src="../assets/theme/js/script.js"></script>
  <script src="../assets/formoid/formoid.min.js"></script>


  <input name="animation" type="hidden">
  </body>
</html>
