<?php 
include "header.php";
include "db.php";

?>                   

<style>
	.error{
		color: red;  
	}
</style>
<?php

$fnameerr = $lnameerr = $unameerr = $emailerr =  $passworderr =  $cpassworderr =  $addresserr =  $cityerr =  $stateerr =  $countryerr =  $gendererr =  $hobbieserr =  $languageerr =  $fileerr =  "" ;

$fname = $lname = $uname = $email =  $password =  $cpassword =  $address =  $city =  $state =  $country =  $gender = $file =  "";
$hobbies = array();
$language =  array();



$pass = md5($password);
$user_role = "1"; 
$create_date = date('Y-m-d H:i:s');
$update_date = date('Y-m-d H:i:s');

$flag = 0;
$full_name = '';
if(isset($_POST["submit"])){
	if(empty($_POST["fname"])){
		$fnameerr = "first name is REQUIRED!!!!";	
		$flag = 1;
	}else{
		$fname =test_input($_POST['fname']);
		if (!preg_match("/^[a-zA-Z-' ]*$/",	$fname)){
			$fnameerr = "Only letters and white space allowed";
			$flag = 1;	
		}
		$full_name = $fname;
	} 

	if(empty($_POST["lname"])){
		$lnameerr = "last name is REQUIRED!!!!";
		$flag = 1;
	}else{
		$lname =test_input($_POST['lname']);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
			$lnameerr = "Only letters and white space allowed";
			$flag = 1;
		}
			$full_name = $fname.' '.$lname;
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


	if(empty($_POST["email"])){
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

	if(empty($_POST["password"])){
		$passworderr = "password is REQUIRED!!!!";
		$flag = 1;
	}else{
		$password =test_input($_POST['password']);
		if (strlen($password) < 8) {
			$passworderr = "Password must be at least 8 characters long";
			$flag = 1;
		}
	}

	if(empty($_POST["cpassword"])){
		$cpassworderr = "please confirm the passwo!!!!";
		$flag = 1;
	}else{
		$cpassword =test_input($_POST['cpassword']);
		if ($cpassword!= $password) {
			$cpassworderr = "Passwords do not match";
			$flag = 1;
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
		$languageerr = "At least one language is required";
		$flag = 1;
	}else{
		$language = test_input($_POST['languages']);
	}


	if ($_FILES["filetoupload"]["size"] > 0) {
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
		$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));	
		$tmp_name = $_FILES["filetoupload"]["tmp_name"];

		if ($_FILES["filetoupload"]["size"] > 500000) {
			$fileerr = "Sorry, your file is too large.";
			$flag = 1;
		}

		if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg"
			&& $imagefiletype != "gif" ) {
			$fileerr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$flag = 1;
	}

	if ($flag == 0) {
		if (move_uploaded_file($tmp_name, $target_file)) {
			$file = $target_file;
		} else {
			$fileerr = "Sorry, there was an error uploading your file.";
			$flag = 1;
		}
	}
} else {
	$fileerr = "Please select a file.";
	$flag = 1;
}




