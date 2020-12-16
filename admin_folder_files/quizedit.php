<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header('location:../401/index.php');
}
require_once('connect.php');
if (isset($_POST['id'])) {
    $value = $_POST['value'];
    $column = $_POST['column'];
    $id = $_POST['id'];
    $sql = mysqli_query($db, "update quiz set $column='$value' where md5(quiz_id)='$id' limit 1");
    if ($sql) {
        echo "Updated";
    } else {
        echo "Failed";
    }
}