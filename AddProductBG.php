<?php
session_start();
if(!isset($_SESSION['login_user'])){
  echo "error:session variable not set";
  exit;
}
else{
  $email=$_SESSION['login_user'];
}

$productName=$_POST['productName'];
$price=$_POST['price'];
$category=$_POST['category'];

$connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
$sql = "INSERT INTO  PRODUCT_TBL(productName,categoryId,uploadedByUserId,price)
SELECT '$productName',$category,userId,$price from USER where email='$email'";


if ($connection->query($sql) === TRUE) {
echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
