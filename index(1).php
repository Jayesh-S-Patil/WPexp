<?php
// ============================================================
// TASK 1: READ — Display All Students
// ============================================================
// This is the main page. It queries the students table and
// displays every row in an HTML table with Edit/Delete links.
//
// Steps:
//   1. Include db.php to get the $conn connection
//   2. Run a SELECT query to get all students
//   3. Loop through results and output each row as a table row
// ============================================================

// Step 1: Include the database connection file
require_once 'db.php';

// Step 2: Run a SELECT query to fetch all students, ordered by id descending
$result = $conn->query("SELECT * FROM students ORDER BY id DESC");
if ($result === false) {
    die("Query failed: " . $conn->error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management — Lab 7</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            padding: 20px;
            max-width: 900px;
            margin: 0 auto;
            background-color: #f5f5f5;
        }
        h1 { color: #2c3e50; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; }
        th { background-color: #3498db; color: white; padding: 12px 15px; text-align: left; }
        td { padding: 12px 15px; border-bottom: 1px solid #eee; }
        tr:hover { background-color: #f8f9fa; }
        a { color: #3498db; text-decoration: none; margin-right: 10px; }
        a:hover { text-decoration: underline; }
        a.delete { color: #e74c3c; }
        .btn-add {
            display: inline-block;
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .btn-add:hover { background-color: #1e8449; text-decoration: none; }
        .empty { text-align: center; padding: 40px; color: #999; font-style: italic; }
    </style>
</head>
<body>

    <h1>📚 Student Management System</h1>

    <a href="create.php" class="btn-add">+ Add New Student</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // Step 3: Check if the query returned any rows and loop through them
            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['course']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= htmlspecialchars($row['id']) ?>">Edit</a>
                        <a href="delete.php?id=<?= htmlspecialchars($row['id']) ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile;
            else: ?>
                <tr><td colspan="5" class="empty">No students found.</td></tr>
            <?php endif; ?>

        </tbody>
    </table>

</body>
</html>
