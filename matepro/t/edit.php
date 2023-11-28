<?php
include "../config.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`message`='$message' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: regview.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
        .container{
          background-color: skyblue;
            margin-top: 150px;
            padding-left: 75px;
            width: 950px;
        }
        .container ,.text{
            text-align: center;
        }
    </style>



  <title>PHP CRUD Application</title><br>
</head>

<body>

  <div class="container">
    <div class="text">
      <h3>Edit User Information</h3><br><br>
    </div>

    <?php
    $sql = "SELECT * FROM `contact_details` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container2">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
          </div>
        <div class="col">
            <label class="form-label">message:</label>
            <input type="text" class="form-control" name="message" value="<?php echo $row['message'] ?>">
          </div>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="contact_yu.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>


</body>

</html>