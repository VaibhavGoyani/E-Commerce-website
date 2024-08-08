<form method="post" action="submit_form.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <select class="form-control" id="state" name="state">
            <option value="">Select State</option>
            <!-- Add 10 state options here -->
        </select>
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" id="country" name="country">
            <option value="">Select Country</option>
            <!-- Add 10 country options here -->
        </select>
    </div>
    <div class="form-group">
        <label>Gender</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="female">Female</label>
        </div>
    </div>
    <div class="form-group">
        <label>Hobbies</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="reading" name="hobbies[]" value="reading">
            <label class="form-check-label" for="reading">Reading</label>
        </div>
        <!-- Add 4 more hobbies checkboxes here -->
    </div>
    <div class="form-group">
        <label for="language">Language</label>
        <select class="form-control" id="language" name="language[]" multiple>
            <option value="english" <?php echo ($user_meta['language'] == 'english') ? 'selected' : ''; ?>>English</option>
                                    <option value="hindi" <?php echo ($user_meta['language'] == 'hindi') ? 'selected' : ''; ?>>Hindi</option>
                                    <option value="gujarati" <?php echo ($user_meta['language'] == 'gujarati') ? 'selected' : ''; ?>>Gujarati</option>
                                    <option value="german" <?php echo ($user_meta['language'] == 'germen') ? 'selected' : ''; ?>>German</option>
                                    <option value="tamil" <?php echo ($user_meta['language'] == 'tamil') ? 'selected' : ''; ?>>Tamil</option>
                                    <option value="spanish" <?php echo ($user_meta['language'] == 'spanish') ? 'selected' : ''; ?>>Spanish</option>
        </select>
    </div>
    <div class="form-group">
        <label for="profile_photo">Profile Photo</label>
        <input type="file" class="form-control-file" id="profile_photo" name="profile_photo">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
