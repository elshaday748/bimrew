<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form inputs and sanitize them
    $name = trim($_POST['name']);
    $capacity = $_POST['capacity'];
    $classroom_number = trim($_POST['classroom_number']);
    $class_timetable = trim($_POST['class_timetable']);
    $class_start_date = $_POST['class_start_date'];
    $class_end_date = $_POST['class_end_date'];
    $teacher_id = $_POST['teacher_id'];

    // Validate required fields
    if (empty($name) || empty($capacity) || empty($classroom_number) || empty($class_timetable) || empty($class_start_date) || empty($class_end_date) || empty($teacher_id)) {
        echo "Please fill in all required fields!";
        exit;
    }

    // Prepare SQL query to insert class data into the classes table
    $sql = "INSERT INTO class (Name, Capacity, Classroom_Number, Class_Timetable, Class_Start_Date, Class_End_Date, Teacher_id)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissssi",
        $name,
        $capacity,
        $classroom_number,
        $class_timetable,
        $class_start_date,
        $class_end_date,
        $teacher_id
    );

    // Execute the statement and check for success
    if ($stmt->execute()) {
        header("Location: classes.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $conn->close();
}
?>
