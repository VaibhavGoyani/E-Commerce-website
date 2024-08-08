<style>
		.error{
			color: red;
		}
	</style>

	<?php

	$fnameerr = $lnameerr = $unameerr = $emailerr =  $passworderr =  $cpassworderr =  $addresserr =  $cityerr =  $stateerr =  $countryerr =  $gendererr =  $hobbieserr =  $languageerr =  $fileerr =  "" ;

	$fname = $lname = $uname = $email =  $password =  $cpassword =  $address =  $city =  $state =  $country =  $gender =  $hobbies =  $language =  $file =  "";


	if(isset($_POST["submit"])){
		if(empty($_POST["fname"])){
			$fnameerr = "first name is REQUIRED!!!!";
		}else{
			$fname =test_input($_POST['fname']);
		} 

		if(empty($_POST["lname"])){
			$lnameerr = "last name is REQUIRED!!!!";
		}else{
			$lname =test_input($_POST['lname']);
		} 

		if(empty($_POST["uname"])){
			$unameerr = "username is REQUIRED!!!!";
		}else{
			$uname =test_input($_POST['uname']);
		}

		if(empty($_POST["email"])){
			$emailerr = "email is REQUIRED!!!!";
		}else{
			$email =test_input($_POST['email']);
		}

		if(empty($_POST["password"])){
			$passworderr = "password is REQUIRED!!!!";
		}else{
			$password =test_input($_POST['password']);
		}

		if(empty($_POST["cpassword"])){
			$cpassworderr = "password is Not Match!!!!";
		}else{
			$cpassword =test_input($_POST['cpassword']);
		}

		if(empty($_POST["address"])){
			$addresserr = "address is REQUIRED!!!!";
		}else{
			$address =test_input($_POST['address']);
		}

		if(empty($_POST["city"])){
			$cityerr = "city is REQUIRED!!!!";
		}else{
			$city =test_input($_POST['city']);
		}

		if(empty($_POST["state"])){
			$stateerr = "state is REQUIRED!!!!";
		}else{
			$state =test_input($_POST['state']);
		}

		if(empty($_POST["country"])){
			$countryerr = "country is REQUIRED!!!!";
		}else{
			$country =test_input($_POST['country']);
		}

		if(empty($_POST["gender"])){
			$gendererr = "gender is REQUIRED!!!!";
		}else{
			$gender =test_input($_POST['gender']);
		}

		if(empty($_POST["hobbies"])){
			$hobbieserr = "hobbies is REQUIRED!!!!";
		}else{
			$hobbies =test_input($_POST['hobbies']);
		}

		if(empty($_POST["language"])){
			$languageerr = "language is REQUIRED!!!!";
		}else{
			$language =test_input($_POST['language']);
		}

		if(empty($_POST["file"])){
			$fileerr = "file is REQUIRED!!!!";
		}else{
			$file =test_input($_POST['file']);
		}
	
	}
		function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}

	?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				<h4 class="card-title">ADD New User</h4>

				<div class="form-group row">
					<label for="fname" class="col-md-2 col-form-label">Firstname</label>
					<div class="col-md-10">
						<input class="form-control" type="text" id="fname" name="fname">
						<span class="error">* <?php echo $fnameerr; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label for="lname" class="col-md-2 col-form-label">lastname</label>
					<div class="col-md-10">
						<input class="form-control" type="text" id="lname"  name="lname">
						<span class="error">* <?php echo $lnameerr; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label for="uname" class="col-md-2 col-form-label">Username</label>
					<div class="col-md-10">
						<input class="form-control" type="text" id="uname" name="uname">
						<span class="error">* <?php echo $unameerr; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-md-2 col-form-label">Email</label>
					<div class="col-md-10">
						<input class="form-control" type="email" id="email" name="email">
						<span class="error">* <?php echo $emailerr; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label for="password" class="col-md-2 col-form-label">Password</label>
					<div class="col-md-10">
						<input class="form-control" type="password" id="password" name="password">
						<span class="error">* <?php echo $passworderr; ?></span>
					</div>
				</div>	
				<div class="form-group row">
					<label for="cpassword" class="col-md-2 col-form-label">Confirm Password</label>
					<div class="col-md-10">
						<input class="form-control" type="password" id="cpassword" name="cpassword">
						<span class="error">* <?php echo $cpassworderr; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label for="address" class="col-md-2 col-form-label">Address</label>
					<div class="col-md-10">
						<input class="form-control" type="textarea" id="address" name="address">
						<span class="error">* <?php echo $addresserr; ?></span>
					</div>
				</div>
				<div class="form-group row">
					<label for="city" class="col-md-2 col-form-label">City</label>
					<div class="col-md-10">
						<input class="form-control" type="text" id="city" name="city">
						<span class="error">* <?php echo $cityerr; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="state" class="col-md-2 col-form-label"  name="state">State</label>
					<div class="col-md-10">
						<select class="form-control">
							<option>Select State</option>
							<option>gujarat</option>
							<option>kerala</option>
							<option>uttarpradesh</option>
							<option>goa</option>
							<option>assam</option>
							<option>rajasthan</option>
							<option>mp</option>
							<option>uttarakhand</option>
							<option>bihar</option>
							<option>panjab</option>
						</select>
						<span class="error">* <?php echo $stateerr; ?></span>

					</div>
				</div>

				<div class="form-group row">
					<label for = "country" class="col-md-2 col-form-label"  name="country">Country</label>
					<div class="col-md-10">
						<select class="form-control">
							<option>Select Country</option>
							<option>India</option>
							<option>usa</option>
							<option>australia</option>
							<option>uk</option>
							<option>newzeland</option>
							<option>canada</option>
							<option>swizterland</option>
							<option>srilanka</option>
							<option>russia</option>
							<option>nepal</option>
						</select>
						<span class="error">* <?php echo $countryerr; ?></span>

					</div>
				</div>



				<div class="mt-4">
					<h5 class="font-size-14 mb-4">Gender</h5>
					<div class="custom-control custom-radio custom-control-right">
						<input type="radio" id="male" name="gender" class="custom-control-input"  value="male">
						<label class="custom-control-label" for="male">Male</label>
					</div>
					<div class="custom-control custom-radio custom-control-right">
						<input type="radio" id="female" name="gender" class="custom-control-input"  value="female">
						<label class="custom-control-label" for="female">Female</label>
					</div>
						<span class="error">* <?php echo $gendererr; ?></span>
				</div>




				<div class="mt-4">
					<h5 class="font-size-14 mb-4">Hobbies</h5>
					<div class="custom-control custom-checkbox  custom-control-right">
						<input type="checkbox" class="custom-control-input" id="reading"  name="hobbies">
						<label class="custom-control-label mr-2" for="reading">reading</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="driving"  name="hobbies">
						<label class="custom-control-label mr-2" for="driving">driving</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="swimming"  name="hobbies">
						<label class="custom-control-label mr-2" for="swimming">swimming</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="writting"  name="hobbies">
						<label class="custom-control-label mr-2" for="writting">writting</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="travelling"  name="hobbies">
						<label class="custom-control-label mr-2" for="travelling">travelling</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="learning"  name="hobbies">
						<label class="custom-control-label mr-2" for="learning">learning</label>
					</div>
						<span class="error">* <?php echo $hobbieserr; ?></span>
				</div>



				<div class="mt-4">
					<h5 class="font-size-14 mb-4">Language</h5>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="english"  name="language">
						<label class="custom-control-label mr-2" for="english">english</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="hindi"  name="language">
						<label class="custom-control-label mr-2" for="hindi">hindi</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="gujarati"  name="language">
						<label class="custom-control-label mr-2" for="gujarati">gujarati</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="germen"  name="language">
						<label class="custom-control-label mr-2" for="germen">germen</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="tamil"  name="language">
						<label class="custom-control-label mr-2" for="tamil">tamil</label>
					</div>
					<div class="custom-control custom-checkbox custom-control-right">
						<input type="checkbox" class="custom-control-input" id="spanish"  name="language">
						<label class="custom-control-label mr-2" for="spanish">spanish</label>
					</div>
						<span class="error">* <?php echo $languageerr; ?></span>
				</div>


				<div class="mt-4">
					<h4 class="card-title">File browser</h4>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="file"  name="file">
						<span class="error">* <?php echo $fileerr; ?></span>
						<label class="custom-file-label" for="file">Choose file</label>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-10 ml-4">
					<input type="submit" name="submit" value="submit">
				</div>
			</div>



		</div>
	</div>
