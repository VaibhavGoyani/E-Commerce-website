<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (empty($_POST["old_password"]) || empty($_POST["new_password"]) || empty($_POST["confirm_password"])) {
        $error_message = "All fields are required.";
    } else {
        // Get submitted data
        $old_password = $_POST["old_password"];
        $new_password = $_POST["new_password"];
        $confirm_password = $_POST["confirm_password"];
        
        // Simulated check for old password
        $stored_password = "password123"; // Example of a stored password
        
        if ($old_password != $stored_password) {
            $error_message = "Old password is incorrect.";
        } elseif ($new_password != $confirm_password) {
            $error_message = "New password and confirm password do not match.";
        } else {
            // Password is valid, update it in the database or store it somewhere
            $success_message = "Password updated successfully.";
            // You would typically perform an update query here to update the password in your database
        }
    }
}
?>