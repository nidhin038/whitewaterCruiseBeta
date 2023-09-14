<?php
include_once("../../db/connect.php");

if(!$_POST["guestName"] || ($_POST["phone"] && $_POST["email"])){
	echo json_encode(array("status"=>"error", "message"=>"Mandatory fields missing"));
	return false;
}

$sql = "INSERT INTO `reservations`(`name`, `phone`, `email`, `checkin`, `checkout`, `category`, `adults`, `childern`, `below5`, `message`) VALUES ('".$conn->real_escape_string($_POST["guestName"])."','".$conn->real_escape_string($_POST["phone"])."','".$conn->real_escape_string($_POST["email"])."','".$conn->real_escape_string($_POST["checkin"])."','".$conn->real_escape_string($_POST["checkout"])."','".$conn->real_escape_string($_POST["category"])."','".$conn->real_escape_string($_POST["adults"])."','".$conn->real_escape_string($_POST["abovesix"])."','".$conn->real_escape_string($_POST["belowsix"])."','".$conn->real_escape_string($_POST["remarks"])."')";
if ($conn->query($sql) === TRUE) {
  echo json_encode(array("status"=>"success", "message"=>"New record created successfully"));
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>