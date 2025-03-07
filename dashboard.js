document.addEventListener("DOMContentLoaded", function () {
    // Function to load content dynamically
    function loadContent(pageName) {
        const contentBox = document.querySelector(".dashboard-content");

        // Simulate loading effect
        contentBox.innerHTML = `<h1>Loading ${pageName}...</h1>`;

        setTimeout(() => {
            contentBox.innerHTML = `
                <h1>${pageName}</h1>
                <p>Content for ${pageName} will be displayed here.</p>
            `;
        }, 500);
    }

    // Sidebar Menu Click Event
    const menuButtons = document.querySelectorAll(".menu-btn");
    menuButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Remove 'active' from all buttons
            menuButtons.forEach(btn => btn.classList.remove("active"));
            // Add 'active' to the clicked button
            this.classList.add("active");

            // Load corresponding content
            const pageName = this.innerText.trim();
            loadContent(pageName);
        });
    });

    // Edit Profile Button Click Event
    const editProfileBtn = document.querySelector(".edit-profile");
    if (editProfileBtn) {
        editProfileBtn.addEventListener("click", function () {
            alert("Redirecting to Edit Profile...");
            window.location.href = "edit-profile.php";
        });
    }

    // Sidebar Toggle Button (for mobile users)
    const sidebar = document.querySelector(".sidebar");
    const toggleButton = document.createElement("button");
    toggleButton.innerHTML = "☰";
    toggleButton.classList.add("sidebar-toggle");
    document.body.appendChild(toggleButton);

    toggleButton.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
    });
});
