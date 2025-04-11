<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Attendance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Add Attendance</h2>
  <form action="insert_attendance.php" method="post">

    <div class="mb-3">
      <label class="form-label">Pupil</label>
      <select class="form-select" name="pupil_id" required>
        <?php
        $res = $conn->query("SELECT * FROM pupils");
        while ($row = $res->fetch_assoc()) {
          echo "<option value='{$row['Pupil_id']}'>{$row['First_name']} {$row['Last_name']}</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Class</label>
      <select class="form-select" name="class_id" required>
        <?php
        $res = $conn->query("SELECT * FROM class");
        while ($row = $res->fetch_assoc()) {
          echo "<option value='{$row['Class_id']}'>{$row['Name']}</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Date</label>
      <input type="date" class="form-control" name="date" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Status</label>
      <select class="form-select" name="status" required>
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Remarks</label>
      <input type="text" class="form-control" name="remarks">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>
</body>
</html>
