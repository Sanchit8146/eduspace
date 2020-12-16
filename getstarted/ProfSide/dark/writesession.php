<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../401/index.php');
}
require_once("../../connect.php");
$s_id = $_POST['s_id'];
$profid = $_SESSION['uniqid'];
$cname = $_POST['cname'];
if (substr($_POST['link'], 0, 4) == 'http') {
    $link = $_POST['link'];
} elseif (substr($_POST['link'], 0, 2) == '//') {
    $link = 'https:' . $_POST['link'];
} elseif (substr($_POST['link'], 0, 2) != '//' && substr($_POST['link'], 0, 1) == '/') {
    $link = 'https:/' . $_POST['link'];
} else {
    $link = 'https://' . $_POST['link'];
}
$date = $_POST['date'];
$time = $_POST['time'];
$quiz_check_query = "Select * from session where link = '$link' and prof_id='$profid' LIMIT 1";
$results = mysqli_query($db, $quiz_check_query);
$user = mysqli_fetch_assoc($results);
if ($user) {
    if ($user["link"] === $link) {
        echo '<script>alert("This link is already created");
		window.history.back();</script>';
    }
} else {
    $query = "insert into session values ('$s_id','$profid','$cname', '$link','$date','$time')";
    mysqli_query($db, $query);
    echo ' <script>alert("Link added Successfully");
window.location.href = "showsession.php";
</script>';
    mysqli_close($db);
}