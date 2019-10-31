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
$cid=$_GET["customer_id"];
$name= $_GET["name"];
$pass=$_GET["Password"];
$addr=$_GET["address"];
$replaced = str_replace(' ', '_', $addr);
$addr = str_replace(',', '_', $replaced);
$prem=FALSE;
if($_GET["premium"]=="yes"){
  $prem=TRUE;
}
$sql1 = "INSERT INTO customer (cust_id,name,password,address,premium)
 VALUES ('$cid','$name','$pass','$addr','$prem')";


if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
  echo '<script language="javascript">';
  echo 'alert("ID already taken!!")';  //not showing an alert box.
  echo '</script>';
}


$conn->close();
?>