</div> 
</div>

<?php echo ($state&&$state == "gujarat") ? "" : "";

	<div class="mt-4">
						<h5 class="font-size-14 mb-4">Hobbies</h5>
						<div class="custom-control custom-checkbox  custom-control-right">
							<input type="checkbox" class="custom-control-input" id="reading" value="reading" <?php if(in_array('reading', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="reading">reading</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="driving" value="driving" <?php if(in_array('driving', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="driving">driving</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="swimming" value="swimming" <?php if(in_array('swimming', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="swimming">swimming</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="writting" value="writting"  <?php if(in_array('writting', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="writting">writting</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="travelling" value="travelling" <?php if(in_array('travelling', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="travelling">travelling</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="learning" value="learning" <?php if(in_array('learning', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="learning">learning</label>
						</div>
						<span class="error"><?php echo $hobbieserr; ?></span>
					</div>



					<div class="mt-4">
						<h5 class="font-size-14 mb-4">Language</h5>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="english" value="english" name="language[]"  <?php if(in_array('english', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="english">english</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="hindi"  value="hindi" name="language[]"  <?php if(in_array('hindi', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="hindi">hindi</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="gujarati" value="gujarati" name="language[]" <?php if(in_array('gujarati', $language))echo "checked";?> >
							<label class="custom-control-label mr-2" for="gujarati">gujarati</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="germen" value="germen" name="language[]"  <?php if(in_array('germen', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="germen">germen</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="tamil" value="tamil" name="language[]"  <?php if(in_array('tamil', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="tamil">tamil</label>
						</div>a
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="spanish" value="spanish" name="language[]"  <?php if(in_array('spanish', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="spanish">spanish</label>
						</div>
						<span class="error"><?php echo $languageerr; ?></span>
					</div>

					-------------------------------------------------------


					<?php include "header.php" ?>
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

if(isset($_POST["submit"])){
	if(empty($_POST["fname"])){
		$fnameerr = "first name is REQUIRED!!!!";
	}else{
		$fname =test_input($_POST['fname']);
		if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
			$fnameerr = "Only letters and white space allowed";
		}
	} 

	if(empty($_POST["lname"])){
		$lnameerr = "last name is REQUIRED!!!!";
	}else{
		$lname =test_input($_POST['lname']);
		if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
			$lnameerr = "Only letters and white space allowed";
		}
	} 

	if(empty($_POST["uname"])){
		$unameerr = "username is REQUIRED!!!!";
	}else{
		$uname =test_input($_POST['uname']);
		if (!preg_match("/^[a-zA-Z0-9_]*$/", $uname)) {
			$unameerr = "Only letters, numbers, and underscore allowed";
		}
	}

	if(empty($_POST["email"])){
		$emailerr = "email is REQUIRED!!!!";
	}else{
		$email =test_input($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailerr = "Invalid email format";
		}
	}

	if(empty($_POST["password"])){
		$passworderr = "password is REQUIRED!!!!";
	}else{
		$password =test_input($_POST['password']);
		if (strlen($password) < 8) {
			$passworderr = "Password must be at least 8 characters long";
		}
	}

	if(empty($_POST["cpassword"])){
		$cpassworderr = "please confirm the passwo!!!!";
	}else{
		$cpassword =test_input($_POST['cpassword']);
		if ($cpassword!= $password) {
			$cpassworderr = "Passwords do not match";
		}
	}

	if(empty($_POST["address"])){
		$addresserr = "please enter your address";
	}else{
		$address =test_input($_POST['address']);
	}

	if(empty($_POST["city"])){
		$cityerr = "please enter your city name";
	}else{
		$city =test_input($_POST['city']);
	}

	if(empty($_POST["state"])){
		$stateerr = "please select a state";
	}else{
		$state =test_input($_POST['state']);
	}

	if(empty($_POST["country"])){
		$countryerr = "please select a country";
	}else{
		$country =test_input($_POST['country']);
	}

	if(empty($_POST["gender"])){
		$gendererr = "gender is REQUIRED!!!!";
	}else{
		$gender =test_input($_POST['gender']);
	}

	if(empty($_POST["hobbies"])){
		$hobbieserr =  "At least one hobby is required";
	}else{
		$hobbies =test_input($_POST['hobbies']);

	}

	if(empty($_POST["language"])){
		$languageerr = "At least one language is required";
	}else{
		$language =test_input($_POST['language']);
	}

	if ($_FILES["filetoupload"]["size"] > 0) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
		$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		$file = getimagesize($_FILES["filetoupload"]["tmp_name"]);
		if ($file !== false) {
		} else {
			$fileerr = "File is not an image.";
		}
	}




}

function test_input($data) {
	return $data;
}

?>

<form method="post" action="<?php $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
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
							<input class="form-control" type="text" id="example-search-input" name="uname" value="<?php echo isset($_POST['uname']) ? $_POST['uname'] : ''; ?> ">
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
							<input class="form-control" type="text" id="example-city-input" name="city" value="<?php isset($_POST['city']) ? $_POST['city'] : ''; ?>" >
							<span class="error"><?php echo $cityerr; ?></span>
						</div>
					</div>

					<div class="form-group row" >
						<label class="col-md-2 col-form-label" for="state">State</label>
						<div class="col-md-10">
							<select class="form-control" name="state" id="state">
								<option value="">Select State</option>
								<option value="gujarat" <?php  echo ($state&&$state == "gujarat") ? "$_POST['gujarat']" : "";?> >gujarat</option>	
								<option value="kerala" <?php if(isset($state) && $state == "kerala") echo "selected";?> >kerala</option>
								<option value="uttarpradesh" <?php if(isset($state) && $state == "uttarpradesh") echo "selected";?> >uttarpradesh</option>
								<option value="goa" <?php if(isset($state) && $state == "goa") echo "selected";?> >goa</option>
								<option value="assam" <?php if(isset($state) && $state == "assam") echo "selected";?> >assam</option>
								<option value="rajasthan" <?php if(isset($state) && $state == "rajasthan") echo "selected";?> >rajasthan</option>
								<option value="mp" <?php if(isset($state) && $state == "mp") echo "selected";?> >mp</option>
								<option value="uttarakhand" <?php if(isset($state) && $state == "uttarakhand") echo "selected";?> >uttarakhand</option>
								<option value="bihar" <?php if(isset($state) && $state == "bihar") echo "selected";?> >bihar</option>
								<option value="panjab" <?php if(isset($state) && $state == "panjab") echo "selected";?> >panjab</option>
							</select> 
							<span class="error"><?php echo $stateerr; ?></span>

						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 col-form-label" for="country" >Country</label>
						<div class="col-md-10">
							<select class="form-control" name="country" id="country">
								<option value="">Select Country</option>
								<option value="india" <?php if(isset($country) && $country == "india") echo "selected";?> >India</option>
								<option value="usa" <?php if(isset($country) && $country == "usa") echo "selected";?> >usa</option>
								<option value="australia" <?php if(isset($country) && $country == "australia") echo "selected";?> >australia</option>
								<option value="uk" <?php if(isset($country) && $country == "uk") echo "selected";?> >uk</option>
								<option value="newzeland" <?php if(isset($country) && $country == "newzeland") echo "selected";?> >newzeland</option>
								<option value="canada" <?php if(isset($country) && $country == "canada") echo "selected";?> >canada</option>
								<option value="swizterland" <?php if(isset($country) && $country == "swizterland") echo "selected";?> >swizterland</option>
								<option value="srilanka" <?php if(isset($country) && $country == "srilanka") echo "selected";?> >srilanka</option>
								<option value="russia" <?php if(isset($country) && $country == "russia") echo "selected";?> >russia</option>
								<option value="nepal" <?php if(isset($country) && $country == "nepal") echo "selected";?> >nepal</option>
							</select>
							<span class="error"><?php echo $countryerr; ?></span>

						</div>
					</div>



					<div class="mt-4">
						<h5 class="font-size-14 mb-4">Gender</h5>
						<div class="custom-control custom-radio custom-control-right">
							<input type="radio" id="male" name="gender" class="custom-control-input"  value="male" <?php if(isset($gender) && $gender == "male") echo "checked";?> >
							<label class="custom-control-label" for="male">Male</label>
						</div>
						<div class="custom-control custom-radio custom-control-right">
							<input type="radio" id="female" name="gender" class="custom-control-input"  value="female" <?php if(isset($gender) && $gender == "female") echo "checked";?> >
							<label class="custom-control-label" for="female">Female</label>
						</div>
						<span class="error"> <?php echo $gendererr; ?></span>
					</div>




					<div class="mt-4">
							<h5 class="font-size-14 mb-4">Hobbies</h5>
						<div class="custom-control custom-checkbox  custom-control-right">
							<input type="checkbox" class="custom-control-input" id="reading" value="reading" <?php if(in_array('reading', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="reading">reading</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="driving" value="driving" <?php if(in_array('driving', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="driving">driving</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="swimming" value="swimming" <?php if(in_array('swimming', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="swimming">swimming</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="writting" value="writting"  <?php if(in_array('writting', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="writting">writting</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="travelling" value="travelling" <?php if(in_array('travelling', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="travelling">travelling</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="learning" value="learning" <?php if(in_array('learning', $hobbies)) echo "checked";?> name="hobbies[]">
							<label class="custom-control-label mr-2" for="learning">learning</label>
						</div>
						<span class="error"><?php echo $hobbieserr; ?></span>
					</div>



							<div class="mt-4">
						<h5 class="font-size-14 mb-4">Language</h5>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="english" value="english" name="language[]"  <?php if(in_array('english', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="english">english</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="hindi"  value="hindi" name="language[]"  <?php if(in_array('hindi', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="hindi">hindi</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="gujarati" value="gujarati" name="language[]" <?php if(in_array('gujarati', $language))echo "checked";?> >
							<label class="custom-control-label mr-2" for="gujarati">gujarati</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="germen" value="germen" name="language[]"  <?php if(in_array('germen', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="germen">germen</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="tamil" value="tamil" name="language[]"  <?php if(in_array('tamil', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="tamil">tamil</label>
						</div>a
						<div class="custom-control custom-checkbox custom-control-right">
							<input type="checkbox" class="custom-control-input" id="spanish" value="spanish" name="language[]"  <?php if(in_array('spanish', $language)) echo "checked";?>>
							<label class="custom-control-label mr-2" for="spanish">spanish</label>
						</div>
						<span class="error"><?php echo $languageerr; ?></span>
					</div>


					<div class="mt-4">
						<h4 class="card-title">File browser</h4>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="filetoupload"  name="filetoupload">
							<span class="error"> <?php echo $fileerr; ?></span>
							<label class="custom-file-label" for="filetoupload">Choose file</label>
							<img src=<?php echo isset($_POST['filetoupload']) ? $_POST['filetoupload'] : ''; ?> 	alt="" width="50">
						</div>
					</div>

					<div class="form-group row mt-3">
						<div class="col-md-10">
							<input type="submit" name="submit" value="submit">
						</div>
					</div>

				</div>	
			</div>
		</div>
	</div> 

</form>

<?php include "footer.php" ?>


