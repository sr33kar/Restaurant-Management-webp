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
$cid=$_GET["cust_id"];


$sql2 = "SELECT * FROM customer WHERE cust_id='$cid'";
$sql3 = "SELECT table_no FROM tables";
$cond = $conn->query($sql3);
$result=$conn->query($sql2);
$x=1;
$a=0;
for ($x = 1; $x <= 30; $x++) {
  if ($cond->num_rows > 0) {
  // output data of each row

  while($row = $cond->fetch_assoc()) {

    if($row['table_no']==$x){
      
      $a=1;
    }
  }

}
if($a!=1){
  break;
}
$a=0;
$cond = $conn->query($sql3);

}
$sql1 = "INSERT INTO tables (table_no,customer_id) VALUES ('$x','$cid')";

if($x<=30){
if($result){
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
  echo '<script language="javascript">';
  echo 'alert("ERROR!!");';
  echo 'alert("'.$x.'");';  //not showing an alert box.
  echo '</script>';
}
}
else{
  echo '<script language="javascript">';
  echo 'alert("You first have to register!!")';  //not showing an alert box.
  echo '</script>';
}}
else{
  echo '<script language="javascript">';
  echo 'alert("Tables are full please come back later!!")';  //not showing an alert box.
  echo '</script>';
}

$conn->close();
?>
