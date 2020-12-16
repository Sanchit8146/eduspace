<?php
//session_start();

require_once("connect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];


$query = "select * from appuser where email = '$email' AND pwd = '$password' AND user_type='$usertype'";

$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);

//Student Login
if ($usertype == 'S') {
    if (mysqli_num_rows($results)) {
        if ($row["status"] == 0) {
            echo '<script>alert("Wait till your profile gets verified!!!");
                    location.href="login.php";</script>';
        } else {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['uniqID'] = $row['uniq_id'];
            $_SESSION['firstName'] = $row['first_name'];
            $_SESSION['lastName'] = $row['last_name'];
            header('location: StudentSide/dark/index.php');
        }
    } else {
        echo '<script>alert("Wrong email/Password combination for Student account. Please try again.");
        location.href="login.php";</script>';
    }
}

//Prof Login
elseif ($usertype == 'P') {
    if (mysqli_num_rows($results)) {
        if ($row["status"] == 0) {
            echo '<script>alert("Wait till your profile gets verified!!!");
                location.href="login.php";</script>';
        } else {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['uniqid'] = $row['uniq_id'];
            $_SESSION['firstName'] = $row['first_name'];
            $_SESSION['lastName'] = $row['last_name'];
            header('location: ProfSide/dark/index.php');
        }
    } else {
        echo '<script>alert("Wrong email/Password combination for Professor account. Please try again.");
         location.href="login.php";</script>';
    }
}