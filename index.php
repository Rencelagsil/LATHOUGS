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

    <script src="script.js"></script>
</body>
</html>
