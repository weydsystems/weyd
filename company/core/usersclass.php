<?php

$get = $pdo->prepare("SELECT * FROM users LEFT JOIN ads ON users.seller_id = ads.seller_id");
$get->execute();
$users = $get->fetchAll();
 //total ads
