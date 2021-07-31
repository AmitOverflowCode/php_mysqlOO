<?php

//include the connection file
include "connection.php";


// sql code to create rename table name
//This renamed the table from "MyGuests" to "Myusers"
//----------------------

$sql = "RENAME TABLE MyGuests TO MyUsers";
//if the query is successful
if ($conn->query($sql) === TRUE) {
  echo "Table MyUsers renamed successfully";
}
//If something goes wrong

 else {
  echo "Error renaming table: " . $conn->error;
}

$conn->close();
?>
