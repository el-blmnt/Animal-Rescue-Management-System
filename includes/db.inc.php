<?php

$dbhost = "localhost";
$dbname = "arms";
$dbusername = "root";
$dbpassword = "";

//Create Connection
$conn = new mysqli ($dbhost, $dbusername, $dbpassword, $dbname);

//Check Connection
if ($conn->connect_error) {
  die("connection failed." . $conn->connect_error);
}

?>
