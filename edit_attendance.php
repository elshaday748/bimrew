<?php
include 'db.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM attendance WHERE Attendance_id = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Attendance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Attendance</h2>
  <form action="update_attendance.php" method="post">
    <input type="hidden" name="attendance_id" value="<?= $row['Attendance_id'] ?>">

    <div class="mb-3">
      <label class="form-label">Date</label>
      <input type="date" class="form-control" name="date" value="<?= $row['Date'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Status</label>
      <select class="form-select" name="status" required>
        <option value="Present" <?= $row['Status'] == 'Present' ? 'selected' : '' ?>>Present</option>
        <option value="Absent" <?= $row['Status'] == 'Absent' ? 'selected' : '' ?>>Absent</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Remarks</label>
      <input type="text" class="form-control" name="remarks" value="<?= $row['Remarks'] ?>">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
</body>
</html>
