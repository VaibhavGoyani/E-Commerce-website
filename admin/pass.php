<?php
include "header.php";
include "db.php";


if(isset($_POST['update'])) {
    $userid = isset($_POST['userid']) ? $_POST['userid'] : '';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uname'];

    $update_user_query = "UPDATE users SET name='$name', email='$email', username='$username' WHERE id='$userid'";
    mysqli_query($conn, $update_user_query);

    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];


    
    $hobbies = imploede(',', $_POST['hobbies']);
    $languages = implode(',', $_POST['languages']);

    $update_meta_query = "UPDATE user_meta SET meta_value='$address' WHERE user_id='$userid' AND meta_key='address'";
    mysqli_query($conn, $update_meta_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$city' WHERE user_id='$userid' AND meta_key='city'";
    mysqli_query($conn, $update_meta_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$gender' WHERE user_id='$userid' AND meta_key='gender'";
    mysqli_query($conn, $update_meta_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$hobbies' WHERE user_id='$userid' AND meta_key='hobbies'";
    mysqli_query($conn, $update_meta_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$languages' WHERE user_id='$userid' AND meta_key='language'";
    mysqli_query($conn, $update_meta_query);

    // if(isset($_FILES['filetoupload']) && $_FILES['filetoupload']['error'] == 0) {
    //     $upload_dir = "images/"; 
    //     $filename = basename($_FILES['filetoupload']['name']);
    //     $target_path = $upload_dir . $filename;

    //     if(!empty($filename)) {
    //         $tmp_name = $_FILES['filetoupload']['tmp_name'];
    //         $filepath = "../images/" . "-" . $filename;
    //         move_uploaded_file($tmp_name, $filepath);

    //         $update_meta_query = "UPDATE user_meta SET meta_value='$filepath' WHERE user_id='$userid' AND meta_key='file'";
    //         mysqli_query($conn, $update_meta_query);

    //         print_r($file);die();
    //     }
    // } 

//     $img = $_FILES['filetoupload']['name'];
//     $target_dir = "images/";
//     $target_file = $target_dir . basename($_FILES['filetoupload']['name']);
//     $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//     if (move_uploaded_file($_FILES['filetoupload']["tmp_name"], $target_file)) 
//     {
//      $update_meta_query = "UPDATE user_meta SET meta_value='$filepath' WHERE user_id='$userid' AND meta_key='file'";

//      if(mysqli_query($conn,$update_meta_query))
//      {
//         header('Location: contacts-list.php');
//         exit(); 
//     }
//     else 
//     {
//         echo 'not updated';
//     }
// }
// }

    header("Location: contacts-list.php");
    exit(); 

include "footer.php";
?>

<?php



