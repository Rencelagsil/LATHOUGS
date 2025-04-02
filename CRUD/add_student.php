<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form action="insert_student.php" method="POST">
        <input type="text" name="fName" placeholder="First Name" required>
        <input type="text" name="mName" placeholder="Middle Name">
        <input type="text" name="lName" placeholder="Last Name" required>
        <input type="date" name="birthdate" required>
        <input type="text" name="studentID" placeholder="Student ID" required>
        <input type="text" name="street" placeholder="Street Address" required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="state" placeholder="State / Province" required>
        <input type="text" name="country" placeholder="Country" required>
        <input type="text" name="zip" placeholder="ZIP Code" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <select name="strand" required>
            <option value="ABM">ABM</option>
            <option value="HUMSS">HUMSS</option>
            <option value="STEM">STEM</option>
            <option value="GAS">GAS</option>
            <option value="TVL">TVL</option>
        </select>
        <select name="level" required>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
        </select>
        <button type="submit">Add Student</button>
        
    </form>
    <a href="admin.php"><button>Back</button></a>
</body>
</html>
