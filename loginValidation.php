<?php
   include("Config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      echo $myusername;
      echo $mypassword;
/*
      $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

      $saltedPW =  $mypassword.$salt;
*/

      $sql = "SELECT userId,role FROM USER WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);

      $role=0;
      while($row =mysqli_fetch_assoc($result))
      {
        $role=$row['role'];
      }

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($role != 0) {
        echo "Role is:".$role;
        session_start();
         $_SESSION['login_user'] = $myusername;
         if($role==1){
           header("Location:veteranShop.php");
         }

         else if($role==2) {
           header("Location:index.php");
         }


         //header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>
