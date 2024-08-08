<?php
include "header.php";
include "db.php";

if(isset($_POST["update"])){

    $getid = $_POST['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];

    // $gender = $_POST['gender'];
    // $hobbies = implode(',',$_POST['hobbies']);
    // $language = implode(',',$_POST['language']);
    // $file_name = $_FILES['file']['name'];
    // if($file_name > 1 ){
    //     $tmp_name = $_FILES['file']['tmp_name'];
    //     $filepath = "../images/" . uniqid() . "-" . $file_name;

    //     move_uploaded_file($tmp_name,$filepath);

       
    // }else{
        $sql = "UPDATE users  SET name='$name', email='$email' WHERE id = '$getid' ";
        mysqli_query($conn,$sql);
        header("Location: contacts-list.php");
    // }
}

include "footer.php";
?>
    <div class="mt-4">

==============================================
                           <!--  <h5 class="font-size-14 mb-4">Language</h5>
                            <div class="form-group">
                                <select class="custom-select" name="language[]" multiple="multiple"  value="languages">
                                    <option value="english" <?php echo isset($_POST['language']) && in_array('english', $_POST['language']) ? "selected" : ""; ?>>English</option>
                                    <option value="hindi" <?php echo isset($_POST['language']) && in_array('hindi', $_POST['language']) ? "selected" : ""; ?>>Hindi</option>
                                    <option value="gujarati" <?php echo isset($_POST['language']) && in_array('gujarati', $_POST['language']) ? "selected" : ""; ?>>Gujarati</option>
                                    <option value="german" <?php echo isset($_POST['language']) && in_array('german', $_POST['language']) ? "selected" : ""; ?>>German</option>
                                    <option value="tamil" <?php echo isset($_POST['language']) && in_array('tamil', $_POST['language']) ? "selected" : ""; ?>>Tamil</option>
                                    <option value="spanish" <?php echo isset($_POST['language']) && in_array('spanish', $_POST['language']) ? "selected" : ""; ?>>Spanish</option>
                                </select>
                            </div>
                            <span class="error"><?php echo $languageerr; ?></span>
                        </div> -->

            // i(!empty($_POST['language'])){
            //  foreach ($_POST['language'] as $selected){
            //      echo $selected . " ";
            //  }
            // }
===================================================================

                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Language</h5>
                        <div class="form-group">
                            <select class="custom-select" name="language[]">
                                <option value="english" <?php echo ($user_meta['language'] == 'english') ? 'checked' : ''; ?>>English</option>
                                <option value="hindi" <?php echo ($user_meta['language'] == 'hindi') ? 'checked' : ''; ?>>Hindi</option>
                                <option value="gujarati" <?php echo ($user_meta['language'] == 'gujarati') ? 'checked' : ''; ?>>Gujarati</option>
                                <option value="german" <?php echo ($user_meta['language'] == 'germen') ? 'checked' : ''; ?>>German</option>
                                <option value="tamil" <?php echo ($user_meta['language'] == 'tamil') ? 'checked' : ''; ?>>Tamil</option>
                                <option value="spanish"<?php echo ($user_meta['language'] == 'spanish') ? 'checked' : ''; ?>>Spanish</option>
                                <!-- Add more options for additional languages as needed -->
                            </select>
                        </div>
                        <span class="error"><?php echo $languageerr; ?></span>
                    </div>
=============================================================================================================================================================================================



<?php
// Assuming the form is submitted and the selected options are sent as an array named 'languages'

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'languages' array is set in the form data
    if (isset($_POST['languages']) && !empty($_POST['languages'])) {
        // Loop through each selected language
        foreach ($_POST['languages'] as $selectedLanguage) {
            // Do something with each selected language
            echo "Selected language: " . $selectedLanguage . "<br>";
        }
    } else {
        // If no languages are selected
        echo "No languages selected!";
    }
}
?>


===================================================================================================================================================================================
<?php 
include "header.php";
include "db.php";


if(isset($_GET['id'])){
    $getid = $_GET['id'];
            // print_r($getid); die();

    $sql = "SELECT * FROM users WHERE id = '$getid'";
    $result = mysqli_query($conn,$sql);

    if($result -> num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            // print_r($row);
            // $meta_sql = "SELECT * FROM user_meta WHERE id = '$getid'";
            // $meta_result = mysqli_query($conn,$meta_sql);

            // if($result -> num_rows > 0){
            // while($meta_row = mysqli_fetch_assoc($meta_result)){ 

            // $gender = $meta_row["gender"];
            // $hobbies = explode('.',$meta_row["hobbies"]);
            // $language = explode('.',$meta_row["language"]);  
            // $file = $meta_row['filetoupload'];
            ?>

            <form method="post" action="<?php $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">EDIT USER</h4>


                                ]===========================================



            update

            <?php
include "header.php";
include "db.php";

if(isset($_POST["update"])) {
    $userid = isset($_GET['id']) ? $_GET['id'] : '';
    // print_r($userid),die();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $hobbies = isset($_POST['hobbies']) ? implode(',', $_POST['hobbies']) : '';
    $language = isset($_POST['language']) ? implode(',', $_POST['language']) : '';

    $update_user_query = "UPDATE users SET name='$name', email='$email' WHERE id='$userid'";
    $update_user_result = mysqli_query($conn, $update_user_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$gender' WHERE user_id='$userid' AND meta_key='gender'";
    $update_meta_result = mysqli_query($conn, $update_meta_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$hobbies' WHERE user_id='$userid' AND meta_key='hobbies'";
    $update_meta_result = mysqli_query($conn, $update_meta_query);

    $update_meta_query = "UPDATE user_meta SET meta_value='$language' WHERE user_id='$userid' AND meta_key='language'";
    $update_meta_result = mysqli_query($conn, $update_meta_query);

    if(isset($_FILES['filetoupload']) && $_FILES['filetoupload']['error'] === UPLOAD_ERR_OK) {
        $file_tmp_name = $_FILES['filetoupload']['tmp_name'];
        $file_name = $_FILES['filetoupload']['name'];

        move_uploaded_file($file_tmp_name. "images/" . $file_name);

        $update_meta_query = "UPDATE user_meta SET meta_value='$file_name' WHERE user_id='$userid' AND meta_key='filetoupload'";
        $update_meta_result = mysqli_query($conn, $update_meta_query);
    }

    if($update_user_result && $update_meta_result) {
        echo "User data updated successfully.";
        header("Location: contacts-list.php");
    } else {
        echo "Error updating user data.";
    }
}

include "footer.php";
?>