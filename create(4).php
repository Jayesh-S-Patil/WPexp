<?php
// ============================================================
// TASK 2: CREATE — Add a New Student
// ============================================================
// This file handles two scenarios:
//   GET request  → Show the empty form
//   POST request → Process the form data and insert into database
//
// Steps:
//   1. Include db.php
//   2. Check if the request method is POST
//   3. If POST: read $_POST values, prepare INSERT, bind, execute, redirect
//   4. If GET: just show the HTML form below
// ============================================================

// TODO: Include the database connection file
// Hint: require_once 'db.php';


// TODO: Check if the form was submitted (POST request)
// Hint: if ($_SERVER['REQUEST_METHOD'] === 'POST') { ... }

    // TODO: Read the form values from $_POST
    // Hint: $name   = $_POST['name'];
    //        $email  = $_POST['email'];
    //        $course = $_POST['course'];

    // TODO: Prepare an INSERT statement with ? placeholders
    // Hint: $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");

    // TODO: Bind the three string parameters
    // Hint: $stmt->bind_param("sss", $name, $email, $course);

    // TODO: Execute the statement
    // Hint: $stmt->execute();

    // TODO: Redirect back to the main page
    // Hint: header("Location: index.php");
    //        exit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student — Lab 7</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            background-color: #f5f5f5;
        }
        h1 { color: #2c3e50; margin-bottom: 20px; }
        form {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        label { display: block; font-weight: 600; color: #2c3e50; margin-bottom: 5px; margin-top: 15px; }
        label:first-of-type { margin-top: 0; }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #bdc3c7;
            border-radius: 4px;
            font-size: 14px;
            font-family: inherit;
        }
        input:focus { outline: none; border-color: #3498db; }
        button {
            background-color: #27ae60;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 20px;
            width: 100%;
        }
        button:hover { background-color: #1e8449; }
        a { color: #3498db; text-decoration: none; display: inline-block; margin-top: 15px; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <h1>➕ Add New Student</h1>

    <form method="POST" action="create.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter student name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter student email" required>

        <label for="course">Course</label>
        <input type="text" id="course" name="course" placeholder="Enter course name" required>

        <button type="submit">Add Student</button>
    </form>

    <a href="index.php">← Back to Student List</a>

</body>
</html>
