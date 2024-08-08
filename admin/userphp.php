<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		
		
		
		

	if(file_exists($target_file)){
		$fileerr = "sorry this file is already exist!!!";
		$uploadok = 0;
		echo "<br>";
	}

	if($_FILES['filetoupload']['size'] > 500000 ){
		$fileerr = "your file is too big!!";
		$uploadok = 0;
		echo "<br>";
	}

	if($imgtype != "gif" && $imgtype != "jpg" && $imgtype != "png" && $imgtype != "jpeg"){
		$fileerr = "sorry only gif,jpg,png and jpeg files are alolowed.";
		$uploadok = 0;
		echo "<br>";
	}

	if($uploadok == 0){
		$fileerr = "sorry your file is not upload";
	}else{
		if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $target_file)){
			echo "the file ". htmlspecialchars(basename($_FILES['filetoupload']['tmp_name'], $target_file)) . "hase been uploaded";
		}else{
			$fileerr = "Sorry there was an error to uploading your file";
		}
	}

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

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Form Validation</title>
	</head>
	<body>

		<?php
// Define variables and initialize with empty values
		$firstname = $lastname = $username = $email = $password = $confirm_password = $address = $city = $state = $country = $gender = $hobbies = $language = "";
		$firstnameErr = $lastnameErr = $usernameErr = $emailErr = $passwordErr = $confirm_passwordErr = $addressErr = $cityErr = $stateErr = $countryErr = $genderErr = $hobbiesErr = $languageErr = "";
		$uploadErr = "";
		$uploadOk = 1;

// Validate input and process data
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First Name
			if (empty($_POST["firstname"])) {
				$firstnameErr = "First Name is required";
			} else {
				$firstname = test_input($_POST["firstname"]);
        // Check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
					$firstnameErr = "Only letters and white space allowed";
				}
			}

    // Last Name
			if (empty($_POST["lastname"])) {
				$lastnameErr = "Last Name is required";
			} else {
				$lastname = test_input($_POST["lastname"]);
        // Check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
					$lastnameErr = "Only letters and white space allowed";
				}
			}

    // Username
			if (empty($_POST["username"])) {
				$usernameErr = "Username is required";
			} else {
				$username = test_input($_POST["username"]);
        // Check if username is alphanumeric and contains underscore
				if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
					$usernameErr = "Only letters, numbers, and underscore allowed";
				}
			}

    // Email
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = test_input($_POST["email"]);
        // Check if email address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format";
				}
			}

    // Password
			if (empty($_POST["password"])) {
				$passwordErr = "Password is required";
			} else {
				$password = test_input($_POST["password"]);
        // Check if password length is at least 8 characters
				if (strlen($password) < 8) {
					$passwordErr = "Password must be at least 8 characters long";
				}
			}

    // Confirm Password
			if (empty($_POST["confirm_password"])) {
				$confirm_passwordErr = "Please confirm password";
			} else {
				$confirm_password = test_input($_POST["confirm_password"]);
				if ($confirm_password != $password) {
					$confirm_passwordErr = "Passwords do not match";
				}
			}

    // Address
			if (empty($_POST["address"])) {
				$addressErr = "Address is required";
			} else {
				$address = test_input($_POST["address"]);
			}

    // City
			if (empty($_POST["city"])) {
				$cityErr = "City is required";
			} else {
				$city = test_input($_POST["city"]);
			}

    // State
			if (empty($_POST["state"])) {
				$stateErr = "State is required";
			} else {
				$state = test_input($_POST["state"]);
			}

    // Country
			if (empty($_POST["country"])) {
				$countryErr = "Country is required";
			} else {
				$country = test_input($_POST["country"]);
			}

    // Gender
			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			} else {
				$gender = test_input($_POST["gender"]);
			}

    // Hobbies
			if (empty($_POST["hobbies"])) {
				$hobbiesErr = "At least one hobby is required";
			} else {
				$hobbies = $_POST["hobbies"];
			}

    // Language
			if (empty($_POST["language"])) {
				$languageErr = "At least one language is required";
			} else {
				$language = $_POST["language"];
			}

    // File Upload
			if ($_FILES["fileToUpload"]["size"] > 0) {
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an image
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if ($check !== false) {
					$uploadOk = 1;
				} else {
					$uploadErr = "File is not an image.";
					$uploadOk = 0;
				}
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>

		<h2>Form Validation Example</h2>
		<p><span class="error">* required field</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
			First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>">
			<span class="error">* <?php echo $firstnameErr;?></span>
			<br><br>
			Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>">
			<span class="error">* <?php echo $lastnameErr;?></span>
			<br><br>
			Username: <input type="text" name="username" value="<?php echo $username;?>">
			<span class="error">* <?php echo $usernameErr;?></span>
			<br><br>
			Email: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Password: <input type="password" name="password">
			<span class="error">* <?php echo $passwordErr;?></span>
			<br><br>
			Confirm Password: <input type="password" name="confirm_password">
			<span class="error">* <?php echo $confirm_passwordErr;?></span>
			<br><br>
			Address: <input type="text" name="address" value="<?php echo $address;?>">
			<span class="error">* <?php echo $addressErr;?></span>
			<br><br>
			City: <input type="text" name="city" value="<?php echo $city;?>">
			<span class="error">* <?php echo $cityErr;?></span>
			<br><br>
			State: <input type="text" name="state" value="<?php echo $state;?>">
			<span class="error">* <?php echo $stateErr;?></span>
			<br><br>
			Country:
			<select name="country">
				<option value="">Select</option>
				<option value="USA">USA</option>
				<option value="UK">UK</option>
				<option value="Canada">Canada</option>
				<!-- Add more countries as needed -->
			</select>
			<span class="error">* <?php echo $countryErr;?></span>
			<br><br>
			Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="other">Other
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			Hobbies:
			<input type="checkbox" name="hobbies[]" value="reading">Reading
			<input type="checkbox" name="hobbies[]" value="traveling">Traveling
			<input type="checkbox" name="hobbies[]" value="sports">Sports
			<!-- Add more hobbies as needed -->
			<span class="error">* <?php echo $hobbiesErr;?></span>
			<br><br>
			Language:
			<select name="language[]" multiple>
				<option value="english">English</option>
				<option value="spanish">Spanish</option>
				<option value="french">French</option>
				<!-- Add more languages as needed -->
			</select>
			<span class="error">* <?php echo $languageErr;?></span>
			<br><br>
			File Upload: <input type="file" name="fileToUpload" id="fileToUpload">
			<span class="error"><?php echo $uploadErr;?></span>
			<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>

		<?php
// Display submitted data
		if ($_SERVER["REQUEST_METHOD"] == "POST" && $uploadOk == 1) {
			echo "<h2>Your Input:</h2>";
			echo "First Name: " . $firstname . "<br>";
			echo "Last Name: " . $lastname . "<br>";
			echo "Username: " . $username . "<br>";
			echo "Email: " . $email . "<br>";
			echo "Address: " . $address . "<br>";
			echo "City: " . $city . "<br>";
			echo "State: " . $state . "<br>";
			echo "Country: " . $country . "<br>";
			echo "Gender: " . $gender . "<br>";
			echo "Hobbies: ";
			if (!empty($hobbies)) {
				foreach ($hobbies as $hobby) {
					echo $hobby . ", ";
				}
			}
			echo "<br>";
			echo "Language: ";
			if (!empty($language)) {
				foreach ($language as $lang) {
					echo $lang . ", ";
				}
			}
			echo "<br>";
			echo "File Name: " . basename($_FILES["fileToUpload"]["name"]);
		}
		?>

	</body>
	</html>
