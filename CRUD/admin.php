<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="crud_admin.css">
    <script>
        async function fetchStudents() {
            const response = await fetch("api.php", {
                headers: { "Authorization": "Bearer your_secure_token" }
            });
            const students = await response.json();
            document.getElementById("studentTable").innerHTML = students.map(s => `
                <tr>
                    <td>${s.id}</td>
                    <td>${s.first_name}</td>
                    <td>${s.middle_name}</td>
                    <td>${s.last_name}</td>
                    <td>${s.student_id}</td>
                    <td>${s.email}</td>
                    <td>${s.strand}</td>
                    <td>${s.level}</td>
                    <td>
                        <a href="edit_student.php?id=${s.id}" class="btn edit-btn">Edit</a>
                        <a href="delete_student.php?id=${s.id}" class="btn delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            `).join("");
        }

        window.onload = fetchStudents;
    </script>
</head>
<body>
    <div class="container">
        <h1>Student List</h1>
        <a href="add_student.php"><button class="btn" style="background: #007bff;">Add New Student</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Student ID</th>
                    <th>Email</th>
                    <th>Strand</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="studentTable"></tbody>
        </table>
    </div>
</body>
</html>
