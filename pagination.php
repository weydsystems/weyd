<?php
// include("core/config.php");
$mysqli = new mysqli("localhost","root","prince","weyd");
$em ='ekeminyd@gmail.com';
$sql =$mysqli->query("SELECT COUNT(ads_id) FROM  ads");
$row = mysqli_fetch_row($sql);
$rows = $row[0];
$page_rows =2;
$last = ceil($rows/$page_rows);
if($last <1){
  $last = 1;
}
$pagenum = 1;
//get minimum url
if(isset($_GET['pages'])){
  $pagenum = preg_replace('#[^0-9]#','',$_GET['pages']);
}
if($pagenum <1){

  $pagenum =1;
}else if($pagenum >$last){
  $pagenum = $last;
}
$sql =$mysqli->query("SELECT * FROM  ads");;
$limit = 'LIMIT'.($pagenum -1)*$page_rows.','.$page_rows;
$t1 ="<br/>$rows";
$t2 = "pages<b> $pagenum </b> of <b> $last</b>";

$pageC ='';
if($last !=1){
  if($pagenum > 1){
    $previous = $pagenum-1;
    $pageC .='<a href="'.$_SERVER['PHP_SELF'].'?pages='.$previous.'">Previous</a>';
    for($i = $pagenum-1; $i<$pagenum; $i++){
      if($i > 0){
        $pageC .='<a href="'.$_SERVER['PHP_SELF'].'?pages='.$i.'">'.$i.'</a>';

      }
    }
  }
  $pageC .= ''.$pagenum.' &nbsp;';
  for($i = $pagenum+1; $i<=$last; $i++){
      $pageC .='<a href="'.$_SERVER['PHP_SELF'].'?pages='.$i.'">'.$i.'</a>';
    if($i >=$pagenum+1){
      break;

    }
  }
  if($pagenum != $last){
    $next = $pagenum +2;
    $pageC .='<a href="'.$_SERVER['PHP_SELF'].'?pages='.$next.'">Next</a>';
  }
}
while($row = mysqli_fetch_assoc($sql)){
  $id = $row['ads_id'];
  $firstname = $row['ads_title'];
  $lastname = $row['ads_time'];
  $list .='<p><a href="pagination.php?id='.$id.'">'.$firstname.' '.$lastname.'pages</a>';
}
 ?>
<html>
<title>Pagination</title>
<body>
  <!-- <a href="?g=">get</a> -->
<p><?php echo$t1;?></p>
<p><?php echo$t2;?></p>
<p><?php echo$list;?></p>

<div class="jj"><?php echo $pageC;?></div>
</body>
