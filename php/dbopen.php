<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$servername = "localhost:3306";
$username = "gardener";
$password = "sD63&4bd";
$dbname = "ormer_garden";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

// Return name of current default database
if ($result = $conn -> query("SELECT DATABASE()")) {

  $row = $result -> fetch_row();
  $result -> close();
} else {
	echo "error " .mysqli_connect_errno() . " " . mysqli_connect_error();
}

?>