<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
	header('location:../../../../401/index.php');
}
require_once("../../../connect.php");
$quizid = $_POST['quizid'];
$profid = $_SESSION['uniqid'];
$quizname = $_POST['quizname'];
$quizdescription = $_POST['description'];
$duedate = $_POST['duedate'];

$quiz_check_query = "Select * from quiz where quizname = '$quizname' and prof_id='$profid' LIMIT 1";
$results = mysqli_query($db, $quiz_check_query);
$user = mysqli_fetch_assoc($results);
if ($user) {
	if ($user["quizname"] === $quizname) {
		echo '<script>alert("This quiz name is already created");
		window.history.back();</script>';
	}
} else {
	$query = "Insert into quiz values ('$quizid', '$quizname','$profid','$quizdescription','$duedate','0')";
	mysqli_query($db, $query);

	$_SESSION['quizid'] = $quizid;
	$_SESSION['quizname'] = $quizname;
	header('location: addQType.php');
	mysqli_close($db);
}