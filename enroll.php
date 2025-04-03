<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="enroll.css">
</head>
<body>

    <div class="container">
        <div class="form-header">
            <div class="logo">
                <img src="logos.png" alt="School Logo" width="150">
            </div>
            <h1>Student Registration Form</h1>
            <p>Fill out the form to access the SMS and view your records.</p>
        </div>
        <form action="register.php" method="POST" id="registrationForm">
            
            <h2>Student Information</h2>
            <div class="form-group">
                <input type="text" name="fName" placeholder="First Name" required>
                <input type="text" name="mName" placeholder="Middle Name">
                <input type="text" name="lName" placeholder="Last Name" required>
            </div>

            <!-- Gender Selection (Dropdown) -->
            <h2>Gender</h2>
            <div class="form-group">
                <select name="gender" id="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <!-- Birthdate Validation -->
            <h2>Birthdate</h2>
<div class="form-group">
    <input type="date" id="birthdate" name="birthdate" required>
    <div id="birthdateError" style="color: red; font-size: 12px;"></div> <!-- Error message container -->
</div>


            <!-- Student ID Validation -->
            <h2>Student ID/LRN</h2>
<div class="form-group">
    <input type="text" id="studentID" name="studentID" placeholder="Student ID/LRN" required>
    <div id="studentIDError" style="color: red; font-size: 12px;"></div> <!-- Error message container -->
</div>


            <h2>Address</h2>
            <div class="form-group">
                <input type="text" name="street" placeholder="Street Address" required>
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="City" required>
                <input type="text" name="state" placeholder="State / Province" required>
            </div>
            <div class="form-group">
                <input type="text" name="country" placeholder="Country" required>
                <input type="text" name="zip" placeholder="ZIP Code" required>
            </div>

            <h2>Contact Information</h2>
            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <h2>Academic Information</h2>
            <table>
                <tr>
                    <th>Strand</th>
                    <th>Semester</th>
                    <th>Level</th>
                </tr>
                <tr>
                    <td>
                        <select name="strand" required>
                            <option value="" disabled selected>Select Strand</option>
                            <option value="ABM">ABM</option>
                            <option value="HUMSS">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="GAS">GAS</option>
                            <option value="TVL">TVL</option>
                        </select>
                    </td>

                    <!-- Semester Selection (Dropdown) -->
                    <td>
                        <select name="semester" required>
                            <option value="" disabled selected>Select Semester</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                        </select>
                    </td>

                    <td>
                        <select name="level" required>
                            <option value="" disabled selected>Select Level</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                        </select>
                    </td>
                </tr>
            </table>

            <button type="submit" class="submit-btn">Register</button>
            <button type="button" class="back-btn" onclick="window.location.href='index.php';">Back</button>

        </form>
    </div>

    <script src="enroll.js"></script>

</body>
</html>
