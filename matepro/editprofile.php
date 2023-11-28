<?php
     session_start();
     include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Mate Pro</title>
    
    
    <link rel="stylesheet" href="css/user-info.css">
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
       <a href="appoinment.php"><i class="fas fa-calendar-check"></i><span>appoinment</span></a>
       <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
       <a href="faq.php"><i class="fas fa-question"></i><span>faq</span></a>
       <br><br><br>  <br><br><br> <br><br><br> 
       <a href="logout.php"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
      </nav>
     
 </div>
 <!--sidebar section end-->
   
    

    <div class="Userinfo">
    <?php
        // Check if the user is logged in
        if(isset($_SESSION['user_email'])) {
            $email = $_SESSION['user_email'];
            $sql = "SELECT * FROM user_form WHERE email = '$email'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Handle form submission
                    
                    // Get the updated values from the form
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $nic = $_POST['nic'];
                    $birthday = $_POST['birthday'];
                    $gender = $_POST['gender'];
                    $pnumber = $_POST['pnumber'];
                    
                    // Update the user's information in the database
                    $updateSql = "UPDATE user_form SET fname='$fname', lname='$lname',nic='$nic', birthday='$birthday', gender='$gender', pnumber='$pnumber' WHERE email='$email'";
                    $updateResult = $conn->query($updateSql);
                    
                    if($updateResult) {
                        // If the update was successful, display a success message
                        echo '<p class="success-msg">User information updated successfully!</p>';
                        
                        // Update the displayed values
                        $row['fname'] = $fname;
                        $row['lname'] = $lname;
                        $row['nic'] = $nic;
                        $row['birthday'] = $birthday;
                        $row['gender'] = $gender;
                        $row['pnumber'] = $pnumber;
                    } else {
                        // If the update failed, display an error message
                        echo '<p class="error-msg">Failed to update user information. Please try again.</p>';
                    }
                }
                
                // Display the user information and form
                echo '<h1>USER INFORMATION</h1><br>';
                echo '<table>';
                echo '<tr><td>Full Name :</td><td>'.$row['fname'].' '.$row['lname'].'</td></tr>';
                echo '<tr><td>NIC :</td><td>'.$row['nic'].'</td></tr>';
                echo '<tr><td>Date of Birth :</td><td>'.$row['birthday'].'</td></tr>';
                echo '<tr><td>Gender :</td><td>'.$row['gender'].'</td></tr>';
                echo '<tr><td>E-mail :</td><td>'.$row['email'].'</td></tr>';
                echo '<tr><td>Phone Number :</td><td>'.$row['pnumber'].'</td></tr>';
                echo '</table><br>';
                
                // Display the form for updating user information
                
                echo '<form method="post" action="">';
                echo '<input type="text" name="fname" value="'.$row['fname'].'" placeholder="First Name" required>'.'</br>';
                echo '<input type="text" name="lname" value="'.$row['lname'].'" placeholder="Last Name" required>'.'</br>';
                echo '<input type="text" name="nic" value="'.$row['nic'].'" placeholder="NIC" required>'.'</br>';
                echo '<input type="date" name="birthday" value="'.$row['birthday'].'" placeholder="Date of Birth" required>'.'</br>';
                echo '<input type="radio" name="gender" value="male" '.($row['gender'] === 'male' ? 'checked' : '').'> Male'.'</br>';
                echo '<input type="radio" name="gender" value="female" '.($row['gender'] === 'female' ? 'checked' : '').'> Female'.'</br>';
                echo '<input type="tel" name="pnumber" value="'.$row['pnumber'].'" placeholder="Phone Number" required>'.'</br>';
                echo '<input type="submit" name="submit" value="Update Information">';
                echo '</form>';
            } else {
                echo "No results"; 
            }
        } else {
            echo "User not logged in.";
        }
    ?>
</div>

      
</body>
</html>
