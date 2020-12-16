<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
	header('location:../../../../401/index.php');
}
require_once("../../../connect.php");
$quizid = (int)$_SESSION["quizid"];
$quesid = $_POST['quesid'];
$aid = $_POST['aid'];
$aid1 = $_POST['aid'] + 1;
$aid2 = $_POST['aid'] + 2;
$aid3 = $_POST['aid'] + 3;
$question = $_POST['question'];
$answerA = $_POST['answerA'];
$answerB = $_POST['answerB'];
$answerC = $_POST['answerC'];
$answerD = $_POST['answerD'];
$answerid = $_POST['correctanswer'];
//$point = (float)$_POST['point'];
$question_check_query = "Select * from questionset where question = '$question' and quiz_id='$quizid' LIMIT 1";
$results = mysqli_query($db, $question_check_query);
$user = mysqli_fetch_assoc($results);
if ($user) {
	if ($user["question"] === $question) {
		echo '<script>alert("This question is already created");window.history.back();</script>';
	}
} else {
	$query =
		"insert into questionset(quiz_id,ques_id,question,answer_id) values ('$quizid','$quesid','$question','$answerid')";
	mysqli_query($db, $query);
	$query2 = "insert into answerset(quiz_id,a_id,answer,ans_id) values ('$quizid','$aid','$answerA','$quesid'),('$quizid','$aid1','$answerB','$quesid'),('$quizid','$aid2','$answerC','$quesid'),('$quizid','$aid3','$answerD','$quesid')";
	mysqli_query($db, $query2);
	header('location: addQType.php');
	mysqli_close($db);
}