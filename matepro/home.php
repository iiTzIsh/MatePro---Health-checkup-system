<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Mate Pro | Home</title> 
   <!-- font  cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/home-style.css">
   <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  

  <!--header section start-->
  <header class="header">
   
    <section class="flex">
 
       <a href="index.php" class="logo">Health Mate Pro</a>
 
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
       <a href="v/appointmentsTable.php"><i class="fas fa-clipboard-list"></i><span>appoinment list</span></a>
       <a href="t/contact_yu.php"><i class="fas fa-headset"></i><span>contact us</span></a>
       <a href="faq.php"><i class="fas fa-question"></i><span>faq</span></a>
       <br><br><br>  <br><br> 
       <a href="logout.php"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
      </nav>
    
  </div>
  <!--sidebar section end-->
   

  <section class="about">

   <div class="row">

      <div class="image">
         <img src="images/c3.png" alt="">
      </div>

      <div class="content">
         <h3>Hello! Welcome</h3>
         <p>You can set health goals, create personalized diet plans, track your nutrition, monitor health metrics, schedule checkup appointments for a holistic approach to maintaining and improving your health and well-being.
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-calendar-check"></i>
         <div>
            <h3>2</h3>
            <p>Appoinment</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-weight-scale"></i>
         <div>
            <h3>5</h3>
            <p>Diet Plan</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-dumbbell"></i>
         <div>
            <h3>3</h3>
            <p>Workout Plan</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-message"></i>
         <div>
            <h3>21</h3>
            <p>Massages</p>
         </div>
      </div>

   </div>

</section> 



</div>


  <?php include 'footer.php';?>
  





</body>
</html>