<?php

//include the connection file
include "connection.php";


// sql code to create table
//Creating table MyGursts with 5 fields
//----------------------
// ID
//Username
//Password
//Email
//reg_date

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
//if the query is successful
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
}
//If something goes wrong

 else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
