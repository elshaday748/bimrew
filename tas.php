<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Teaching Assistants</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>All Teaching Assistants</h2>
  <a href="add_ta.php" class="btn btn-success mb-3">Add New TA</a>
  <table class="table table-bordered table-striped">
    <thead class="table-primary">
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Class ID</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM teaching_assistant");
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['TA_ID'] ?></td>
        <td><?= $row['First_Name'] ?></td>
        <td><?= $row['Last_Name'] ?></td>
        <td><?= $row['Class_ID'] ?></td>
        <td>
          <a href="edit_ta.php?id=<?= $row['TA_ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="delete_ta.php?id=<?= $row['TA_ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
