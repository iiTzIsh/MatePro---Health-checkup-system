<?php
session_start();

include "../config.php";
    
if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $specialization = $_POST['specialization'];
        $experience = $_POST['experience'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        
        
        $sql = "INSERT INTO docp1(name , specialization, experience, email, contact) VALUES ('$name','$specialization','$experience','$email','$contact')";
    
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            header("Location: regview.php?msg=New record created successfully");
        }
         else{
            echo "Failed: " .mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="doc.css">
  <title>Doctor's Health Checkup Page</title>
</head>
<body>
  <div class="container">
    
    <div class="doctor-card"><center>
        
    <img src="Doctor.png" width="100px" height="100px">
        
      <h1>Dr. John Doe</h1>
      <section class="info">
        <h2>General Information</h2>
        <p>Specialization: Internal Medicine</p>
        <p>Experience: 15+ years</p>
      </section>
      <section class="contact">
        <h2>Contact Details</h2>
        <p>Email: john.doe@gmail.com</p>
        <p>Phone: +94-456-7890</p>
      </section>
    
      
    </div>

    <div class="doctor-card"><center>
    <img src="doc2.png" width="100px" height="100px">
    <h1>Dr. Dwayne Bravo</h1>
    <section class="info">
    <h2>General Information</h2>
        <p>Specialization: Dental Specialist</p>
        <p>Experience: 20+ years</p>
      </section>
      <section class="contact">
        <h2>Contact Details</h2>
        <p>Email: bravo.doe@gmail.com</p>
        <p>Phone: +94-658-7890</p>
      </section>

    </div>
  

    <div class="doctor-card"><center>
    <img src="doc4.png" width="100px" height="100px">
    <h1>Dr. Beckey Lil</h1>
    <section class="info">
    <h2>General Information</h2>
        <p>Specialization: Skinn Specialist</p>
        <p>Experience: 10+ years</p>
      </section>
      <section class="contact">
        <h2>Contact Details</h2>
        <p>Email: jason.ro@gmail.com</p>
        <p>Phone: +94-658-7890</p>
       
      </section>
    </div>
  </div>

  <div id="form-container">
  <h2>Create / Edit Doctor</h2>

  <form class="" action="" method="post" autocomplete="off"><br>
      <label for="name">name:</label>
      <input type="text" name="name" required value=""><br>
      <label for="specialization">Specialization:</label>
      <input type="text" name="specialization" required value=""><br>
      <label for="experience">Experience:</label>
      <input type="number" name="experience" required value=""><br>
      <label for="email">Email:</label>
      <input type="email" name="email" required value=""><br>
      <label for="phone">Phone:</label>
      <input type="text" name="phone" required value=""><br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
    <br><br>
  <a href="admin.php">
  <button>Back</button></a>
  

<script src="script.js"></script>
 </body>
  </html>