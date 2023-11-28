
<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

//Fetch user details from the database
$email = $_SESSION['user_email'];
$sql = "SELECT * FROM user_form WHERE email = '$email'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fname = $row['fname'];
    $lname = $row['lname'];
    $birthday = $row['birthday'];
    $gender = $row['gender'];
    $email = $row['email'];
    $pnumber = $row['pnumber'];
} else {
    // Handle user not found scenario
    $fname = '';
    $lname = '';
    $birthday = '';
    $gender = '';
    $email = '';
    $pnumber = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home-style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   

</head>
<body>

  <!--header section start-->
  <header class="header">
   
    <section class="flex">
 
       <a href="home.html" class="logo">Health Mate Pro</a>
 
       <form class="search-form">
          <input type="text" name="search_box" required placeholder="search appoinment.." >
          <button type="submit" class="fas fa-search"></button>
       </form>
 
       <div class="icons">
          <div class="fas fa-bars"></div>
          <div class="fas fa-search"></div>
          <div class="fas fa-user"></div>
         
       </div>

    </section>
 
 </header>  
  <!--header section end-->



  <!--sidebar section start-->
  <div class="side-bar">

  
 
    <div class="profile">
       <img src="images/profile.png" class="image" alt="">
       <h3 class="name">Ishara Madusanka</h3>
       <a href="user_profile.php" class="btn">view profile</a>
    </div>
 
    <nav class="navbar">
       <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
       <a href="v/appointmentForm.html"><i class="fas fa-calendar-check"></i><span>appoinment</span></a>
       <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
       <a href="faq.php"><i class="fas fa-question"></i><span>faq</span></a>
       <br><br><br>  <br><br><br> <br><br><br> 
       <a href="logout.php"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
      </nav>
      
  </div>
  <!--sidebar section end-->


    <div class="container">
        <div class="content">
            
            <h1 style="font-size: 40px;"> User Profile Information</h1>
            <div class="profile-details">
                
                <table class="table" >
                    <tr>
                        <th >Full Name:</th>
                        <td><?php echo $fname . ' ' . $lname; ?></td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td><?php echo $birthday; ?></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?php echo $gender; ?></td>
                    </tr>
                    <tr>
                        <th>E-mail:</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number:</th>
                        <td><?php echo $pnumber; ?></td>
                    </tr>
                </table>
            </div >
            <a style="margin-top: 20px;" href="editprofile.php" class="btn">Edit Profile</a>

            <a style="margin-top: 20px;" href="deleteprofile.php" onclick="return confirm('Are your sure you want to delet your account ?');" class="btn">Delete Profile</a>
        </div>
    </div>
    

</body>
</html>
