<?php
$conn = new mysqli("localhost","u679316145_whitewater","Googlemail!@3","u679316145_whitewater");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>