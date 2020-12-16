<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header('location:../401/index.php'); // error page
}
require_once("connect.php");

$q = mysqli_query($db, "select max(id) as id from gallery");
$arr = mysqli_fetch_array($q);
$r = extract($arr);
$id = $id + 1;
$snap = "default.jpg";
if ($_FILES["snap"]["error"] == 0) {
    $type = $_FILES["snap"]["type"];
    $temp = explode("/", $type);
    $ext = $temp[1];
    if ($ext == "jpg" || $ext == "jpeg" || $ext == "pjpeg" || $ext == "gif" || $ext == "png") {
        $snap = $id . "." . $ext;
        $newpath = "galleryimages/" . $snap;
        move_uploaded_file($_FILES["snap"]["tmp_name"], $newpath);
    }
}
$query = mysqli_query($db, "insert into gallery (id,snap) values ('$id','$snap')");
if ($query) {
    echo "Inserted";
} else {
    echo "Failed";
}