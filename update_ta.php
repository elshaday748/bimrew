<?php
include 'db.php';

$sql = "UPDATE teaching_assistant SET First_Name = ?, Last_Name = ?, Class_ID = ? WHERE TA_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii",
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['class_id'],
  $_POST['ta_id']
);

if ($stmt->execute()) {
  header("Location: tas.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
