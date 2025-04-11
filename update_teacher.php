<?php
include 'db.php';

$sql = "UPDATE teacher SET 
  First_name = ?, 
  Last_name = ?, 
  Date_of_Birth = ?, 
  Gender = ?, 
  Subjects_Taught = ?, 
  Address = ?, 
  Phone_number = ?, 
  Years_of_Experience = ?, 
  Annual_salary = ?, 
  Background_Check = ?
  WHERE Teacher_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssidsi",
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['dob'],
  $_POST['gender'],
  $_POST['subjects_taught'],
  $_POST['address'],
  $_POST['phone_number'],
  $_POST['experience'],
  $_POST['salary'],
  $_POST['background_check'],
  $_POST['teacher_id']
);

if ($stmt->execute()) {
  header("Location: teachers.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
