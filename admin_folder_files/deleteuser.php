<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header('location:../401/index.php');
}
require_once("connect.php");
$id = $_GET['id'];
$del = mysqli_query($db, "select * from appuser where uniq_id=$id");
$row = mysqli_fetch_array($del);
$img = $row["idproof"];
unlink('idproof/' . $img);
$query = mysqli_query($db, "delete from appuser where uniq_id=$id");
if ($query) {
    echo '<script>
    location.href="index.php";
</script>';
} else {
    echo '<script>
    alert("Not Deleted");
    location.href="index.php";
</script>';
}