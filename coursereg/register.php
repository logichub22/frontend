<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $courses="";
        $selectedCourses = $_POST["courses"];

        // Connect to the database
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'student_registration';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert student data into the 'students' table
        $sql = "INSERT INTO students (name, email,courses) VALUES ('$name', '$email','$courses')";
        if ($conn->query($sql) === TRUE) {
            $student_id = $conn->insert_id;

            // Insert selected courses into the 'courses' table
            if (!empty($selectedCourses)) {
                foreach ($selectedCourses as $courseId) {
                    $sql = "INSERT INTO courses_students (student_id, course_id) VALUES ('$student_id', '$courseId')";
                    $conn->query($sql);
                }
            }

            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>