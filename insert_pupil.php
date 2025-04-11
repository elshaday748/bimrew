<?php
include 'db.php';

$sql = "INSERT INTO pupils (First_name, Last_name, Date_of_Birth, Gender, Address, Medical_History, Class_id, Admission_Date)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssds",
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['dob'],
  $_POST['gender'],
  $_POST['address'],
  $_POST['medical_history'],
  $_POST['class_id'],
  $_POST['admission_date']
);

if ($stmt->execute()) {
  header("Location: pupils.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
