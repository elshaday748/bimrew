<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Teachers</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>Teachers</h2>
  <form method="GET" class="mb-3">
    <input type="text" name="search" class="form-control" placeholder="Search by Name..." value="<?= $_GET['search'] ?? '' ?>">
  </form>
  <table class="table table-bordered table-hover">
    <thead class="table-primary">
      <tr>
        <th>ID</th><th>First</th><th>Last</th><th>DOB</th><th>Gender</th><th>Subjects</th><th>Address</th>
        <th>Phone</th><th>Experience</th><th>Salary</th><th>Check</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
<?php
$search = $_GET['search'] ?? '';
$query = "SELECT * FROM teacher WHERE First_name LIKE '%$search%' OR Last_name LIKE '%$search%'";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['Teacher_id']}</td>
    <td>{$row['First_name']}</td>
    <td>{$row['Last_name']}</td>
    <td>{$row['Date_of_Birth']}</td>
    <td>{$row['Gender']}</td>
    <td>{$row['Subjects_Taught']}</td>
    <td>{$row['Address']}</td>
    <td>{$row['Phone_number']}</td>
    <td>{$row['Years_of_Experience']}</td>
    <td>{$row['Annual_salary']}</td>
    <td>{$row['Background_Check']}</td>
    <td>
      <a href='edit_teacher.php?id={$row['Teacher_id']}' class='btn btn-sm btn-warning'>Edit</a>
      <a href='delete_teacher.php?id={$row['Teacher_id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete?\")'>Delete</a>
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
