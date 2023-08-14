<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
</head>

<body>
    <h2>Student Registration Form</h2>
    <form action="register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <h3>Select Courses:</h3>
        <?php
            // Fetch the list of courses from the database
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = '';
            $db_name = 'student_registration';

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM courses";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<input type="checkbox" name="courses[]" value="' . $row['id'] . '"> ' . $row['course_name'] . '<br>';
                }
            }

            $conn->close();
        ?>
            <br>
            <input type="submit" value="Register">
    </form>
</body>

</html>