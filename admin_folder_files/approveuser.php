<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header('location:../401/index.php');
}
require_once("connect.php");
$id = $_GET['id'];
$query = mysqli_query($db, "update appuser set status='1' where uniq_id=$id");
if ($query) {
    echo '<script>
    location.href="index.php";
</script>';
} else {
    echo '<script>
    alert("Failed");
    location.href="index.php";
</script>';
}