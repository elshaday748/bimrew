<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Teaching Assistant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Add New Teaching Assistant</h2>
  <form action="insert_ta.php" method="post">
    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input type="text" name="first_name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Last Name</label>
      <input type="text" name="last_name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Class ID</label>
      <select name="class_id" class="form-select" required>
        <option value="">Select Class</option>
        <?php
        $result = $conn->query("SELECT Class_id, Name FROM class");
        while ($row = $result->fetch_assoc()) {
          echo "<option value='{$row['Class_id']}'>{$row['Name']}</option>";
        }
        ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Add TA</button>
  </form>
</div>
</body>
</html>
