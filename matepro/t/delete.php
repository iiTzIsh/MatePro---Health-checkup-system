<?php
include "../config.php";

$id = $_GET["id"];
$sql = "DELETE FROM `contact_details` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: contact_yu.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

?>