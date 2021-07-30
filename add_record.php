<?php
// Include the connection file
include "connection.php";

//Add records to database now
//Adding new records to 3 columns
$user_name="Neha";
$pass="123456";
$email="neha@example.com";

$sql = "INSERT INTO MyUsers (username, password, email)
VALUES ('$user_name', '$pass', '$email')";
//If the query is successful
if ($conn->query($sql) === TRUE) {
  echo "New record added successfully";
//If something goes wrong
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
