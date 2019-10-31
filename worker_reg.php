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
$sid=$_GET["staff_id"];
$name= $_GET["name"];
$pass=$_GET["work_pass"];
$addr=$_GET["address"];
$salary=$_GET["salary"];
$phn_no=$_GET["phn_no"];
$replaced = str_replace(' ', '_', $addr);
$addr = str_replace(',', '_', $replaced);

$sql1 = "INSERT INTO staff (staff_id,name,address,salary,phone_no)
 VALUES ('$sid','$name','$addr','$salary','$phn_no')";
$sql2 = "SELECT staff_id FROM staff WHERE staff_id=$sid";

$result= $conn->query($sql2);

if($pass=="12345"){
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
  echo '<script language="javascript">';
  echo 'alert("ID already taken!!")';  //not showing an alert box.
  echo '</script>';
}}
else{
  echo '<script language="javascript">';
  echo 'alert("Wrong work pass!!")';  //not showing an alert box.
  echo '</script>';
}

$conn->close();
?>
