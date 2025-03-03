<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_registration";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fName'] ?? "";
    $middle_name = $_POST['mName'] ?? "";
    $last_name = $_POST['lName'] ?? "";
    $birthdate = $_POST['birthdate'] ?? "";
    $student_id = $_POST['studentID'] ?? "";
    $street_address = $_POST['street'] ?? "";
    $city = $_POST['city'] ?? "";
    $state_province = $_POST['state'] ?? "";
    $country = $_POST['country'] ?? "";
    $zip_code = $_POST['zip'] ?? "";
    $email = $_POST['email'] ?? "";
    $strand = $_POST['strand'] ?? "";
    $level = $_POST['level'] ?? "";

    // Check for required fields
    if (empty($first_name) || empty($last_name) || empty($birthdate) || empty($student_id) || empty($email) || empty($strand) || empty($level)) {
        echo "<script>alert('Error: Required fields are missing.');</script>";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO students (first_name, middle_name, last_name, birthdate, student_id, street_address, city, state_province, country, zip_code, email, strand, level) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $first_name, $middle_name, $last_name, $birthdate, $student_id, $street_address, $city, $state_province, $country, $zip_code, $email, $strand, $level);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Log In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container1">
        
    <div class="welcome-section">
        <img src="logos.png" alt="Lathougs Univ." class="logo">
        <h1>Welcome to <br> Lathougs University</h1>
    </div>

    <!-- Registration Form -->
    <div class="container box" id="signUp" style="display: none;">
      <h1 class="form-title">Enroll</h1>
      <form method="post" action="register.php">
        
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lName" id="lName" placeholder="Last Name" required>
          <label for="lName">Last Name</label>
        </div>

        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fName">First Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-id-card"></i>
          <input type="text" name="studentID" id="studentID" placeholder="Student ID" required>
          <label for="studentID">Student ID</label>
        </div>

        <input type="submit" class="btn" value="Enroll" name="submit"> 

      </form>

      <div class="Links">
        <p>Already have an account?</p>
        <button id="logInButton">Log In</button>
      </div>
    </div>

    <!-- Login Form -->
    <div class="container box" id="signIn">
      <h1 class="form-title">Welcome Students</h1>
      <form method="post" action="login.php">
        
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lName" id="lNameLogin" placeholder="Last Name" required>
          <label for="lNameLogin">Last Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fName" id="fNameLogin" placeholder="First Name" required>
          <label for="fNameLogin">First Name</label>
        </div>

        <div class="input-group">
          <i class="fas fa-id-card"></i>
          <input type="text" name="studentID" id="studentIDLogin" placeholder="Student ID" required>
          <label for="studentIDLogin">Student ID</label>
        </div>

        <input type="submit" class="btn" value="Log In" name="submit"> 

      </form>

      <div class="Links">
        <p>Don't have an account?</p>
        <button id="signUpButton">Enroll</button>  <!-- Redirect to enroll.php -->
      </div>
    </div>

    <script>
        // Redirect "Enroll" button in the Login Form to enroll.php
        document.getElementById("signUpButton").addEventListener("click", function() {
            window.location.href = "enroll.php";
        });
    </script>

</body>
</html>
