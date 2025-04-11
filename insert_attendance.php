<?php
include 'db.php';

$sql = "INSERT INTO attendance (Pupil_ID, Class_ID, Date, Status, Remarks) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iisss",
  $_POST['pupil_id'],
  $_POST['class_id'],
  $_POST['date'],
  $_POST['status'],
  $_POST['remarks']
);

if ($stmt->execute()) {
  header("Location: attendance.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
