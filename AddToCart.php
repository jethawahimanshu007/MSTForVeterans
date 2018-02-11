<?php
session_start();

$quantity=$_POST['quantity'];
$productId=$_POST['productId'];

if(!isset($_SESSION['login_user'])){
  echo "error:session variable not set";
  exit;
}
else{
  $email=$_SESSION['login_user'];
}


$connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
$sql = "INSERT INTO CART_TBL SELECT userId, $productId,$quantity from USER where email='$email'";

if ($connection->query($sql) === TRUE) {
echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

?>
