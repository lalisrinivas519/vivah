<?php
include("php_include/connect.php");

if (isset($_POST['submit'])) {
    $userid = mysqli_real_escape_string($con, $_POST['userid']);
    $new = mysqli_real_escape_string($con, $_POST['new']);
    $confirm = mysqli_real_escape_string($con, $_POST['confirm']);

    // Check if the user exists
    $query = mysqli_query($con, "SELECT * FROM `user` WHERE `userid`='$userid'");

    if (mysqli_num_rows($query) > 0) {
        // Check if new password and confirm password match
        if ($new === $confirm) {
            // Update the password
            $update = mysqli_query($con, "UPDATE `user` SET `password`='$confirm' WHERE `userid`='$userid'");

            if ($update) {
                echo "<script>alert('Password update successful'); window.location.assign('login.php');</script>";
            } else {
                echo "<script>alert('Error updating password'); window.location.assign('forgot_password.php');</script>";
            }
        } else {
            echo "<script>alert('New password and confirmation do not match'); window.location.assign('forgot_password.php');</script>";
        }
    } else {
        echo "<script>alert('User ID not found'); window.location.assign('forgot_password.php');</script>";
    }
} else {
    echo "<script>alert('Invalid request'); window.location.assign('forgot_password.php');</script>";
}
?>
