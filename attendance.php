<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Attendance Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Attendance Records</h2>
  <a href="add_attendance.php" class="btn btn-success mb-3">Add Attendance</a>
  <table class="table table-bordered">
    <thead class="table-primary">
      <tr>
        <th>ID</th>
        <th>Pupil</th>
        <th>Class</th>
        <th>Date</th>
        <th>Status</th>
        <th>Remarks</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT a.*, p.First_name AS pupil, c.Name AS class
              FROM attendance a
              JOIN pupils p ON a.Pupil_ID = p.Pupil_id
              JOIN class c ON a.Class_ID = c.Class_id";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['Attendance_id'] ?></td>
        <td><?= $row['pupil'] ?></td>
        <td><?= $row['class'] ?></td>
        <td><?= $row['Date'] ?></td>
        <td><?= $row['Status'] ?></td>
        <td><?= $row['Remarks'] ?></td>
        <td>
          <a href="edit_attendance.php?id=<?= $row['Attendance_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_attendance.php?id=<?= $row['Attendance_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?')">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
