<?php
include "header.php";
include "db.php";

$id = $_GET["ids"];

$sql = "DELETE FROM users WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    $user_meta = "DELETE FROM user_meta WHERE user_id = '$id'";
    if (mysqli_query($conn, $user_meta)) {
            header("Location: contacts-list.php");
    } else {
        echo "Error deleting data from the user_meta table: " . mysqli_error($conn);
    }

} else {
    echo "Error deleting data from the users table: " . mysqli_error($conn);
}
	include "footer.php";
?>