<?php
// Establish a database connection (update with your database credentials)
$conn = new mysqli("localhost", "root", "", "matepro");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state_province = $_POST['state_province'];
    $procedure_type = $_POST['procedure_type'];
    $appointment_datetime = $_POST['appointment_datetime'];
    $facility_used = $_POST['facility_used'];

    // Prepare and execute an SQL query to insert the data into the database
    $sql = "INSERT INTO appointments (first_name, last_name, gender, date_of_birth, mobile_number, email, address, city, state_province, procedure_type, appointment_datetime, facility_used)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $first_name, $last_name, $gender, $date_of_birth, $mobile_number, $email, $address, $city, $state_province, $procedure_type, $appointment_datetime, $facility_used);

    if ($stmt->execute()) {
        //echo "Appointment created successfully.";
        echo '<script>alert("Appointment created successfully.");</script>';
        echo '<script>location.href = "../home.php";</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
