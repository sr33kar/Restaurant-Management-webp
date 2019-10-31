<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mg_restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer WHERE premium=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  if($row["premium"]==1){$x="YES";}
  else{$x="NO";}
  echo "id: " . $row["cust_id"]. ".<br>";
  echo "<br>";
}
} else {
echo "0 results";
}


$conn->close();
?>
