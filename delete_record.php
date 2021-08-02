<?php
// Include the db connection file
include "connection.php";

//Delete a specific record from MyUsers table
// This will delete user data by id 2
$sql = "DELETE FROM MyUsers WHERE id=2";
//If the query is successful
if($conn->query($sql) ===TRUE)
{echo "Record deleted";}
//else print an error msg
else 
{echo "Could not delete the record." .$conn->error;}
$conn->close();
?>
