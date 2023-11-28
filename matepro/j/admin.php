
<!DOCTYPE html>
<html>
    <head>
        

        <link rel="stylesheet" type="text/css" href="adminn.css">
        <title>Admin Dashboard-Diet Planning and Health Checkup System</title>
       
    </head>
<body>

<style>
body {
  background-image: url('images/bgimge.png');
}
</style>


<h4 style="text-align: right";
    <label for="calendar">Today's date:</label>
    <input type="date" id="calendar" name="calendar"></h4>

    
    <div class="another-div">

        <div class="admin">
          <h2>Admin Dashboard</h2>
       </div>
       <div class="health">
       <h1>Health Mate Pro</h1>
       </div>
       
    </div>

         <button class="logout-button" onclick="alert('You are logged out!!')">
            <span>
            <a href="Logout.php">Logout</a>
</span>
        </button>

    <h2 class="session">Sessions</h2>
        <div class="my-div"> 
        <nav>
            <ul>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="Doctors.php">Doctors</a></li>
            <li><a href="../n/index.php">Nutritionists</a></li>
            <li><a href="../t/regview.php">Contact Manage</a></li>
         
            </ul>
        </nav>
        <script type="text/javascript">
        
            alert("you are still loaded");
            
            </script>
       
         </div>
    </body>
</html>