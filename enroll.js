// Student ID validation (ensures 12 digits only)
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var studentID = document.getElementById("studentID").value;
    var errorMessage = document.getElementById("studentIDError");

    // Remove any non-numeric characters
    studentID = studentID.replace(/\D/g, '');

    // Check if the student ID is exactly 12 digits
    if (studentID.length !== 12) {
        errorMessage.textContent = "Student ID must be exactly 12 digits.";
        event.preventDefault();  // Prevent form submission if not exactly 12 digits
    } else {
        errorMessage.textContent = ""; // Clear the error message if valid
    }

    // Proceed with birthdate validation after student ID check
    var birthdate = document.getElementById('birthdate').value;
    var birthYear = new Date(birthdate).getFullYear();
    var birthdateErrorMessage = document.getElementById('birthdateError');
    var currentYear = new Date().getFullYear();
    
    // Check if the birthdate is valid
    if (isNaN(new Date(birthdate).getTime())) {
        birthdateErrorMessage.textContent = "Please enter a valid birthdate.";
        event.preventDefault();  // Prevent form submission
        return;
    }

    // Check if the birth year is in the future
    if (birthYear > currentYear) {
        birthdateErrorMessage.textContent = "The birthdate cannot be from the future.";
        event.preventDefault();  // Prevent form submission
        return;
    }

    // Optional: Check for unrealistic birth years
    if (birthYear < 1900 || birthYear > currentYear) {
        birthdateErrorMessage.textContent = "Please enter a realistic birthdate.";
        event.preventDefault();  // Prevent form submission
        return;
    }

    birthdateErrorMessage.textContent = "";  // Clear any existing error message
});

// Real-time validation for student ID (check when user types)
document.getElementById("studentID").addEventListener("input", function() {
    var studentID = document.getElementById("studentID").value;
    var errorMessage = document.getElementById("studentIDError");

    // Remove any non-numeric characters
    studentID = studentID.replace(/\D/g, '');

    // Check if the student ID is exactly 12 digits
    if (studentID.length !== 12) {
        errorMessage.textContent = "Student ID must be exactly 12 digits.";
    } else {
        errorMessage.textContent = ""; // Clear the error message if valid
    }

    // Update the input field with only numeric characters
    document.getElementById("studentID").value = studentID;
});
