<?php
// Establish a database connection (update with your credentials)
$conn = new mysqli("localhost", "root", "", "matepro");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];

    // Retrieve appointment details from the database
    $sql = "SELECT * FROM appointments WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $appointment_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Check if the form is submitted for updating
        if (isset($_POST['update'])) {
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

            $update_sql = "UPDATE appointments 
                           SET first_name=?, last_name=?, gender=?, date_of_birth=?, mobile_number=?, email=?, address=?, city=?, state_province=?, procedure_type=?, appointment_datetime=?, facility_used=?
                           WHERE id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ssssssssssssi", $first_name, $last_name, $gender, $date_of_birth, $mobile_number, $email, $address, $city, $state_province, $procedure_type, $appointment_datetime, $facility_used, $appointment_id);

            if ($update_stmt->execute()) {
                echo '<script>alert("Appointment Updated successfully.");</script>';
                echo '<script>location.href = "appointmentsTable.php";</script>';
            } else {
                echo "Error updating appointment: " . $update_stmt->error;
            }

            $update_stmt->close();
        }
    }
} else {
    echo "Invalid appointment ID.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <title>Edit Appointment</title>
</head>

<body>
    <div class="container">
        <header>Edit Appointment</header>

        <form method="post">
            <div class="form first">
                <div class="details personal">

                    <div class="fields">
                        <div class="input-field">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" required>
                                <option disabled>Select gender</option>
                                <option value="Male" <?php if ($row['gender'] == 'Male')
                                    echo 'selected'; ?>>Male</option>
                                <option value="Female" <?php if ($row['gender'] == 'Female')
                                    echo 'selected'; ?>>Female
                                </option>
                                <option value="Others" <?php if ($row['gender'] == 'Others')
                                    echo 'selected'; ?>>Others
                                </option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>"
                                required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile_number" value="<?php echo $row['mobile_number']; ?>"
                                required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>City</label>
                            <input type="text" name="city" value="<?php echo $row['city']; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>State / Province</label>
                            <input type="text" name="state_province" value="<?php echo $row['state_province']; ?>"
                                required>
                        </div>

                        <div class="input-field">
                            <label for="procedure_type">Which procedure for?</label>
                            <select name="procedure_type" id="procedure_type" required>
                                <option disabled>Select procedure</option>
                                <option value="Medical Examination" <?php if ($row['procedure_type'] == 'Medical Examination')
                                    echo 'selected'; ?>>Medical Examination</option>
                                <option value="Doctor Check" <?php if ($row['procedure_type'] == 'Doctor Check')
                                    echo 'selected'; ?>>Doctor Check</option>
                                <option value="Result Analysis" <?php if ($row['procedure_type'] == 'Result Analysis')
                                    echo 'selected'; ?>>Result Analysis</option>
                                <option value="Check-up" <?php if ($row['procedure_type'] == 'Check-up')
                                    echo 'selected'; ?>>Check-up</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Prefer Appointment Date & Time </label>
                            <input type="datetime-local" name="appointment_datetime"
                                value="<?php echo $row['appointment_datetime']; ?>" required>
                        </div>
                        <div class="input-field">
                            <label for="facility_used">Applied our facility before?</label>
                            <select name="facility_used" id="facility_used" required>
                                <option disabled>Select option</option>
                                <option value="Yes" <?php if ($row['facility_used'] == 'Yes')
                                    echo 'selected'; ?>>Yes
                                </option>
                                <option value="No" <?php if ($row['facility_used'] == 'No')
                                    echo 'selected'; ?>>No
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="sumbit" type="submit" name="update">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
    </div>
    </div>
    </form>
    </div>

    <script src="script.js"></script>

</body>

</html>