if( $flag == 0){
	$sql = "INSERT INTO users (name, username, password, email, user_role, create_date, update_date)VALUES ('$full_name','$uname','$pass', '$email','$user_role', '$create_date', '$update_date' )";

	if (mysqli_query($conn, $sql)) {
		$last_id = mysqli_insert_id($conn);	
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','firstname','$fname')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','lastname','$lname')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','address','$address')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','city','$city')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','state','$state')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','country','$country')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','gender','$gender')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$hobbies_str = '';
	if($hobbies && !empty($hobbies) && is_array($hobbies)){
		$hobbies_str = implode(",",$hobbies);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','hobbies','$hobbies_str')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$language_str = '';
	if($language&& !empty($language) && is_array($language)){
		$language_str = implode(",",$language);
	}
	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','language','$language_str')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO user_meta(user_id,meta_key,meta_value)VALUES ('$last_id','file','$file')";
	if (mysqli_query($conn, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	header("Location: contacts-list.php");
}
}
function test_input($data) {
	return $data;
}


?>

<form method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<h4 class="card-title">ADD New User</h4>

					<div class="form-group row">
						<label for="example-text-input" class="col-md-2 col-form-label">Firstname</label>
						<div class="col-md-10">
							<input class="form-control" type="text" id="example-text-input" name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?> ">
							<span class="error"> <?php echo $fnameerr; ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-search-input" class="col-md-2 col-form-label">lastname</label>
						<div class="col-md-10">
							<input class="form-control" type="text" id="example-search-input"  name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : ''; ?>">
							<span class="error"> <?php echo $lnameerr; ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-search-input" class="col-md-2 col-form-label">Username</label>
						<div class="col-md-10">
							<input class="form-control" type="text" id="example-search-input" name="uname" value="<?php echo isset($_POST['uname']) ? $_POST['uname'] : ''; ?>">
							<span class="error"><?php echo $unameerr; ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-email-input" class="col-md-2 col-form-label">Email</label>
						<div class="col-md-10">
							<input class="form-control" type="email" id="example-email-input" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" >
							<span class="error"><?php echo $emailerr; ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-password-input" class="col-md-2 col-form-label">Password</label>
						<div class="col-md-10">
							<input class="form-control" type="password" id="example-password-input" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';?>" > 
							<span class="error"><?php echo $passworderr; ?></span>
						</div>
					</div>	
					<div class="form-group row">
						<label for="example-confirm-password-input" class="col-md-2 col-form-label">Confirm Password</label>
						<div class="col-md-10">
							<input class="form-control" type="password" id="example-confirm-password-input" name="cpassword" value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : ''; ?>" >
							<span class="error"><?php echo $cpassworderr; ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-address-input" class="col-md-2 col-form-label">Address</label>
						<div class="col-md-10">
							<input class="form-control" type="textarea" id="example-address-input" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>" >
							<span class="error"><?php echo $addresserr; ?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-city-input" class="col-md-2 col-form-label">City</label>
						<div class="col-md-10">
							<input class="form-control" type="text" id="example-city-input" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>" >
							<span class="error"><?php echo $cityerr; ?></span>
						</div>
					</div>

					<div class="form-group row" >
						<label class="col-md-2 col-form-label" for="state">State</label>
						<div class="col-md-10">
							<select class="form-control" name="state" id="state">
								<option value="">Select State</option>
								<option value="gujarat" <?php echo isset($_POST['state']) && $_POST['state'] == "gujarat" ? "selected" : ""; ?>>Gujarat</option>
								<option value="kerala" <?php echo isset($_POST['state']) && $_POST['state'] == "kerala" ? "selected" : ""; ?>>Kerala</option>
								<option value="uttarpradesh" <?php echo isset($_POST['state']) && $_POST['state'] == "uttarpradesh" ? "selected" : ""; ?>>Uttar Pradesh</option>
								<option value="goa" <?php echo isset($_POST['state']) && $_POST['state'] == "goa" ? "selected" : ""; ?>>Goa</option>
								<option value="assam" <?php echo isset($_POST['state']) && $_POST['state'] == "assam" ? "selected" : ""; ?>>Assam</option>
								<option value="rajasthan" <?php echo isset($_POST['state']) && $_POST['state'] == "rajasthan" ? "selected" : ""; ?>>Rajasthan</option>
								<option value="mp" <?php echo isset($_POST['state']) && $_POST['state'] == "mp" ? "selected" : ""; ?>>Madhya Pradesh</option>
								<option value="uttarakhand" <?php echo isset($_POST['state']) && $_POST['state'] == "uttarakhand" ? "selected" : ""; ?>>Uttarakhand</option>
								<option value="bihar" <?php echo isset($_POST['state']) && $_POST['state'] == "bihar" ? "selected" : ""; ?>>Bihar</option>
								<option value="punjab" <?php echo isset($_POST['state']) && $_POST['state'] == "punjab" ? "selected" : ""; ?>>Punjab</option>
							</select>
							<span class="error"><?php echo $stateerr; ?></span>

						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 col-form-label" for="country" >Country</label>
						<div class="col-md-10">
							<select class="form-control" name="country" id="country">
								<option value="">Select Country</option>
								<option value="india" <?php echo isset($_POST['country']) && $_POST['country'] == "india" ? "selected" : "";?> >India</option>
								<option value="usa" <?php echo isset($_POST['country']) && $_POST['country'] == "usa" ? "selected" : "";?> >USA</option>
								<option value="australia" <?php echo isset($_POST['country']) && $_POST['country'] == "australia" ? "selected" : "";?>>Australia</option>
								<option value="uk" <?php echo isset($_POST['country']) && $_POST['country'] == "uk" ? "selected" : "";?> >UK</option>
								<option value="newzeland" <?php echo isset($_POST['country']) && $_POST['country'] == "newzeland" ? "selected" : "";?> >New Zealand</option>
								<option value="canada" <?php echo isset($_POST['country']) && $_POST['country'] == "canada" ? "selected" : "";?> >Canada</option>
								<option value="switzerland" <?php echo isset($_POST['country']) && $_POST['country'] == "switzerland" ? "selected" : "";?> >Switzerland</option>
								<option value="srilanka" <?php echo isset($_POST['country']) && $_POST['country'] == "srilanka" ? "selected" : "";?> >Sri Lanka</option>
								<option value="russia" <?php echo isset($_POST['country']) && $_POST['country'] == "russia" ? "selected" : "";?> >Russia</option>
								<option value="nepal" <?php echo isset($_POST['country']) && $_POST['country'] == "nepal" ? "selected" : "";?> >Nepal</option>
							</select>

							<span class="error"><?php echo $countryerr; ?></span>

						</div>
					</div>


					<div class="mt-4">
						<h5 class="font-size-14 mb-4">Gender</h5>
						<div class="custom-control custom-radio custom-control-right">
							<input type="radio" id="male" name="gender" class="custom-control-input"  value="male" <?php echo isset($_POST['gender']) && $_POST['gender'] == "male" ? "checked" : ""; ?> >
							<label class="custom-control-label" for="male">Male</label>
						</div>
						<div class="custom-control custom-radio custom-control-right">
							<input type="radio" id="female" name="gender" class="custom-control-input"  value="female"<?php echo isset($_POST['gender']) && $_POST['gender'] == "female" ? "checked" : ""; ?> >
							<label class="custom-control-label" for="female">Female</label>
						</div>
						<span class="error"> <?php echo $gendererr; ?></span>
					</div>



					<div class="mt-4">
						<h5 class="font-size-14 mb-4">Hobbies</h5>
						<div class="custom-control custom-checkbox  custom-control-right">
							<input type="checkbox" class="custom-control-input" id="reading" value="reading" <?php echo isset($_POST['hobbies']) && in_array('reading', $_POST['hobbies']) ? "checked" : ""; ?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="reading">reading</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="driving" value="driving" <?php echo isset($_POST['hobbies']) && in_array('driving', $_POST['hobbies']) ? "checked" : ""; ?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="driving">driving</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="swimming" value="swimming" <?php echo isset($_POST['hobbies']) && in_array('swimming', $_POST['hobbies']) ? "checked" : ""; ?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="swimming">swimming</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="writting" value="writting"  <?php echo isset($_POST['hobbies']) && in_array('writting', $_POST['hobbies']) ? "checked" : ""; ?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="writting">writting</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="travelling" value="travelling" <?php echo isset($_POST['hobbies']) && in_array('travelling', $_POST['hobbies']) ? "checked" : ""; ?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="travelling">travelling</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="learning" value="learning" <?php echo isset($_POST['hobbies']) && in_array('driving', $_POST['hobbies']) ? "checked" : ""; ?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="learning">learning</label>
						</div>
						<span class="error"><?php echo $hobbieserr; ?></span>
					</div>

					<div class="mt-4">
						<h5 class="font-size-14 mb-4">Language</h5>
						<div class="form-group">
							<select class="custom-select" name="languages[]" multiple>
								<option value="english" <?php echo isset($_POST['languages'])&& in_array('english', $_POST['languages']) ? "selected" : ""; ?>>English</option>
								<option value="hindi" <?php echo isset($_POST['languages']) && in_array('hindi', $_POST['languages']) ? "selected" : ""; ?>>Hindi</option>
								<option value="gujarati" <?php echo isset($_POST['languages']) && in_array('gujarati', $_POST['languages']) ? "selected" : ""; ?>>Gujarati</option>
								<option value="german" <?php echo isset($_POST['languages']) && in_array('german', $_POST['languages']) ? "selected" : ""; ?>>German</option>
								<option value="tamil" <?php echo isset($_POST['languages']) && in_array('tamil', $_POST['languages']) ? "selected" : ""; ?>>Tamil</option>
								<option value="spanish" <?php echo isset($_POST['languages']) && in_array('spanish', $_POST['languages']) ? "selected" : ""; ?>>Spanish</option>
							</select>
						</div>
						<span class="error"><?php echo $languageerr; ?></span>
					</div>

		<!-- 			<div class="mt-4">(guage</h5>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="english" value="english" name="language[]"  <?php echo isset($_POST['language']) && in_array('english', $_POST['language']) ? "checked" : ""; ?> >
							<label class="custom-control-label mr-2" for="english">english</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="hindi"  value="hindi" name="language[]"  <?php echo isset($_POST['language']) && in_array('hindi', $_POST['language']) ? "checked" : ""; ?>>
							<label class="custom-control-label mr-2" for="hindi">hindi</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="gujarati" value="gujarati" name="language[]" <?php echo isset($_POST['language']) && in_array('gujarati', $_POST['language']) ? "checked" : ""; ?>>
							<label class="custom-control-label mr-2" for="gujarati">gujarati</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="germen" value="germen" name="language[]"  <?php echo isset($_POST['language']) && in_array('germen', $_POST['language']) ? "checked" : ""; ?>>
							<label class="custom-control-label mr-2" for="germen">germen</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="tamil" value="tamil" name="language[]"  <?php echo isset($_POST['language']) && in_array('tamil', $_POST['language']) ? "checked" : ""; ?>>
							<label class="custom-control-label mr-2" for="tamil">tamil</label>
						</div>a
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="spanish" value="spanish" name="language[]"  <?php echo isset($_POST['language']) && in_array('spanish', $_POST['language']) ? "checked" : ""; ?>>
							<label class="custom-control-label mr-2" for="spanish">spanish</label>
						</div>
						<span class="error"><?php echo $languageerr; ?></span>
					</div> -->

				<!-- 	<div class="mt-4">
						 <h5 class="font-size-14 mb-4">Language</h5>
                            <div class="form-group">
                                <select class="custom-select" name="language" multiple onmouseover="this.size=6;" onmouseout="this.size=1;" onchange="this.size=1   ;">
                                    <option value="" >select language</option> 
                                    <option value="english" <?php echo ($user_meta['language'] == 'english') ? 'selected' : ''; ?>>English</option>
                                    <option value="hindi" <?php echo ($user_meta['language'] == 'hindi') ? 'selected' : ''; ?>>Hindi</option>
                                    <option value="gujarati" <?php echo ($user_meta['language'] == 'gujarati') ? 'selected' : ''; ?>>Gujarati</option>
                                    <option value="german" <?php echo ($user_meta['language'] == 'germen') ? 'selected' : ''; ?>>German</option>
                                    <option value="tamil" <?php echo ($user_meta['language'] == 'tamil') ? 'selected' : ''; ?>>Tamil</option>
                                    <option value="spanish" <?php echo ($user_meta['language'] == 'spanish') ? 'selected' : ''; ?>>Spanish</option>
                                </select>
                            </div>
						<span class="error"><?php echo $languageerr; ?></span>
					</div> -->


					<div class="mt-4">
						<h4 class="card-title">File browser</h4>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="filetoupload"  name="filetoupload" value="<?php echo isset($_POST['file']) ? $_POST['file'] : ''; ?> ">
							<span class="error"> <?php echo $fileerr; ?></span>
							<label class="custom-file-label" for="filetoupload">Choose file</label>
							<!-- <img src=/images/<?php echo isset($_POST['filetoupload']) ? $_POST['filetoupload'] : 'ff'; ?> 	alt="" width="50"> -->
						</div>
					</div>

					<div class="form-group row mt-3">
						<div class="col-md-10">
							<input type="submit" name="submit" value="submit" >
						</div>
					</div>

				</div>	
			</div>
		</div>
	</div> 

</form>

<?php include "footer.php" ?>