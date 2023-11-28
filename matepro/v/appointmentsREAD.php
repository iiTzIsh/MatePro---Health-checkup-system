<?php
// Establish a database connection (update with your credentials)
$conn = new mysqli("localhost", "root", "", "matepro");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve appointments from the database
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

// Display appointments in the HTML table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["date_of_birth"] . "</td>";
        echo "<td>" . $row["mobile_number"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["state_province"] . "</td>";
        echo "<td>" . $row["procedure_type"] . "</td>";
        echo "<td>" . $row["appointment_datetime"] . "</td>";
        echo "<td>" . $row["facility_used"] . "</td>";
        echo '<td><a href="edit_appointment.php?id=' . $row["id"] . '">Edit</a> | <a href="delete_appointment.php?id=' . $row["id"] . '">Delete</a></td>';
        echo "</tr>";
    }
} else {
    echo "No appointments found.";
}

$conn->close();
?>
