<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM class WHERE Class_id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Class</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Class</h2>
  <form action="update_class.php" method="post">
    <input type="hidden" name="class_id" value="<?= $row['Class_id'] ?>">
    <div class="mb-3"><label class="form-label">Name</label><input type="text" class="form-control" name="name" value="<?= $row['Name'] ?>"></div>
    <div class="mb-3"><label class="form-label">Capacity</label><input type="number" class="form-control" name="capacity" value="<?= $row['Capacity'] ?>"></div>
    <div class="mb-3"><label class="form-label">Classroom Number</label><input type="text" class="form-control" name="classroom_number" value="<?= $row['Classroom_Number'] ?>"></div>
    <div class="mb-3"><label class="form-label">Class Timetable</label><input type="date" class="form-control" name="timetable" value="<?= $row['Class_Timetable'] ?>"></div>
    <div class="mb-3"><label class="form-label">Start Date</label><input type="date" class="form-control" name="start_date" value="<?= $row['Class_Start_Date'] ?>"></div>
    <div class="mb-3"><label class="form-label">End Date</label><input type="date" class="form-control" name="end_date" value="<?= $row['Class_End_Date'] ?>"></div>
    <div class="mb-3"><label class="form-label">Teacher ID</label><input type="number" class="form-control" name="teacher_id" value="<?= $row['Teacher_id'] ?>"></div>
    <button type="submit" class="btn btn-success">Update Class</button>
  </form>
</div>
</body>
</html>
