<!DOCTYPE html>
<html>
<head>
  <!-- Your existing head content -->
</head>
<body>
  <!-- Your existing doctor cards -->

  <!-- Add a form for creating and updating doctors -->
  <div id="form-container" style="display: none;">
    <h2>Create / Edit Doctor</h2>
    <form id="doctor-form">
      <label for="name">Name:</label>
      <input type="text" id="name" required><br>
      <label for="specialization">Specialization:</label>
      <input type="text" id="specialization" required><br>
      <label for="experience">Experience:</label>
      <input type="number" id="experience" required><br>
      <label for="email">Email:</label>
      <input type="email" id="email" required><br>
      <label for="phone">Phone:</label>
      <input type="text" id="phone" required><br>
      <label for="address">Address:</label>
      <input type="text" id="address" required><br>
      <button id="submit-button">Submit</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>