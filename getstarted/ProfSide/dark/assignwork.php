<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../401/index.php');
}
require_once("../../connect.php");
$id = $_GET['id'];
$query = mysqli_query($db, "update quiz set status='1' where quiz_id=$id");
if ($query) {
    echo '<script>
    location.href="assign.php";
</script>';
} else {
    echo '<script>
    alert("Not Assigned");
    location.href="assign.php";
</script>';
}