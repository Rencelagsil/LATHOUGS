# SMS-STUDENT-MANAGEMENT-SYSTEM
POJECT DETAILS - The Student Management System (SMS) for Senior High School (SHS) students of Lathougs University is a web-based platform designed to provide students with an easy way to access their academic and financial records. The system allows students to self-enroll, log in securely, and view essential information such as Grades, Subjects, Class Schedule, Accounts Balances and Permits.

Setup Instructions for SMS (SHS Students of Lathougs University)
This guide provides set up instructions to set up the Student Management System (SMS) using GitHub for version control and XAMPP for the database server.

Before setting up the project, install the following tools:
Development Tools
Git – Download Git
XAMPP (Apache, MySQL, PHP) – Download XAMPP
Code Editor (Recommended: VS Code, Sublime Text, or PHPStorm)

1. Create/Join the GitHub Repository
Sign in to GitHub and create a new repository:
Repository Name: SMS-STUDENT-MANAGEMENT-SYSTEM
Description: Student Management System for SHS Students at Lathougs University.
Visibility: Choose Private or Public.
Initialize with README and .gitignore (set to PHP).

Clone the repository: https://github.com/Rencelagsil/SMS-STUDENT-MANAGEMENT-SYSTEM.git

Set Up XAMPP (Apache & MySQL)
1. Start Apache & MySQL
Open XAMPP Control Panel.
Click Start on both: Apache and MySQL

Create the Database in phpMyAdmin
Open phpMyAdmin by visiting:

http://localhost/phpmyadmin

Click New, enter sms_db, and click Create.
Import the database structure:
Go to the database/ folder in your project.
Open sms_db.sql in a text editor.
Copy & paste the SQL code into phpMyAdmin > SQL tab.
Click Execute.

Configure the Environment File (.env)
Open the project folder and create a .env file.
Add database connection details:

DB_HOST=localhost
DB_USER= "root"
DB_PASS= " "
DB_NAME=sms_db

Run the Project
1. Open the Project in Browser
Make sure Apache and MySQL are running in XAMPP.
Open your browser and go to: http://localhost/name of your folder or project

SET UP COMPLETE! hakdog
