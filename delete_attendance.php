<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM attendance WHERE Attendance_id = $id");
header("Location: attendance.php");
?>
