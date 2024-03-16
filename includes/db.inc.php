<?php

$dbhost = "localhost";
$dbname = "arms";
$dbusername = "root";
$dbpassword = "";

try {
  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
