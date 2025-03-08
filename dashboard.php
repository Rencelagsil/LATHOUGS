<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
    exit();
}

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$student_id = $_SESSION['student_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="logos.png" alt="Lathougs Uni Logo">
            <h2>Lathougs.univ</h2>
        </div>
        <button class="menu-btn"><span class="icon">⏹</span> Overview</button>
        <button class="menu-btn active"><span class="icon">👤</span> Student Profile</button>
        <button class="menu-btn"><span class="icon">📖</span> View Grades</button>
        <button class="menu-btn"><span class="icon">📅</span> Class Schedule & Subjects</button>
        <button class="menu-btn"><span class="icon">💰</span> Account & Balance</button>
        <button class="menu-btn"><span class="icon">📝</span> Permits</button>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <div class="profile-section">
                <div>
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="header-buttons">
                <button class="edit-profile">Edit Profile</button>
                <button class="logout-btn" onclick="logout()">Logout</button>
            </div>
        </div>

        <div class="dashboard-content">
             <h1>Welcome, <?php echo htmlspecialchars($last_name); ?>! 🎉</h1>
            <p>Manage your academic journey with ease.</p>
        </div>
    </div>

    <script>
        function logout() {
            window.location.href = "index.php"; // Redirect to login page
        }
    </script>
</body>
</html>
