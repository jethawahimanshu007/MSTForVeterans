<?php

if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
        echo "At this point, I am frustrated, lol";
       $connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
       $fileName='uploads/'.$_FILES['file']['name'];
       $sql = "UPDATE PRODUCT_TBL SET imagePath='$fileName' WHERE imagePath is NULL";


        if ($connection->query($sql) === TRUE) {
        echo "success";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();
    }
?>
