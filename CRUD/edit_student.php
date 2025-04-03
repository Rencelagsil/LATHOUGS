<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fName'];
    $middle_name = $_POST['mName'];
    $last_name = $_POST['lName'];
    $strand = $_POST['strand'];
    $semester = $_POST['semester'];
    $level = $_POST['level'];

    // Corrected SQL query with proper quote for 'semester' field
    $sql = "UPDATE students SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', strand='$strand', semester='$semester', level='$level' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Successfully Updated!'); window.location.href='admin.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST">
        <input type="text" name="fName" value="<?= $row['first_name'] ?>" required>
        <input type="text" name="mName" value="<?= $row['middle_name'] ?>">
        <input type="text" name="lName" value="<?= $row['last_name'] ?>" required>
        
        <select name="strand">
            <option value="<?= $row['strand'] ?>"><?= $row['strand'] ?></option>
            <option value="ABM">ABM</option>
            <option value="HUMSS">HUMSS</option>
            <option value="STEM">STEM</option>
            <option value="GAS">GAS</option>
            <option value="TVL">TVL</option>
        </select>
        
        <select name="semester">
            <option value="<?= $row['semester'] ?>"><?= $row['semester'] ?></option>
            <option value="1st Semester">1st Semester</option>
            <option value="2nd Semester">2nd Semester</option>
        </select>
        
        <select name="level">
            <option value="<?= $row['level'] ?>"><?= $row['level'] ?></option>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
        </select>
        
        <button type="submit">Update</button> 
    </form>
</body>
</html> 
