
<?php
$name = $_POST["name"];
$password = $_POST['password'];
$email = $_POST['email'];
$role= $_POST['role'];



//name , role, loggedin, email, password

# generate a random salt to use for this account
/*$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

$saltedPW =  $password.$salt;
*/
$connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
$sql = "INSERT INTO USER(userName, role, loggedin, email, password)
VALUES ('$name', '$role',0,'$email', '$password')";

if ($connection->query($sql) === TRUE) {
  echo "<script>console.log( 'New record created successfully' );</script>";
    //echo "New record created successfully";
} else {
    echo $name;
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

?>
