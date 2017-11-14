<?php
$dbhost="localhost";
$dbuser="root";
$dbname="blog_post";
try {
  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=UTF8",$dbuser, "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo $e->getMessage();
}



 ?>
