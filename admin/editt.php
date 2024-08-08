<?php
// Including header and database connection
include "header.php";
include "db.php";

// Checking if ID is set in the URL
if(isset($_GET['id'])){
    // Getting the ID from the URL
    $getid = $_GET['id'];

    // Retrieving user data from the users table
    $sql = "SELECT * FROM users WHERE id = '$getid'";
    $result = mysqli_query($conn, $sql);

    // Checking if user data exists
    if($result->num_rows > 0){
        // Fetching user data
        while($row = mysqli_fetch_assoc($result)){
            // Retrieving user meta data from the user_meta table
            $meta_sql = "SELECT * FROM user_meta WHERE id = '$getid'";
            $meta_result = mysqli_query($conn, $meta_sql);
            $meta_row = mysqli_fetch_assoc($meta_result);

            // Extracting data for easier access
            $gender = $meta_row["gender"];
            $hobbies = explode('.', $meta_row["hobbies"]);
            $language = explode('.', $meta_row["language"]);  
            $file = $meta_row['filetoupload'];
            ?>

            <!-- HTML form for editing user information -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">EDIT USER</h4>
                                <!-- Form fields for name and email -->
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="example-text-input" name="name" value="<?php echo $row['name']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" id="example-email-input" name="email" value="<?php echo $row['email']; ?>">
                                    </div>
                                </div>
                                <!-- Form fields for gender -->
                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-4">Gender</h5>
                                    <div class="custom-control custom-radio custom-control-right">
                                        <input type="radio" id="male" name="gender" class="custom-control-input"  value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>>
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-right">
                                        <input type="radio" id="female" name="gender" class="custom-control-input"  value="female"<?php echo ($gender == 'female') ? 'checked' : ''; ?>>
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                                <!-- Form fields for hobbies -->
                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-4">Hobbies</h5>
                                    <?php
                                    // Array of available hobbies
                                    $available_hobbies = ['reading', 'driving', 'swimming', 'writing', 'travelling', 'learning'];
                                    // Displaying checkboxes for each hobby
                                    foreach($available_hobbies as $hobby) {
                                        ?>
                                        <div class="custom-control custom-checkbox custom-control-right">
                                            <input type="checkbox" class="custom-control-input" id="<?php echo $hobby; ?>" value="<?php echo $hobby; ?>" <?php echo (in_array($hobby, $hobbies)) ? 'checked' : ''; ?> name="hobbies[]">
                                            <label class="custom-control-label mr-2" for="<?php echo $hobby; ?>"><?php echo ucfirst($hobby); ?></label>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <!-- Form fields for languages -->
                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-4">Language</h5>
                                    <?php
                                    // Array of available languages
                                    $available_languages = ['english', 'hindi', 'gujarati', 'german', 'tamil', 'spanish'];
                                    // Displaying checkboxes for each language
                                    foreach($available_languages as $lang) {
                                        ?>
                                        <div class="custom-control custom-checkbox custom-control-right">
                                            <input type="checkbox" class="custom-control-input" id="<?php echo $lang; ?>" value="<?php echo $lang; ?>" <?php echo (in_array($lang, $language)) ? 'checked' : ''; ?> name="language[]">
                                            <label class="custom-control-label mr-2" for="<?php echo $lang; ?>"><?php echo ucfirst($lang); ?></label>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <!-- Form field for file upload -->
                                <div class="mt-4">
                                    <h4 class="card-title">File browser</h4>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="filetoupload"  name="filetoupload">
                                        <label class="custom-file-label" for="filetoupload">Choose file</label>
                                        <!-- Displaying uploaded image if available -->
                                        <?php if(!empty($file)) { ?>
                                            <img src="<?php echo $file; ?>" alt="" width="50">
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Submit button -->
                                <div class="form-group row mt-3">
                                    <div class="col-md-10">
                                        <input type="submit" name="submit" value="Update">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
        }
    }
}

// Including footer
include "footer.php";
?>
