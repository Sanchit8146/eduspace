<?php
session_start();
if (!isset($_SESSION['firstName'])) {
  header('location:../401/index.php');
}
require_once("connect.php");
$s_id = $_GET["id"];
$query = mysqli_query($db, "delete from session where s_id=$s_id");
if ($query) {
  echo '<script>
		location.href="showsession.php"</script>';
} else {
  echo '<script>alert("Deletion failed...");
		location.href="showsession.php";</script>';
}