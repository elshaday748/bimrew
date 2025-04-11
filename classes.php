<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Classes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>All Classes</h2>
  <form method="GET" class="mb-3">
    <input type="text" name="search" class="form-control" placeholder="Search by Class Name..." value="<?= $_GET['search'] ?? '' ?>">
  </form>
  <table class="table table-bordered table-hover">
    <thead class="table-primary">
      <tr>
        <th>ID</th><th>Name</th><th>Capacity</th><th>Classroom</th><th>Timetable</th><th>Start Date</th><th>End Date</th><th>Teacher</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
<?php
$search = $_GET['search'] ?? '';
$query = "SELECT c.Class_id, c.Name, c.Capacity, c.Classroom_Number, c.Class_Timetable, c.Class_Start_Date, c.Class_End_Date, t.First_name, t.Last_name 
          FROM class c
          JOIN teacher t ON c.Teacher_id = t.Teacher_id
          WHERE c.Name LIKE '%$search%'";

$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['Class_id']}</td>
    <td>{$row['Name']}</td>
    <td>{$row['Capacity']}</td>
    <td>{$row['Classroom_Number']}</td>
    <td>{$row['Class_Timetable']}</td>
    <td>{$row['Class_Start_Date']}</td>
    <td>{$row['Class_End_Date']}</td>
    <td>{$row['First_name']} {$row['Last_name']}</td>
    <td>
      <a href='edit_class.php?id={$row['Class_id']}' class='btn btn-sm btn-warning'>Edit</a>
      <a href='delete_class.php?id={$row['Class_id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete?\")'>Delete</a>
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
