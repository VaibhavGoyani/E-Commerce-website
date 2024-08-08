<?php
include "header.php";
include "db.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['update'])) {
    $userid = isset($_POST['userid']) ? $_POST['userid'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['uname']) ? $_POST['uname'] : '';

    $newpassword = isset($_POST['newpassword']) ? $_POST['newpassword'] : '';
    $confirmnewpassword = isset($_POST['confirmnewpassword']) ? $_POST['confirmnewpassword'] : '';

    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : '';
    $languages = isset($_POST['languages']) ? $_POST['languages'] : '';
    $file = isset($_POST['filetoupload']) ? $_POST['filetoupload'] : '';



    if (!empty($name) && !empty($email) && !empty($username)) {
        if ($newpassword === $confirmnewpassword) {
            $newaddpassword = md5($newpassword);
                // var_dump($newaddpassword);die();
            $update_user_query = "UPDATE users SET name='$name', username='$username',email='$email',password='$newaddpassword' WHERE id='$userid'";

            mysqli_query($conn, $update_user_query);
        } else {
            echo "New password and confirm password do not match. <br>";
        }


        
    } else {
        echo "Please fill in all fields. <br>";
        $update_user_query = "UPDATE users SET name='$name', username='$username',email='$email' WHERE id='$userid'";
        mysqli_query($conn, $update_user_query);
    }



    if(!empty($address)) {
        $update_meta_query = "UPDATE user_meta SET meta_value='$address' WHERE user_id='$userid' AND meta_key='address'";
        mysqli_query($conn, $update_meta_query);
    }else{
        echo "Please fill in all fields";
    }

    if(!empty($city)) {
        $update_meta_query = "UPDATE user_meta SET meta_value='$city' WHERE user_id='$userid' AND meta_key='city'";
        mysqli_query($conn, $update_meta_query);
    }

    if(!empty($gender)) {
        $update_meta_query = "UPDATE user_meta SET meta_value='$gender' WHERE user_id='$userid' AND meta_key='gender'";
        mysqli_query($conn, $update_meta_query);
    }

    if(!empty($hobbies)) {
        $hobbies = implode(',', $_POST['hobbies']);
        $update_meta_query = "UPDATE user_meta SET meta_value='$hobbies' WHERE user_id='$userid' AND meta_key='hobbies'";
        mysqli_query($conn, $update_meta_query);
    }
    if(!empty($languages)) {
        $languages = implode(',', $_POST['languages']);
        $update_meta_query = "UPDATE user_meta SET meta_value='$languages' WHERE user_id='$userid' AND meta_key='language'";
        mysqli_query($conn, $update_meta_query);
    }


    if(!empty($file)) {
        $target_dir = "images/";
        $target_file = basename($_FILES['filetoupload']['name']);
        $target_path = $target_dir . $target_file;
        $tmp_name = $_FILES['filetoupload']['tmp_name'];

        $imagefiletype = array("jpg", "jpeg", "png", "gif");

        $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filesize = 5000000; 
        $filesize = $_FILES['filetoupload']['size'];

        if (!in_array($file_extension, $imagefiletype)) {
            echo "Invalid file type. Allowed types: jpg, jpeg, png, gif";
            exit();
        }

        if ($filesize > 5000000) { 
            echo "File is too large. <br>";
            exit();
        }

        if (file_exists($target_path)) {
            echo "File already exists <br>";
            exit();
        }
        
        if (move_uploaded_file($tmp_name, $target_path)) {
            $file  = $target_path;
            $update_meta_query = "UPDATE user_meta SET meta_value='$file' WHERE user_id='$userid' AND meta_key='file'";
            mysqli_query($conn, $update_meta_query);
            // var_dump($update_meta_query);die();


            header("Location: contacts-list.php");
        } else {
            echo "There was an error uploading your file <br>";
        }

    } else {
        echo "Error uploading file <br>";
    }

    exit();
}



include "footer.php";
?>


