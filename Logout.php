<?php
session_start();

$connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
if(isset($_SESSION['login_user']))
{
  $email=$_SESSION['login_user'];
$sql = " delete a.* from CART_TBL a JOIN USER b ON a.userId=b.userId and b.email='$email'";

if ($connection->query($sql) === TRUE) {
echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
}

$connection->close();
 unset( $_SESSION['login_user']);
 header('Location: index.php');


?>
