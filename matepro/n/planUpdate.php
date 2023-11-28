<?php
    include '../config.php';

    $id = $_GET['id'];
    setcookie("plan_id", $id, time() + (86400), "/");

    $sql = "SELECT * FROM plan WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $health = $_POST['health'];
        $height = $_POST['height'];
        $dietgoalt = $_POST['dietgoals'];

        $sql = "UPDATE plan SET name='$name', weight='$weight', height='$height', health='$health', dietgoals='$dietgoalt' WHERE id=$_COOKIE[plan_id]";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: planView.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="bg">
    <header>
        <div class="header">
            <div class="innerheader">
                <h1>Diet Planning and Health Check-up System</h1>
            </div>
        </div>
    </header>

    <div class="content-box">
        <h1>Personal Details</h1>
        <form action="planUpdate.php" method="post">
            <div class="form-box">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value=<?php echo $row["name"]; ?> required>
            </div>
            <div class="form-box">
                <label for="weight">Weight (in kilograms):</label>
                <input type="number" id="weight" name="weight" value=<?php echo $row["weight"]; ?> required>
            </div>
            <div class="form-box">
                <label for="height">Height (in centimeters):</label>
                <input type="number" id="height" name="height" value=<?php echo $row["height"]; ?> required>
            </div>
            <div class="form-box">
                <label for="health">Health details:</label>
                <textarea id="health" name="health" rows="4" value=<?php echo $row["health"]; ?> required></textarea>
            </div>
            <div class="form-box">
                <label for="diet-goals">Diet goals:</label>
                <textarea id="diet-goals" name="diet-goals" rows="4" value=<?php echo $row["dietgoals"]; ?> required></textarea>
            </div>
            <div class="form-box">
                <button type="submit" name="submit">update</button>
            </div>
        </form>
    </div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meal Calendar</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: left;
            }
        </style>
    <div class="content-box">
        <h1>Meal Calendar</h1>
        <table>
            <tr>
                <th>Date</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <th>Snack</th>
                <th>Water</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Friday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- Add rows for other days as needed -->
        </table>
    </div>

    <div class="content-box">
        <h1>Meal Time Durations</h1>
        <div class="meal-time">
            <strong>Breakfast:</strong> 7:00 AM - 8:00 AM
        </div>
        <div class="meal-time">
            <strong>Mid-Morning Snack:</strong> (around 10:00 AM)
        </div>
        <div class="meal-time">
            <strong>Lunch:</strong> 12:30 PM - 1:30 PM
        </div>
    
        <div class="meal-time">
            <strong>Afternoon Snack:</strong>(around 3.00 PM):
        </div>
    
        <div class="meal-time">
            <strong>Dinner:</strong> 6:30 PM - 7:30 PM
        </div>
    
        <div class="meal-time">
            <strong>Evening Snack:</strong> (optional, around 8:30 PM - 9:00 PM)
        </div>
    
        <div class="meal-time">
            <strong>Water:</strong>2l per day
        </div>
        <!-- Add other meal times as needed -->
    </div>
    
</body>

</html>