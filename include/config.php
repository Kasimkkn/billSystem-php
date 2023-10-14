<?php 
// Create connection
$connection = mysqli_connect("localhost","root","","billing");

// Check connection
if (!$connection) {
  echo "database is not connected";
}
?>