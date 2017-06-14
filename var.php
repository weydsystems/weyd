<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Apps</title>
    <script src="jquery.min.js"></script>
    <script>
$(document).ready(function(){
$("#submit").click(function(){
var fname = $("#fname").val();
var lname = $("#lname").val();
var phone = $("#phone").val();
var email = $("#email").val();
var password = $("#password").val();
var dataString = "fname"+fname+"&lname"+lname+"&phone"+phone+"&email"+email+"&password"+password;
$.ajax({
  type:"POST",
  url:"wedy_apps/signup.php",
    data: dataString,
  beforeSend :function(){
$("#submit").val('sending...');
  },
  success: function(data){
if(data=="registration successful!")
{
alert("submited");
$("#submit").val('submit');
}
else if(data=="registration failed")
{
alert("error");
}

}
});
});
});
    </script>
  </head>
  <body>
    <!-- <form method="post" action=""> -->
<input type="text" id="fname" placeholder="firstname"><br/>
<input type="text" id="lname" placeholder="last name"><br/>
<input type="text" id="phone" placeholder="phone"><br/>
<input type="text" id="email" placeholder="email"><br/>
<input type="password" id="password" placeholder="password"><br/>
<input type="submit" id="submit" value="Send"/>
<!-- </form> -->



  </body>
</html>
