<?php
// Establish a database connection (update with your credentials)
$conn = new mysqli("localhost", "root", "", "matepro");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete operation
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $delete_sql = "DELETE FROM appointments WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $delete_id);

    if ($delete_stmt->execute()) {
        //echo '<script>alert("Appointment deleted successfully.");</script>';
        header('Location: appointmentsTable.php');
        exit; // Ensure no further code execution
    } else {
        echo '<script>alert("Error deleting appointment: ' . $delete_stmt->error . '");</script>';
    }

    $delete_stmt->close();
}
// Retrieve appointments from the database
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Doctor Appointments</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="tableStyle.css">
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Doctor Appointments</h2>
                    </div>
                </div>
            </div>
            <table class="zui-table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State / Province</th>
                        <th>Procedure Type</th>
                        <th>Appointment Date & Time</th>
                        <th>Facility Used</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <?php
                    // PHP code to populate the table with appointment data
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
                        echo '<td>
                                  <a href="edit_appointment.php?id=' . $row["id"] . '"><i class="fas fa-edit"></i> Edit</a> | 
                                  <a href="javascript:void(0);" onclick="confirmDelete(' . $row["id"] . ');"><i class="fas fa-trash-alt"></i> Delete</a>
                              </td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this appointment?")) {
                window.location.href = 'appointmentsTable.php?delete_id=' + id;
            }
        }
    </script>
</body>

</html>