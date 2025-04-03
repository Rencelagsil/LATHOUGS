document.addEventListener("DOMContentLoaded", function () {
    let birthdateInput = document.getElementById("birthdate");
    let birthdateError = document.getElementById("birthdateError");
    let studentIDInput = document.getElementById("studentID");
    let studentIDError = document.getElementById("studentIDError");

    // Set max birthdate to today
    let today = new Date().toISOString().split("T")[0];
    birthdateInput.setAttribute("max", today);

    // Set minimum birthdate to January 1, 2010
    let minDate = "2010-01-01";
    birthdateInput.setAttribute("min", minDate);

    // Validate birthdate input
    birthdateInput.addEventListener("change", function () {
        let selectedDate = new Date(birthdateInput.value);
        let minAllowedDate = new Date(minDate);
        let todayDate = new Date();

        if (selectedDate > todayDate) {
            birthdateError.textContent = "Birthdate cannot be in the future.";
            birthdateInput.style.border = "2px solid red";
        } else if (selectedDate < minAllowedDate) {
            birthdateError.textContent = "Birth year must be 2010 or later.";
            birthdateInput.style.border = "2px solid red";
        } else {
            birthdateError.textContent = "";
            birthdateInput.style.border = "2px solid green";
        }
    });

    // Validate Student ID (must be 12 digits)
    studentIDInput.addEventListener("input", function () {
        let studentIDValue = studentIDInput.value.trim();
        let regex = /^\d{12}$/;

        if (!regex.test(studentIDValue)) {
            studentIDError.textContent = "Student ID/LRN must be exactly 12 digits.";
            studentIDInput.style.border = "2px solid red";
        } else {
            studentIDError.textContent = "";
            studentIDInput.style.border = "2px solid green";
        }
    });

    // Prevent form submission if validations fail
    document.getElementById("registrationForm").addEventListener("submit", function (event) {
        if (birthdateError.textContent || studentIDError.textContent) {
            event.preventDefault();
            alert("Please fix the errors before submitting the form.");
        }
    });
});
