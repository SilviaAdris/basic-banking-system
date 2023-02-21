<?php
$hostName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "banking";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$hostName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "banking";

$tConn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($tConn->connect_error) {
  die("Connection failed: " . $tConn->connect_error);
}
?>