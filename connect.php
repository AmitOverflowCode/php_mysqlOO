<?php
//Setting up a secure connection to database
$db_host="localhost";
$db_user="foobar";
$db_pass="1234";
$db_name="my db";

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

// Check the connection
if ($mysqli -> connect_errno) {
  echo "Could not connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
