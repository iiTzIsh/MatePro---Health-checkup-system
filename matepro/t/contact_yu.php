<?php
session_start();
include "../config.php";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contact_details(name,email,message) VALUES('$name','$email','$message')";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: contact_yu.php?msg=New record created successfully");
}
else{
    echo "Failed: ".mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us</title>
	<link rel="stylesheet" href="styles.css">
    
	
</head>
<body>

<img src="fitness.jpg" alt="fitness" style="width:100%">
<form class="" action="" method="post" autocomplete="off"><br>
      <label for="name">name:</label>
      <input type="text" name="name" required value=""><br>
      <label for="email">email:</label>
      <input type="text" name="email" required value=""><br>
      <label for="message">message:</label>
      <input type="text" name="message" required value=""><br>
      <button type="submit" name="submit">Submit</button>
    </form>
</div>
<script src="scripts.js"></  script>
</body>
</html>