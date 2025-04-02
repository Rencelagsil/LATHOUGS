<?php
include 'db.php'; 

// Set the Content-Type to JSON for API responses
header("Content-Type: application/json");

// Get the request method
$method = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($method) {
    case 'GET':
        // Fetch single student or all students based on id
        if ($id) {
            $result = $conn->query("SELECT * FROM students WHERE id=$id");
            $student = $result->fetch_assoc();
            echo json_encode($student);
        } else {
            $result = $conn->query("SELECT * FROM students");
            $students = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($students);
        }
        break;

    case 'POST':
        // Insert a new student
        $data = json_decode(file_get_contents("php://input"));
        $stmt = $conn->prepare("INSERT INTO students (first_name, middle_name, last_name, birthdate, student_id, street_address, city, state_province, country, zip_code, email, strand, level) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $data->first_name, $data->middle_name, $data->last_name, $data->birthdate, $data->student_id, $data->street_address, $data->city, $data->state_province, $data->country, $data->zip_code, $data->email, $data->strand, $data->level);
        if ($stmt->execute()) {
            echo json_encode(["message" => "Student created successfully"]);
        } else {
            echo json_encode(["error" => "Failed to create student"]);
        }
        break;

    case 'PUT':
        // Update an existing student
        if ($id) {
            $data = json_decode(file_get_contents("php://input"));
            $stmt = $conn->prepare("UPDATE students SET first_name=?, middle_name=?, last_name=?, birthdate=?, student_id=?, street_address=?, city=?, state_province=?, country=?, zip_code=?, email=?, strand=?, level=? WHERE id=$id");
            $stmt->bind_param("sssssssssssss", $data->first_name, $data->middle_name, $data->last_name, $data->birthdate, $data->student_id, $data->street_address, $data->city, $data->state_province, $data->country, $data->zip_code, $data->email, $data->strand, $data->level);
            if ($stmt->execute()) {
                echo json_encode(["message" => "Student updated successfully"]);
            } else {
                echo json_encode(["error" => "Failed to update student"]);
            }
        }
        break;

    case 'DELETE':
        // Delete a student
        if ($id) {
            if ($conn->query("DELETE FROM students WHERE id=$id")) {
                echo json_encode(["message" => "Student deleted successfully"]);
            } else {
                echo json_encode(["error" => "Failed to delete student"]);
            }
        }
        break;

    default:
        echo json_encode(["error" => "Invalid request method"]);
        break;
}

$conn->close();
?>
