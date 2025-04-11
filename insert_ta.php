<?php
include 'db.php';

$sql = "INSERT INTO teaching_assistant (First_Name, Last_Name, Class_ID) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $_POST['first_name'], $_POST['last_name'], $_POST['class_id']);

if ($stmt->execute()) {
  header("Location: tas.php"); // A listing page for TAs
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
