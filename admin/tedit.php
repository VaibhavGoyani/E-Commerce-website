<?php
include "header.php";
include "db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nameerr = $emailerr = $unameerr = $newpassworderr = $onfirmnewpassworderr =  $addresserr =  $cityerr =  $stateerr =  $countryerr =  $gendererr =  $hobbieserr =  $languageserr =  $fileerr =  "" ;
$flag = 0;

$userid = isset($_GET['id']) ? $_GET['id'] : '';

$user_query = "SELECT * FROM users WHERE id = '$userid'";
$user_result = mysqli_query($conn, $user_query); $user_data =
mysqli_fetch_assoc($user_result); 
                    // var_dump($user_data);

$user_meta_query = "SELECT * FROM user_meta WHERE user_id = '$userid'";
$user_meta_result = mysqli_query($conn, $user_meta_query);
$user_meta = array();
                    // $hobbies = explode('.',$user_meta["hobbies"]);ar_dump($user_meta);
                    // $language = explodede('.',$user_meta["language"]);

while ($row = mysqli_fetch_assoc($user_meta_result)) {
   $user_meta[$row['meta_key']] = $row['meta_value'];

}

$hobbies_arr = array();
if( isset( $user_meta["hobbies"] ) && !empty($user_meta["hobbies"]) ){
   $hobbies_arr = explode(",", $user_meta["hobbies"]);
}

