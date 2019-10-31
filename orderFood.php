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
$fid=$_GET['food_id'];
$qty=$_GET['quantity'];
$date=date("Y-m-d");
$sql2 = "SELECT * FROM customer WHERE cust_id='$cid'";
$sql3 = "SELECT price FROM menu WHERE fooditem_id='$fid'";
$cond = $conn->query($sql3);
$result=$conn->query($sql2);
$row = $cond->fetch_assoc();
$price=$row['price']*$qty;
$sql1 = "INSERT INTO ordered_food (customer_id,fooditem_id,quantity,price) VALUES ('$cid','$fid','$qty',$price)";
$cond = $conn->query($sql3);
if($cond){
if($result){
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
  echo '<script language="javascript">';
  echo 'alert("ERROR!!");'; //not showing an alert box.
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
  echo 'alert("Wrong FOOD ID!!")';  //not showing an alert box.
  echo '</script>';
}




$conn->close();
?>
