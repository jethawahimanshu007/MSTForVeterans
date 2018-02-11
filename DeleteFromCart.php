<?php
session_start();

$productId=$_POST['productId'];

if(!isset($_SESSION['login_user'])){
  echo "error:session variable not set";
  exit;
}
else{
  $email=$_SESSION['login_user'];
}


$connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
$sql = "DELETE FROM CART_TBL WHERE productId='$productId'";

if ($connection->query($sql) === TRUE) {
echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

?>