$language_arr = array();
if( isset( $user_meta["language"] ) && !empty($user_meta["language"]) ){
    $language_arr = explode(",", $user_meta["language"]);

}

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
        }else{
            $flag = 0;
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

?>

<form method="post" action="up.php" enctype="multipart/form-data">
    <input type="hidden" name="userid" value="<?php echo $userid ?>">   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">EDIT USER</h4>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input" name="name" value="<?php echo isset( $user_meta['name'] ) ? $user_meta['name']  : '';?> ">
                            <span class="error"> <?php echo $nameerr; ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" id="example-email-input" name="email" value="<?php echo isset( $user_meta['email'] ) ? $user_meta['email']  : '';?>" >
                            <span class="error"><?php echo $emailerr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input" name="uname" value="<?php echo isset( $user_meta['uname'] ) ? $user_meta['uname']  : '';?>">
                            <span class="error"><?php echo $unameerr; ?></span>
                        </div>
                    </div>


                    <div class="form-group row">  
                        <label for="newpassword" class="col-md-2 col-form-label">New Password:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" id="newpassword" name="newpassword">
                            <span class="error"><?php echo $newpassworderr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">  
                        <label for="confirmnewpassword" class="col-md-2 col-form-label">Confirm New Password:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" id="confirmnewpassword" name="confirmnewpassword">
                        </div>          
                        <!-- <input type="submit" value="Change Password"> -->
                    </div>

                    <div class="form-group row">
                        <label for="example-address-input" class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-10">
                            <input class="form-control" type="textarea" id="example-address-input" name="address" value="<?php echo isset( $user_meta['address'] ) ? $user_meta['address']  : '';?>">
                            <span class="error"><?php echo $addresserr; ?></span>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-city-input" class="col-md-2 col-form-label">City</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-city-input" name="city" value="<?php echo isset( $user_meta['city'] ) ? $user_meta['city']  : '';?>">
                            <span class="error"><?php echo $cityerr; ?></span>
                        </div>
                    </div>

                    <div class="form-group row" >
                        <label class="col-md-2 col-form-label" for="state">State</label>
                        <div class="col-md-10">
                            <select class="form-control" name="state" id="state">
                                <option value="">Select State</option>
                                <option value="gujarat" <?php echo ($user_meta['state'] == "gujarat") ? "selected" : "";?>>Gujarat</option>
                                <option value="kerala" <?php echo ($user_meta['state'] == "kerala") ? "selected" : "";?>>Kerala</option>
                                <option value="uttarpradesh" <?php echo ($user_meta['state'] == "uttarpradesh") ? "selected" : "";?>>Uttar Pradesh</option>
                                <option value="goa" <?php echo ($user_meta['state'] == "goa") ? "selected" : "";?>>Goa</option>
                                <option value="assam" <?php echo ($user_meta['state'] == "assam") ? "selected" : "";?>>Assam</option>
                                <option value="rajasthan" <?php echo ($user_meta['state'] == "rajasthan") ? "selected" : "";?>>Rajasthan</option>
                                <option value="mp"<?php echo ($user_meta['state'] == "mp") ? "selected" : "";?>>Madhya Pradesh</option>
                                <option value="uttarakhand" <?php echo ($user_meta['state'] == "uttarakhand") ? "selected" : "";?>>Uttarakhand</option>
                                <option value="bihar" <?php echo ($user_meta['state'] == "bihar") ? "selected" : "";?>>Bihar</option>
                                <option value="punjab" <?php echo ($user_meta['state'] == "punjab") ? "selected" : "";?>>Punjab</option>
                            </select>
                            <span class="error"><?php echo $stateerr; ?></span>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="country" >Country</label>
                        <div class="col-md-10">
                            <select class="form-control" name="country" id="country">
                                <option value="">Select Country</option>
                                <option value="india" <?php echo ($user_meta['country'] == "india") ? "selected" : "";?> >India</option>
                                <option value="usa" <?php echo ($user_meta['country'] == "usa") ? "selected" : "";?> >USA</option>
                                <option value="australia" <?php echo ($user_meta['country'] == "australia") ? "selected" : "";?>>Australia</option>
                                <option value="uk"<?php echo ($user_meta['country'] == "uk") ? "selected" : "";?>>UK</option>
                                <option value="newzeland" <?php echo ($user_meta['country'] == "newzeland") ? "selected" : "";?> >New Zealand</option>
                                <option value="canada" <?php echo ($user_meta['country'] == "canada") ? "selected" : "";?> >Canada</option>
                                <option value="switzerland" <?php echo ($user_meta['country'] == "switzerland") ? "selected" : "";?> >Switzerland</option>
                                <option value="srilanka" <?php echo ($user_meta['country'] == "srilanka") ? "selected" : "";?> >Sri Lanka</option>
                                <option value="russia"<?php echo ($user_meta['country'] == "russia") ? "selected" : "";?>>Russia</option>
                                <option value="nepal" <?php echo ($user_meta['country'] == "nepal") ? "selected" : "";?>>Nepal</option>
                            </select>

                            <span class="error"><?php echo $countryerr; ?></span>

                        </div>
                    </div>
                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Gender</h5>
                        <div class="custom-control custom-radio custom-control-right">
                            <input type="radio" id="male" name="gender" class="custom-control-input"  value="male" <?php echo ($user_meta['gender'] ==  "male") ?  "checked" : '';?> >
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-right">
                            <input type="radio" id="female" name="gender" class="custom-control-input"  value="female"<?php echo ($user_meta['gender'] == 'female') ? 'checked' : ''; ?> >  
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                        <span class="error"><?php echo $gendererr; ?></span>
                    </div>


                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Hobbies</h5>
                        <div class="custom-control custom-checkbox  custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="reading" value="reading"  <?php if(in_array('reading',$hobbies_arr)) {echo "checked";} ?>   name="hobbies[]">
                            <label class="custom-control-label mr-2" for="reading">reading</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="driving" value="driving" <?php if(in_array('driving',$hobbies_arr)) {echo "checked";} ?>   name="hobbies[]">
                            <label class="custom-control-label mr-2" for="driving">driving</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="swimming" value="swimming" <?php if(in_array('swimming',$hobbies_arr)) {echo "checked";} ?>   name="hobbies[]">
                            <label class="custom-control-label mr-2" for="swimming">swimming</label>
                        </div>

                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="writting" value="writting"  <?php if(in_array('writting',$hobbies_arr)) {echo "checked";} ?>   name="hobbies[]">
                            <label class="custom-control-label mr-2" for="writting">writting</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="travelling" value="travelling" <?php if(in_array('travelling',$hobbies_arr)) {echo "checked";} ?>  name="hobbies[]">
                            <label class="custom-control-label mr-2" for="travelling">travelling</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-right">
                            <input type="checkbox" class="custom-control-input" id="learning" value="learning" <?php if(in_array('learning',$hobbies_arr)) {echo "checked";} ?>  name="hobbies[]">
                            <label class="custom-control-label mr-2" for="learning">learning</label>
                        </div>
                        <span class="error"><?php echo $hobbieserr; ?></span>
                    </div>

                    <div class="mt-4">
                        <h5 class="font-size-14 mb-4">Language</h5>
                        <div class="form-group">
                            <select class="custom-select" name="languages[]" multiple>
                                <option value="english" <?php  if(in_array('english',$language_arr)){echo "selected";} ?>>English</option>
                                <option value="hindi" <?php  if(in_array('hindi',$language_arr)) {echo "selected";}?>>Hindi</option>
                                <option value="gujarati" <?php  if(in_array('gujarati',$language_arr)) {echo "selected";}?>>Gujarati</option>
                                <option value="german" <?php  if(in_array('german',$language_arr)) {echo "selected";}?>>German</option>
                                <option value="tamil" <?php  if(in_array('tamil',$language_arr)) {echo "selected";}?>>Tamil</option>
                                <option value="spanish" <?php  if(in_array('spanish',$language_arr)){echo "selected";} ?>>Spanish</option>
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

                                <img id="img" src="<?php echo $user_meta['file'] ?>" alt="" width="50">

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

<?php   include "footer.php"; ?>
