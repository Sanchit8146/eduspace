<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header('location:../401/index.php');
}
require_once("connect.php");
$id = $_GET['id'];
$query = mysqli_query($db, "update quiz set status='0' where quiz_id=$id");
if ($query) {
    echo '<script>
    location.href="quiz.php";
</script>';
} else {
    echo '<script>
    alert("Failed");
    location.href="quiz.php";
</script>';
}