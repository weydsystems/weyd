<?php
if(isset($_POST['track'])){
  
if(empty($_POST['fullname'])){
  echo"<script>alert('Full name is required!');</script>";
}else if(empty($_POST['email'])){
    echo"<script>alert('Email is required!');</script>";
}else if(empty($_POST['phone'])){
    echo"<script>alert('Phone number cannot be blank!');</script>";
}else if(empty($_POST['address'])){
    echo"<script>alert('Address cannot be empty!');</script>";
}else{

}




}
