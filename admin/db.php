<?php

$servername = "localhost";
$username = "root";
$pass = "Webby@123";
$db = "ecommerce";

$conn = mysqli_connect($servername,$username,$pass,$db);

if(!$conn){
    die("connection Failed" . mysqli_connect_error());
}
?>


                
                
                
          <!--       
               
             if(is_array($language) && !empty($language)) {
            $sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES";
            foreach($language as $lan) {
                $lan = mysqli_real_escape_string($conn, $lan);

                $sql .= "('$last_id', 'language', '$lan') ";
                print_r($sql);

            }
            if (mysqli_query($conn, $sql)) {
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
        } -->