<?php
include "header.php";
include "db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$userid = isset($_GET['id']) ? $_GET['id'] : '';

$user_query = "SELECT * FROM users WHERE id = '$userid'";
$user_result = mysqli_query($conn, $user_query); 
$user_data = mysqli_fetch_assoc($user_result); 
// var_dump($user_data);

$user_meta_query = "SELECT * FROM user_meta WHERE user_id = '$userid'";
$user_meta_result = mysqli_query($conn, $user_meta_query);
$user_meta = array();

// $hobbies = explode('.',$user_meta["hobbies"]);
// var_dump($user_meta);
// $language = explode('.',$user_meta["language"]);

while ($row = mysqli_fetch_assoc($user_meta_result)) {
 $user_meta[$row['meta_key']] = $row['meta_value'];

}

$fnameerr = $lnameerr = $emailerr = $unameerr = $newpassworderr = $confirmnewpassworderr =  $addresserr =  $cityerr =  $stateerr =  $countryerr =  $gendererr =  $hobbieserr =  $languageserr =  $fileerr =  "" ;

$fname = $lname = $email = $uname =  $newpassword = $confirmnewpassword = $address =  $city =  $state =  $country =  $gender = $file =  "";

$hobbies_arr = array();
if( isset( $user_meta["hobbies"] ) && !empty($user_meta["hobbies"]) ){
 $hobbies_arr = explode(",", $user_meta["hobbies"]);
}

$language_arr = array();
if( isset( $user_meta["language"] ) && !empty($user_meta["language"]) ){
    $language_arr = explode(",", $user_meta["language"]);
}

$flag = $check_flag  = 0;

