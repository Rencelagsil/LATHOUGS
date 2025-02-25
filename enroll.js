document.addEventListener("DOMContentLoaded", function () {
    // Form validation on submit
    document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault();

        let inputs = document.querySelectorAll("select, input");
        let isValid = true;

        inputs.forEach(input => {
            if (input.value.trim() === "") {
                input.style.border = "2px solid red";
                isValid = false;
            } else {
                input.style.border = "1px solid #ccc";
            }
        });

        if (!isValid) {
            alert("Please fill in all required fields.");
            return;
        }

        alert("Registration Successful!");

        // Redirect to login page after successful submission
        window.location.href = "index.php";
    });
});
