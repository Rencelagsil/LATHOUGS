<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
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
    $gender = $_POST['gender'] ?? "";  // Added gender field
    $semester = $_POST['semester'] ?? "";  // Added semester field

    // Check for required fields
    if (empty($first_name) || empty($last_name) || empty($birthdate) || empty($student_id) || empty($email) || empty($strand) || empty($level) || empty($gender) || empty($semester)) {
        echo "<script>alert('Error: Required fields are missing.');</script>";
        exit;
    }

    // Prepare SQL query with gender and semester
    $stmt = $conn->prepare("INSERT INTO students (first_name, middle_name, last_name, birthdate, student_id, street_address, city, state_province, country, zip_code, email, strand, level, gender, semester) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssss", $first_name, $middle_name, $last_name, $birthdate, $student_id, $street_address, $city, $state_province, $country, $zip_code, $email, $strand, $level, $gender, $semester);

    // Execute query and check for success
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