if( isset($_POST['update']) && !empty( $_POST['update'] )){

    if( isset($_POST["fname"]) && ( empty($_POST["fname"]) || $_POST["fname"] == '' || is_null($_POST["fname"])  || $_POST["fname"] == null ) ){
        $nameerr = "please enter your first name";
        $flag = 1;
    }else{ 
        if( $_POST['fname'] ){
            $_POST['fname'] = trim($_POST['fname']);
        }
        $fname =test_input($_POST['fname']);
        $full_name = $fname;
    }    

    if( isset($_POST["lname"]) && ( empty($_POST["lname"]) || $_POST["lname"] == '' || is_null($_POST["lname"])  || $_POST["lname"] == null ) ){
        $nameerr = "please enter your last name";
        $flag = 1;
    }else{ 
        if( $_POST['lname'] ){
            $_POST['lname'] = trim($_POST['lname']);
        }
        $lname =test_input($_POST['lname']);
        $full_name = $fname.' '.$lname;
    }
    

    if(isset($_POST["email"]) && !empty($_POST["email"])){
        $email = trim($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Invalid email format";
            $flag = 1;
        } else {
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            if (is_email_exists($result) && $row["email"] === $_POST['email']) {
            $emailerr = "Email already exists"; // You can customize the message accordingly
            $flag = 1;
    
            }else{
                $email =test_input($_POST['email']);
            }
        }
    }else{
        $emailerr = "please enter your email";
        $flag = 0;
    }

// print_r($results);die();

    if (isset($_POST["uname"]) && !empty($_POST["uname"])) {
        $uname = trim($_POST["uname"]);

        if (!preg_match("/^[a-zA-Z0-9_]*$/", $uname)) {
            $unameerr = "Only letters, numbers, and underscores allowed";
            $flag = 1;
        } else {
            $query = "SELECT * FROM users WHERE username = '$uname'";
            $result = mysqli_query($conn, $query);  
             $row = mysqli_fetch_assoc($result);

           if(is_username_exists($result) && $row['username'] == $_POST["uname"]){
            $unameerr = "Username is already exists";
            $flag = 1; 
            } else {
                $uname =test_input($_POST['uname']);
            }
        }
    } else {
        $unameerr = "Please enter your username";
        $flag = 1;
    }

    if(isset($_POST["newpassword"]) && (!empty($_POST["newpassword"])) && isset($_POST["confirmnewpassword"]) && (!empty($_POST["confirmnewpassword"]))){
        $check_flag = 0;

        $newpassword = test_input($_POST['newpassword']);
        $confirmnewpassword = test_input($_POST['confirmnewpassword']);

        if($newpassword === $confirmnewpassword){
            if (strlen($newpassword) < 8) {
                $newpassworderr = "Password must be at least 8 characters long";
                $flag = 1;
            }else{

            }
        }else{
         $confirmnewpassworderr = "password do not match";
                $flag = 1;
         
     }
 }else{
     $check_flag = 1;
 }

    if( isset($_POST["address"]) && ( empty($_POST["address"]) || $_POST["address"] == '' || is_null($_POST["address"])  || $_POST["address"] == null ) ){
        $addresserr = "please enter your address ";
        $flag = 1;
    }else{ 
        if( $_POST['address'] ){
            $_POST['address'] = trim($_POST['address']);
        }
        $address =test_input($_POST['address']);
    }

    if( isset($_POST["city"]) && ( empty($_POST["city"]) || $_POST["city"] == '' || is_null($_POST["city"])  || $_POST["city"] == null ) ){
        $cityerr = "please enter your city";
        $flag = 1;
    }else{ 
        if( $_POST['city'] ){
            $_POST['city'] = trim($_POST['city']);
        }
        $city =test_input($_POST['city']);
    }

    if( isset($_POST["state"]) && ( empty($_POST["state"]) || $_POST["state"] == '' || is_null($_POST["state"])  || $_POST["state"] == null ) ){
        $stateerr = "please enter your  state";
        $flag = 1;
    }else{ 
        if( $_POST['state'] ){
            $_POST['state'] = trim($_POST['state']);
        }
        $state =test_input($_POST['state']);
    }

    if(isset($_POST["country"]) && ( empty($_POST["country"]) || $_POST["country"] == '' || is_null($_POST["country"])  || $_POST["country"] == null ) ){
        $countryerr = "please enter your country ";
        $flag = 1;
    }else{ 
        if( $_POST['country'] ){
            $_POST['country'] = trim($_POST['country']);
        }
        $country =test_input($_POST['country']);
    // print_r($country);die();
    }

    if(isset($_POST["gender"]) && ( empty($_POST["gender"]) || $_POST["gender"] == '' || is_null($_POST["gender"])  || $_POST["gender"] == null ) ){
        $gendererr = "please enter your  gender";
        $flag = 1;
    }else{ 
        if( $_POST['gender'] ){
            $_POST['gender'] = trim($_POST['gender']);
        }
        $gender =test_input($_POST['gender']);
    }

    if(!isset($_POST["hobbies"]) && ( empty($_POST["hobbies"]) || $_POST["hobbies"] == '' || is_null($_POST["hobbies"])  || $_POST["hobbies"] == null ) ){
        $hobbieserr = "At least one hobby is required";
        $flag = 1;
    }else{ 
        $hobbies_arr =test_input(explode(",", $user_meta["hobbies"]));
    }

    if(!isset($_POST["languages"]) && ( empty($_POST["languages"]) || $_POST["languages"] == '' || is_null($_POST["languages"])  || $_POST["languages"] == null ) ){
        $languageserr = "At least one language is required";
        $flag = 1;
    }else{ 
        $language_arr =test_input(explode(",", $user_meta["language"]));
    // print_r($_POST["languages"]);die();

    }

    if( isset($_FILES['file']) && ( empty($_FILES['file']) || $_FILES['file'] == '' || is_null($_FILES['file'])  || $_FILES['file'] == null ) ){
        $fileerr = "please enter your  file";
        $flag = 1;
    }else{ 
        $file =test_input($_FILES['filetoupload']);
    }
// print_r($language_arr);

    if( $flag == 0 ){
        if( $check_flag == 0 ){
            $update_user_query = "UPDATE users SET name='$full_name',email='$email',username='$uname',password='$newpassword' WHERE id='$userid'"; 
        // ECHO $update_user_query;die();

            mysqli_query($conn, $update_user_query);
        }else{
            $update_user_query = "UPDATE users SET name='$full_name',email='$email',username='$uname' WHERE id='$userid'";
            mysqli_query($conn, $update_user_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$fname' WHERE user_id='$userid' AND meta_key='firstname'";
            mysqli_query($conn, $update_meta_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$lname' WHERE user_id='$userid' AND meta_key='lastname'";
            mysqli_query($conn, $update_meta_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$address' WHERE user_id='$userid' AND meta_key='address'";
            mysqli_query($conn, $update_meta_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$city' WHERE user_id='$userid' AND meta_key='city'";
            mysqli_query($conn, $update_meta_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$state' WHERE user_id='$userid' AND meta_key='state'";
            mysqli_query($conn, $update_meta_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$country' WHERE user_id='$userid' AND meta_key='country'";
            mysqli_query($conn, $update_meta_query);

            $update_meta_query = "UPDATE user_meta SET meta_value='$gender' WHERE user_id='$userid' AND meta_key='gender'";
            mysqli_query($conn, $update_meta_query);

            $hobbies = ( isset($_POST['hobbies']) && $_POST['hobbies'] ) ? implode(',', $_POST['hobbies']) : '';
            $update_meta_query = "UPDATE user_meta SET meta_value='$hobbies' WHERE user_id='$userid' AND meta_key='hobbies'";
            mysqli_query($conn, $update_meta_query);

            $languages = ( isset($_POST['languages']) && $_POST['languages'] ) ? implode(',', $_POST['languages']) : '';
            $update_meta_query = "UPDATE user_meta SET meta_value='$languages' WHERE user_id='$userid' AND meta_key='language'";
            mysqli_query($conn, $update_meta_query);
                            // print_r($update_meta_query);die();
            if (move_uploaded_file($tmp_name, $target_path)) {
                $file  = $target_path;
                $update_meta_query = "UPDATE user_meta SET meta_value='$file' WHERE user_id='$userid' AND meta_key='file'";
                mysqli_query($conn, $update_meta_query);
            // var_dump($update_meta_query);die();
            } else {
                $fileerr = "There was an error uploading your file <br>";
                $flag = 1;
            }

        }
        header("Location: contacts-list.php");
    }else{

        echo "ERR0R";

    }
}

?>

<form method="post"  enctype="multipart/form-data">
    <input type="hidden" name="userid" value="<?php echo $userid ?>">   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">EDIT USER</h4>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input" name="fname" value="<?php echo isset($user_meta['firstname']) ? $user_meta['firstname'] : ''; ?>">
                            <span class="error"> <?php echo $fnameerr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input" name="lname" value="<?php echo isset($user_meta['lastname']) ? $user_meta['lastname'] : ''; ?>">
                            <span class="error"> <?php echo $lnameerr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" id="example-email-input" name="email" value="<?php echo isset($user_data['email']) ? $user_data['email'] : ''; ?>" >
                            <span class="error"><?php echo $emailerr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input" name="uname" value="<?php echo isset($user_data['username']) ? $user_data['username'] : ''; ?>">
                            <span class="error"><?php echo $unameerr; ?></span>
                        </div>
                    </div>


                    <div class="form-group row">  
                        <label for="newpassword" class="col-md-2 col-form-label">New Password:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" id="newpassword" name="newpassword" value="" autocomplete="new-password">
                            <span class="error"><?php echo $newpassworderr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">  
                        <label for="confirmnewpassword" class="col-md-2 col-form-label">Confirm New Password:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" id="confirmnewpassword" name="confirmnewpassword">
                            <span class="error"><?php echo $confirmnewpassworderr; ?></span>
                        </div>          
                        <!-- <input type="submit" value="Change Password"> -->
                    </div>

                    <div class="form-group row">
                        <label for="example-address-input" class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-10">
                            <input class="form-control" type="textarea" id="example-address-input" name="address" value="<?php echo isset($user_meta['address']) ? $user_meta['address'] : ''; ?>">
                            <span class="error"><?php echo $addresserr; ?></span>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-city-input" class="col-md-2 col-form-label">City</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-city-input" name="city" value="<?php echo isset($user_meta['city']) ? $user_meta['city'] : ''; ?>">
                            <span class="error"><?php echo $cityerr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row" >
                        <label class="col-md-2 col-form-label" for="state">State</label>
                        <div class="col-md-10">
                            <select class="form-control" name="state" id="state">
                                <option value="">Select State</option>
                                <option value="gujarat" <?php echo isset($user_meta['state']) && $user_meta['state'] == "gujarat" ? "selected" : ""; ?>>Gujarat</option>
                                <option value="kerala" <?php echo isset($user_meta['state']) && $user_meta['state'] == "kerala" ? "selected" : ""; ?>>Kerala</option>
                                <option value="uttarpradesh" <?php echo isset($user_meta['state']) && $user_meta['state'] == "uttarpradesh" ? "selected" : ""; ?>>Uttar Pradesh</option>
                                <option value="goa" <?php echo isset($user_meta['state']) && $user_meta['state'] == "goa" ? "selected" : ""; ?>>Goa</option>
                                <option value="assam" <?php echo isset($user_meta['state']) && $user_meta['state'] == "assam" ? "selected" : ""; ?>>Assam</option>
                                <option value="rajasthan" <?php echo isset($user_meta['state']) && $user_meta['state'] == "rajasthan" ? "selected" : ""; ?>>Rajasthan</option>
                                <option value="mp" <?php echo isset($user_meta['state']) && $user_meta['state'] == "mp" ? "selected" : ""; ?>>Madhya Pradesh</option>
                                <option value="uttarakhand" <?php echo isset($user_meta['state']) && $user_meta['state'] == "uttarakhand" ? "selected" : ""; ?>>Uttarakhand</option>
                                <option value="bihar" <?php echo isset($user_meta['state']) && $user_meta['state'] == "bihar" ? "selected" : ""; ?>>Bihar</option>
                                <option value="punjab" <?php echo isset($user_meta['state']) && $user_meta['state'] == "punjab" ? "selected" : ""; ?>>Punjab</option>
                            </select>
                            <span class="error"><?php echo $stateerr; ?></span>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="country" >Country</label>
                        <div class="col-md-10">
                            <select class="form-control" name="country" id="country">
                                <option value="">Select Country</option>
                                <option value="india" <?php echo isset($user_meta['country']) && $user_meta['country'] == "india" ? "selected" : "";?> >India</option>
                                <option value="usa" <?php echo isset($user_meta['country']) && $user_meta['country'] == "usa" ? "selected" : "";?> >USA</option>
                                <option value="australia" <?php echo isset($user_meta['country']) && $user_meta['country'] == "australia" ? "selected" : "";?>>Australia</option>
                                <option value="uk" <?php echo isset($user_meta['country']) && $user_meta['country'] == "uk" ? "selected" : "";?> >UK</option>
                                <option value="newzeland" <?php echo isset($user_meta['country']) && $user_meta['country'] == "newzeland" ? "selected" : "";?> >New Zealand</option>
                                <option value="canada" <?php echo isset($user_meta['country']) && $user_meta['country'] == "canada" ? "selected" : "";?> >Canada</option>
                                <option value="switzerland" <?php echo isset($user_meta['country']) && $user_meta['country'] == "switzerland" ? "selected" : "";?> >Switzerland</option>
                                <option value="srilanka" <?php echo isset($user_meta['country']) && $user_meta['country'] == "srilanka" ? "selected" : "";?> >Sri Lanka</option>
                                <option value="russia" <?php echo isset($user_meta['country']) && $user_meta['country'] == "russia" ? "selected" : "";?> >Russia</option>
                                <option value="nepal" <?php echo isset($user_meta['country']) && $user_meta['country'] == "nepal" ? "selected" : "";?> >Nepal</option>          
                            </select>
                            <span class="error"><?php echo $countryerr; ?></span>

                        </div>
                    </div>
                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Gender</h5>
                        <div class="custom-control custom-radio custom-control-right">
                            <input type="radio" id="male" name="gender" class="custom-control-input"  value="male" <?php echo isset($user_meta['gender']) && $user_meta['gender'] == "male" ? "checked" : ""; ?> >
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-right">
                            <input type="radio" id="female" name="gender" class="custom-control-input"  value="female"<?php echo isset($user_meta['gender']) && $user_meta['gender'] == "female" ? "checked" : ""; ?> >  
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                        <span class="error"><?php echo $gendererr; ?></span>
                    </div>


                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Hobbies</h5>


                        <div class="custom-control custom-checkbox  custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="reading" value="reading" <?php echo isset($user_meta['hobbies']) && in_array('reading', $hobbies_arr) ? "checked" : ""; ?> name="hobbies[]">
                            <label class="custom-control-label mr-2" for="reading">reading</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="driving" value="driving" <?php echo isset($user_meta['hobbies']) && in_array('driving', $hobbies_arr) ? "checked" : ""; ?> name="hobbies[]">
                            <label class="custom-control-label mr-2" for="driving">driving</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="swimming" value="swimming" <?php echo isset($user_meta['hobbies']) && in_array('swimming', $hobbies_arr) ? "checked" : ""; ?> name="hobbies[]">
                            <label class="custom-control-label mr-2" for="swimming">swimming</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="writting" value="writting"  <?php echo isset($user_meta['hobbies']) && in_array('writting', $hobbies_arr) ? "checked" : ""; ?> name="hobbies[]">
                            <label class="custom-control-label mr-2" for="writting">writting</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="travelling" value="travelling" <?php echo isset($user_meta['hobbies']) && in_array('travelling', $hobbies_arr) ? "checked" : ""; ?> name="hobbies[]">
                            <label class="custom-control-label mr-2" for="travelling">travelling</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="learning" value="learning" <?php echo isset($user_meta['hobbies']) && in_array('driving', $hobbies_arr) ? "checked" : ""; ?> name="hobbies[]">
                            <label class="custom-control-label mr-2" for="learning">learning</label>
                        </div>
                        <span class="error"><?php echo $hobbieserr; ?></span>
                    </div>

                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Language</h5>
                        <div class="form-group">
                            <select class="custom-select" name="languages[]" multiple>
                             <option value="english" <?php echo isset($user_meta['language'])&& in_array('english', $language_arr) ? "selected" : ""; ?>>English</option>
                             <option value="hindi" <?php echo isset($user_meta['language']) && in_array('hindi', $language_arr) ? "selected" : ""; ?>>Hindi</option>
                             <option value="gujarati" <?php echo isset($user_meta['language']) && in_array('gujarati', $language_arr) ? "selected" : ""; ?>>Gujarati</option>
                             <option value="german" <?php echo isset($user_meta['language']) && in_array('german', $language_arr) ? "selected" : ""; ?>>German</option>
                             <option value="tamil" <?php echo isset($user_meta['language']) && in_array('tamil', $language_arr) ? "selected" : ""; ?>>Tamil</option>
                             <option value="spanish" <?php echo isset($user_meta['language']) && in_array('spanish', $language_arr) ? "selected" : ""; ?>>Spanish</option>
                         </select>
                         <span class="error"><?php echo $languageserr; ?></span>
                     </div>
                 </div>

                 <div class="mt-4">
                    <div class="mt-4">
                        <h4 class="card-title">File browser</h4>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="filetoupload" name="filetoupload" style="display: none;" >

                            <label class="custom-file-label" id="custom-file-label" for="filetoupload" style="display: none;">Choose file</label>

                            <img id="img" src="<?php echo isset($user_meta['file']) ? $user_meta['file'] : ''; ?>" alt="" width="50">

                            <!-- <input type="file" name="" value="<?php echo isset($user_meta['file']) ? $user_meta['file'] : ''; ?>"> -->

                            <a href="#" id="remove" style="color: red; padding-top: 10px; height: 24px; <?php echo empty($user_meta['file']) ? 'display: none;' : ''; ?>"><i class="bi bi-trash" style="font-size: 24px;"></i>remove</a>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-md-10">
                        <input type="submit" name="update" value="update" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<script>
    const img = document.getElementById('img');
    const remove = document.getElementById('remove');
    const file = document.getElementById('filetoupload');

    const fileinput = document.getElementById('filetoupload');
    const filelabel = document.getElementById('custom-file-label');

                        // const fileinput = document.querySelector('.custom-file-input');
                        // const filelabel = document.querySelector('.custom-file-label');

    file.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                img.src = e.target.result;
                remove.style.display = 'inline-block';
                fileinput.style.display = 'none';
                filelabel.style.display = 'none';  
            };

            reader.readAsDataURL(this.files[0]);
        }
    });

    remove.addEventListener('click', function(event) {
        event.preventDefault();

        file.value = '';
        img.src = '';
        remove.style.display = 'none';
        fileinput.style.display = 'block';
        filelabel.style.display = 'block'; 
    });

    if (file.files.length > 0) {
        fileinput.style.display = 'none';
        filelabel.style.display = 'none'; 
    }
</script>

<?php   


function test_input($data) {
    return $data;
}

function is_email_exists($result){
    return $result;
}
function is_username_exists($result){
    return $result;
}


include "footer.php"; ?>
