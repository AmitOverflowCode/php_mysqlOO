<?php
// Include the db connection file
include "connection.php";

//Select all columns from user table
$sql = "SELECT id, username, password, email, reg_date FROM MyUsers";
$result = $conn->query($sql);
//Check if db has records
if ($result->num_rows > 0) {
  // now output data of each row in table

   echo "<table>";
   echo "<tr>";
   echo "<th>ID</th><th>Username</th>
   <th>Password</th>
<th>Email</th>
<th>Registered on</th>
    </tr>";
  while($row = $result->fetch_assoc()) {


    echo "<tr>";
echo '<td>'.$row["id"];
echo '<td>'.$row["username"];
echo '<td>'.$row["password"];
echo '<td>'.$row["email"];
echo '<td>'.$row["reg_date"];
echo "</tr>";

  }
echo "</table>";
}
//If db is empty 
 else {
  echo "0 results";
}
$conn->close();
?>
