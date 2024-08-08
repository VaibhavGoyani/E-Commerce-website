<?php
include "header.php";
include "db.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>                   

<style>
    .error{
        color: red; 
    }
</style>
<?php
// print_r($_POST);die();
$nameerr = $emailerr = $unameerr = $newpassworderr = $onfirmnewpassworderr =  $addresserr =  $cityerr =  $stateerr =  $countryerr =  $gendererr =  $hobbieserr =  $languageserr =  $fileerr =  "" ;

$name =  $email = $uname =  $newpassword = $confirmnewpassword = $address =  $city =  $state =  $country =  $gender = $file =  "";
$hobbies = array();
$language =  array();

$flag = 0;
$passflag = 0;
$userid = 0;

if(isset($_POST['update'])) {
    $userid = isset($_POST['userid']) ? $_POST['userid'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';

    $newpassword = isset($_POST['newpassword']) ? $_POST['newpassword'] : '';
    $confirmnewpassword = isset($_POST['confirmnewpassword']) ? $_POST['confirmnewpassword'] : '';

    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : '';

    $languages = isset($_POST['languages']) ? $_POST['languages'] : '';
    $file = isset($_FILES['filetoupload']) ? $_FILES['filetoupload'] : '';

// var_dump($languages);die();

    if(empty($_POST["name"])){
        $nameerr = " name is REQUIRED!!!!";
        $flag = 1;
    }else{
        $name =test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameerr = "Only letters and white space allowed";
            $flag = 1;
        }
    } 

    If(empty($_POST["email"])){
        $emailerr = "Email is required!!!!";
        $flag = 1;
    }else{
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Invalid email format";
            $flag = 1;
        } else {
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                $emailerr = "Email already exists";
                $flag = 1;
            }
        }
    }

    if(empty($_POST["uname"])){
        $unameerr = "Username is required!!!!";
        $flag = 1;
    }else{
        $uname = test_input($_POST['uname']);
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $uname)) {
            $unameerr = "Only letters, numbers, and underscore allowed";
            $flag = 1;
        } else {
            $query = "SELECT * FROM users WHERE username = '$uname'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                $unameerr = "Username already exists";
                $flag = 1;
            }
        }
    }

    if(empty($_POST["newpassword"]) && empty($_POST["confirmnewpassword"])){
        $newpassworderr = "";
        $confirmnewpassword = "";
        $passflag = 1;
    }else{
        $newpassword =test_input($_POST['newpassword']);
        $confirmnewpassword =test_input($_POST['confirmnewpassword']);
        // print_r($newpassword);die();
        if($newpassword === $confirmnewpassword){
            $password = md5($newpassword);
            if (strlen($password) < 8) {
                $newpassworderr = "Password must be at least 8 characters long";
                $flag = 1;
            } else {
                $newpassworderr = "New password and confirm password do not match. <br>";
                $flag = 1;
            }
        }
    }

    if(empty($_POST["address"])){
        $addresserr = "please enter your address";
        $flag = 1;
    }else{ 
        $address =test_input($_POST['address']);
    }

    if(empty($_POST["city"])){
        $cityerr = "please enter your city name";
        $flag = 1;
    }else{
        $city =test_input($_POST['city']);
    }

    if(empty($_POST["state"])){
        $stateerr = "please select a state";
        $flag = 1;
    }else{
        $state =test_input($_POST['state']);
    }

    if(empty($_POST["country"])){
        $countryerr = "please select a country";
        $flag = 1;
    }else{
        $country =test_input($_POST['country']);
    }

    if(empty($_POST["gender"])){
        $gendererr = "gender is REQUIRED!!!!";
        $flag = 1;
    }else{
        $gender =test_input($_POST['gender']);
    }

    if(empty($_POST["hobbies"])){
        $hobbieserr =  "At least one hobby is required";
        $flag = 1;
    }else{
        $hobbies =test_input($_POST['hobbies']);

    }

    if(!isset($_POST["languages"]) || empty($_POST["languages"])){
        $languagesrr = "At least one language is required";
        $flag = 1;
    }else{
        $language = test_input($_POST['languages']);
    }


    if(!empty($_FILES['filetoupload'])){
        $target_dir = "images/";
        $target_file = basename($_FILES['filetoupload']['name']);
        $target_path = $target_dir . $target_file;
        $tmp_name = $_FILES['filetoupload']['tmp_name'];

        $imagefiletype = array("jpg", "jpeg", "png", "gif");

        $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filesize = 5000000; 
        $filesize = $_FILES['filetoupload']['size'];

        if (!in_array($file_extension, $imagefiletype)) {
            $fileerr = "Invalid file type. Allowed types: jpg, jpeg, png, gif";
            $flag = 1;
        }

        if ($filesize > 5000000) { 
            $fileerr = "File is too large. <br>";
            $flag = 1;
        }

        if (file_exists($target_path)) {
            $fileerr = "File already exists <br>";
            $flag = 1;
        }
    } else {
        $fileerr = "Error uploading file <br>";
        $flag = 1;
    }

    if( $flag == 0 & $passflag == 0){
        $update_user_query = "UPDATE users SET name='$name',email='$email',username='$uname',password='$newpassword' WHERE id='$userid'";
        // var_dump($update_user_query);die();

        if (mysqli_query($conn, $update_user_query)) {
        } else {
            echo "Error: " . $update_user_query . "<br>" . mysqli_error($conn);
        }

    }else  if( $flag == 0 & $passflag == 1){
        $update_user_query = "UPDATE users SET name='$name',email='$email',username='$username' WHERE id='$userid'";
        if (mysqli_query($conn, $update_user_query)) {
        } else {
            echo "Error: " . $update_user_query . "<br>" . mysqli_error($conn);
        }

        $update_meta_query = "UPDATE user_meta SET meta_value='$address' WHERE user_id='$userid' AND meta_key='address'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        $update_meta_query = "UPDATE user_meta SET meta_value='$city' WHERE user_id='$userid' AND meta_key='city'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        $update_meta_query = "UPDATE user_meta SET meta_value='$state' WHERE user_id='$userid' AND meta_key='state'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        $update_meta_query = "UPDATE user_meta SET meta_value='$country' WHERE user_id='$userid' AND meta_key='country'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        $update_meta_query = "UPDATE user_meta SET meta_value='$gender' WHERE user_id='$userid' AND meta_key='gender'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        $hobbies = ( isset($_POST['hobbies']) && $_POST['hobbies'] ) ? implode(',', $_POST['hobbies']) : '';
        $update_meta_query = "UPDATE user_meta SET meta_value='$hobbies' WHERE user_id='$userid' AND meta_key='hobbies'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        $languages = ( isset($_POST['languages']) && $_POST['languages'] ) ? implode(',', $_POST['languages']) : '';
        $update_meta_query = "UPDATE user_meta SET meta_value='$languages' WHERE user_id='$userid' AND meta_key='language'";
        if (mysqli_query($conn, $update_meta_query)) {
        } else {
            echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        }

        // $update_meta_query = "UPDATE user_meta SET meta_value='$file' WHERE user_id='$userid' AND meta_key='file'";
        // if (mysqli_query($conn, $update_meta_query)) {
        // } else {
        //     echo "Error: " . $update_meta_query . "<br>" . mysqli_error($conn);
        // }

        if (move_uploaded_file($tmp_name, $target_path)) {
            $file  = $target_path;
            $update_meta_query = "UPDATE user_meta SET meta_value='$file' WHERE user_id='$userid' AND meta_key='file'";
            mysqli_query($conn, $update_meta_query);
            // var_dump($update_meta_query);die();
        } else {
            $fileerr = "There was an error uploading your file <br>";
            $flag = 1;
        }
        header("Location: contacts-list.php");
    }else{
        echo "regerterterter";
        header('Location: edit.php?id='.$userid);

    }

    exit();
}

function test_input($data) {
    return $data;
}

include "footer.php";
?>


