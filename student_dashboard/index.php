
<?php
$conn = mysqli_connect("localhost", "root", "", "student_dashboard");

if (!$conn) {
    die("Database connection failed");
}

// Add student
if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    mysqli_query($conn, "INSERT INTO students (name, email, course)
    VALUES ('$name', '$email', '$course')");
}

// Delete student
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    mysqli_query($conn, "DELETE FROM students WHERE id = $id");
}

// Get students
$result = mysqli_query($conn, "SELECT * FROM students");
$total = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background: #eee;
            padding: 20px;
        }

        .box {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        input, button {
            padding: 10px;
            margin: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Student Management Dashboard</h1>

    <div class="box">
        <h2>Total Students: <?php echo $total; ?></h2>
    </div>

    <div class="box">
        <h2>Add Student</h2>

        <form method="POST">
            <input type="text" name="name"
                   placeholder="Student Name" required>

            <input type="email" name="email"
                   placeholder="Email" required>

            <input type="text" name="course"
                   placeholder="Course" required>

            <button type="submit" name="add">
                Add Student
            </button>
        </form>
    </div>

    <div class="box">
        <h2>Student Records</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['course']); ?></td>
                <td>
                    <a href="?delete=<?php echo $row['id']; ?>"
                       onclick="return confirm('Delete this student?')">
                       Delete
                    </a>
                </td>
            </tr>
            <?php } ?>

        </table>
    </div>

</body>
</html>

<?php mysqli_close($conn); ?>
