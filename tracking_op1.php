<?php
include("core/config.php");
if(isset($_POST['send-message'])){
  $res = $pdo->prepare("INSERT INTO sent(ads_id,seller_id,sender_id,buyersname,buyersemail,buyersphone,message,ms_id) VALUES(?,?,?,?,?,?,?,?,?)");
  $res->execute(array("dsdsd","ddd","ad",$_POST['buyersname'],$_POST['buyersemail'],$_POST['buyersphone'],$_POST['message'],"sdsd"));
  if($res){
    echo"<Script>alert('message sent successfully');</script>";
  }

}

 ?>


<form method="post" action="" role="form">
<div class="form-group">
<label for="recipient-name" class="control-label">Name:</label>
<input class="form-control required" id="recipient-name" name="buyersname"placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
</div>
<div class="form-group">
<label for="sender-email" class="control-label">E-mail:</label>
<input id="sender-email" type="email" name="buyersemail"data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" data-placement="top" placeholder="email@you.com" class="form-control email">
</div>
<!-- <div class="form-group">
<label for="recipient-Phone-Number" class="control-label">Phone Number:</label>
<input type="text" maxlength="60" name="buyersphone"class="form-control" id="recipient-Phone-Number">
</div>
<div class="form-group">
<label for="message-text" class="control-label">Message <span class="text-count">(300) </span>:</label>
<textarea class="form-control" name="message"id="message-text" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
</div>
<div class="form-group">
<p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not
valid. </p>
</div> -->
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<input type="submit" name="send-message"class="btn btn-success pull-right" value="Send message" id="msg">
</div>
</form>
