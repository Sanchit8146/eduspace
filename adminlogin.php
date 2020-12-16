<?php
require_once("getstarted/connect.php");
$email = $_POST['email'];
$password = $_POST['password'];


$query = mysqli_query($db, "select * from adminlogin where email = '$email' AND password = '$password'");
$row = mysqli_fetch_array($query);
extract($row);
if (mysqli_num_rows($query)) {
    session_start();
    $_SESSION['firstName'] = $first_name;
    $_SESSION['lastName'] = $last_name;
    header('location: admin_folder_files/index.php');
} else {
    echo '<script>alert("Wrong email/Password combination with Admin account. Please try again.");
        location.href="admin.php";</script>';
}