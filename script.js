document.addEventListener("DOMContentLoaded", function () {
    const signUpButton = document.getElementById("signUpButton");
    const logInButton = document.getElementById("logInButton");
    const logInForm = document.getElementById("signIn"); // Login form
    const signUpForm = document.getElementById("signUp"); // Enrollment form

    // Check if buttons exist before adding event listeners
    if (signUpButton && logInButton) {
        // Switch to the Enrollment form
        signUpButton.addEventListener("click", function () {
            logInForm.style.display = "none";
            signUpForm.style.display = "block";
        });

        // Switch to the Login form
        logInButton.addEventListener("click", function () {
            logInForm.style.display = "block";
            signUpForm.style.display = "none";
        });
    }

    // ✅ Login Form Validation & Redirect
    document.querySelector("#signIn form").addEventListener("submit", function (event) {
        let isValid = true;

        const firstName = document.getElementById("fNameLogin");
        const lastName = document.getElementById("lNameLogin");
        const studentID = document.getElementById("studentIDLogin");

        [firstName, lastName, studentID].forEach(input => {
            if (!input.value.trim()) {
                input.style.border = "2px solid red";
                isValid = false;
            } else {
                input.style.border = "1px solid #ccc";
            }
        });

        if (!isValid) {
            alert("Please fill in all required fields.");
            event.preventDefault();
        } else {
            alert("Login Successful!");
            setTimeout(() => {
                window.location.href = "index.php"; // Redirect after login
            }, 1000);
        }
    });

    // ✅ Enrollment Form Validation & Redirect
    document.querySelector("#signUp form").addEventListener("submit", function (event) {
        let isValid = true;

        const firstName = document.getElementById("fName");
        const lastName = document.getElementById("lName");
        const studentID = document.getElementById("studentID");

        [firstName, lastName, studentID].forEach(input => {
            if (!input.value.trim()) {
                input.style.border = "2px solid red";
                isValid = false;
            } else {
                input.style.border = "1px solid #ccc";
            }
        });

        if (!isValid) {
            alert("Please fill in all required fields.");
            event.preventDefault();
        } else {
            alert("Enrollment Successful!");
            setTimeout(() => {
                window.location.href = "index.php"; // Redirect after enrollment
            }, 1000);
        }
    });
});
