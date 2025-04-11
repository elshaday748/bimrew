<?php
include 'db.php';

$sql = "UPDATE class SET 
  Name = ?, 
  Capacity = ?, 
  Classroom_Number = ?, 
  Class_Timetable = ?, 
  Class_Start_Date = ?, 
  Class_End_Date = ?, 
  Teacher_id = ? 
  WHERE Class_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sissssii",
  $_POST['name'],
  $_POST['capacity'],
  $_POST['classroom_number'],
  $_POST['timetable'],
  $_POST['start_date'],
  $_POST['end_date'],
  $_POST['teacher_id'],
  $_POST['class_id']
);

if ($stmt->execute()) {
  header("Location: classes.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
