<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
  header('location:../../../401/index.php');
}
require_once("../../connect.php");
$id = $_GET["id"];
$query = mysqli_query($db, "delete from quiz where quiz_id=$id");
if ($query) {
  echo '<script>location.href="assign.php"</script>';
} else {
  echo '<script>alert("Deletion failed...");
		location.href="assign.php";</script>';
}