<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Teaching Assistants</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>Teaching Assistants</h2>
  <form method="GET" class="mb-3">
    <input type="text" name="search" class="form-control" placeholder="Search by Name..." value="<?= $_GET['search'] ?? '' ?>">
  </form>
  <table class="table table-bordered table-hover">
    <thead class="table-info">
      <tr>
        <th>TA ID</th><th>First Name</th><th>Last Name</th><th>Class ID</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
<?php
$search = $_GET['search'] ?? '';
$query = "SELECT * FROM teaching_assistant WHERE First_Name LIKE '%$search%' OR Last_Name LIKE '%$search%'";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['TA_ID']}</td>
    <td>{$row['First_Name']}</td>
    <td>{$row['Last_Name']}</td>
    <td>{$row['Class_ID']}</td>
    <td>
      <a href='edit_ta.php?id={$row['TA_ID']}' class='btn btn-sm btn-warning'>Edit</a>
      <a href='delete_ta.php?id={$row['TA_ID']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete this TA?\")'>Delete</a>
    </td>
  </tr>";
}
$conn->close();
?>
    </tbody>
  </table>
</div>
</body>
</html>
