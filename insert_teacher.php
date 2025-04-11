<?php
include 'db.php';

// Check if the form data is received
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form inputs and sanitize them
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $subjects_taught = trim($_POST['subjects_taught']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    $experience = $_POST['experience'];
    $salary = $_POST['salary'];
    $background = trim($_POST['background']);

    // Validate required fields
    if (empty($first_name) || empty($last_name) || empty($dob) || empty($gender) || empty($subjects_taught) || empty($phone)) {
        echo "Please fill in all required fields!";
        exit;
    }

    // Prepare SQL query to insert data into the teachers table
    $sql = "INSERT INTO teacher (First_name, Last_name, Date_of_Birth, Gender, Subjects_Taught, Address, Phone_number, Years_of_Experience, Annual_salary, Background_Check)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssids",
        $first_name,
        $last_name,
        $dob,
        $gender,
        $subjects_taught,
        $address,
        $phone,
        $experience,
        $salary,
        $background
    );

    // Execute the statement and check for success
    if ($stmt->execute()) {
        header("Location: teachers.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $conn->close();
}
?>
