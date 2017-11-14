<?php
$dbhost="localhost";
$dbuser="root";
$dbname="cursophp";
try {
  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo $e->getMessage();
}



 ?>
