<?php
include 'db.php';

$sql = "UPDATE attendance SET Date = ?, Status = ?, Remarks = ? WHERE Attendance_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi",
  $_POST['date'],
  $_POST['status'],
  $_POST['remarks'],
  $_POST['attendance_id']
);

if ($stmt->execute()) {
  header("Location: attendance.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
