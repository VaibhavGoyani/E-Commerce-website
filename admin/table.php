<?php

        $sql = "INSERT INTO users(name,username,password,email,user_role,create_date,update_date)VALUES('$fname.$lname','$uname','$password','$email','$user_role','$create_date', '$update_date' )";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    mysqli_query($conn,$sql);
    header("location:index.php");
    
?>