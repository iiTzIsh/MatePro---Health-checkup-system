<?php
include "../config.php";
$Id = $_GET["ID"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $specialization = $_POST['specialization'];
  $experience = $_POST['experience'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $sql = "UPDATE `Doctors` SET `name`='$name',`specialization`='$specialization',`experience`='$experience',`email`='$email',`contact`='$contact' WHERE ID = $ID";

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
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    $sql = "SELECT * FROM `Doctors` WHERE ID = $Id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container2">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">specialization:</label>
            <input type="text" class="form-control" name="specialization" value="<?php echo $row['specialization'] ?>">
          </div>

          <div class="col">
            <label class="form-label">experience:</label>
            <input type="text" class="form-control" name="experience" value="<?php echo $row['experience'] ?>">
          </div>

           <div class="col">
            <label class="form-label">email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
          </div>

           <div class="col">
            <label class="form-label">contact:</label>
            <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'] ?>">
          </div>

        </div>
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="Doctors.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>