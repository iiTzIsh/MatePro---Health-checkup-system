<?php
include "../config.php";

$id = $_GET["ID"];
$sql = "DELETE FROM `docp1` WHERE ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Doctors.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

?>