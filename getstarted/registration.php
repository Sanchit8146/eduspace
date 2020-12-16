<?php


require_once("connect.php");


//register users

$uniqid = $_POST['uniqid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$usertype = $_POST['usertype'];
$snap = "default.jpg";
if ($_FILES["snap"]["error"] == 0) {
	$type = $_FILES["snap"]["type"];
	$temp = explode("/", $type);
	$ext = $temp[1];
	if ($ext == "jpg" || $ext == "jpeg" || $ext == "pjpeg" || $ext == "gif" || $ext == "png") {
		$snap = $uniqid . "." . $ext;
		$newpath = "../admin_folder_files/idproof/" . $snap;
		move_uploaded_file($_FILES["snap"]["tmp_name"], $newpath);
	}
}
//check database for existing user with same email
$user_check_query = "Select * from appuser where email = '$email' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

//check database for existing user with same uniq id
$user_check_query2 = "Select * from appuser where uniq_id = '$uniqid' LIMIT 1";
$results2 = mysqli_query($db, $user_check_query2);
$user2 = mysqli_fetch_assoc($results2);

if ($user2) {
	if ($user2["uniq_id"] === $uniqid) {
		echo '<script>alert("This Unique Id is already registered!!!");
			window.history.back();</script>';
	}
} elseif ($user) {
	if (strtoupper($user["email"]) === strtoupper($email)) {
		echo '<script>alert("Email Already Registered!!!");
			 window.history.back();</script>';
	}
} else {
	//Register user if no errors

	if (mysqli_num_rows($results) == 0 & mysqli_num_rows($results2) == 0) {
		//$password = md5($password) ; //This will encrypt password

		$query = "insert into appuser (uniq_id , first_name, last_name, email, pwd, user_type,idproof ) 
		    		values ( '$uniqid' , '$firstname', '$lastname', '$email','$password', '$usertype','$snap' )";

		mysqli_query($db, $query);
		if ($query) {
			echo '<script>alert("Registered!!!! Wait till your profile gets verified..");
			location.href="login.php";</script>';
		} else {
			echo '<script>alert("Not Registered!!!!");
			location.href="register.php";</script>';
		}
	}
}