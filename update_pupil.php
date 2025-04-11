<?php
include 'db.php';

$sql = "UPDATE pupils SET 
  First_name = ?, 
  Last_name = ?, 
  Date_of_Birth = ?, 
  Gender = ?, 
  Address = ?, 
  Medical_History = ?, 
  Admission_Date = ?, 
  Class_id = ? 
  WHERE Pupil_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssii",
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['dob'],
  $_POST['gender'],
  $_POST['address'],
  $_POST['medical_history'],
  $_POST['admission_date'],
  $_POST['class_id'],
  $_POST['pupil_id']
);

if ($stmt->execute()) {
  header("Location: pupils.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
