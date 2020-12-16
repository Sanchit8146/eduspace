<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../401/index.php');
}
require_once("../../connect.php");
$s_id = $_POST['s_id'];
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

$query = "update session set name='$cname',link= '$link',date='$date',time='$time' where s_id=$s_id";
mysqli_query($db, $query);
echo ' <script>alert("Updated Successfully");
window.location.href = "showsession.php";
</script>';
mysqli_close($db);