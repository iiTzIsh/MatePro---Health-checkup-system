<?php

    include '../config.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $health = $_POST['health'];
        $dietGoals = $_POST['diet-goals'];
        
        $sql = "INSERT INTO plan (name, weight, height, health, dietgoals) VALUES ('$name', '$weight', '$height', '$health', '$dietGoals')";

        try {
            mysqli_query($conn, $sql);
            header('location: planView.php');
        } catch (mysqli_sql_exception $e) {
            echo "Data Send Error $e";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet plan</title>
    <link rel="stylesheet" href="style.css">
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
        <form action="index.php" method="post">
            <div class="form-box">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-box">
                <label for="weight">Weight (in kilograms):</label>
                <input type="number" id="weight" name="weight" required>
            </div>
            <div class="form-box">
                <label for="height">Height (in centimeters):</label>
                <input type="number" id="height" name="height" required>
            </div>
            <div class="form-box">
                <label for="health">Health details:</label>
                <textarea id="health" name="health" rows="4" required></textarea>
            </div>
            <div class="form-box">
                <label for="diet-goals">Diet goals:</label>
                <textarea id="diet-goals" name="diet-goals" rows="4" required></textarea>
            </div>
            <div class="form-box">
                <button type="submit" name="submit">submit</button>
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
