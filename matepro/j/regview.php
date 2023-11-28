<?php
include "../config.php";
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- edit & delete button -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <style>
        .navbar h2{
            text-align: center;
            font-family: sans-serif;
        }
        .container{
            background-color: aqua;
            width: 850px;
            height: 300px;
            margin-left: 350px;
            text-align: center;
        }
        th{
            background-color: blueviolet;
            width: 40px;
        }
        tr{
            background-color: skyblue;
        }
        a{
            background-color: aliceblue;
            border-radius: 0px;
        }
    </style>
</head>

<body>
  <nav class="navbar">
      <h2> Doctor Details</h2>
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="Doctors.php" class="btn btn-dark mb-3">Add New</a>
      
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">specialization</th>
          <th scope="col">experience</th> 
          <th scope="col">email</th>
          <th scope="col">phone</th>     
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `docp1`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["specialization"] ?></td>
            <td><?php echo $row["experience"] ?></td>
            <td><?php echo $row["email"] ?></td> 
            <td><?php echo $row["contact"] ?></td>
            <td>
              <a href="edit.php?ID=<?php echo $row["ID"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?ID=<?php echo $row["ID"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <a href="admin.php">
  <center><button>Back</button></center></a>
</body>

</html>