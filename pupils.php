<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pupils List</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Pupils List</h2>

    <form class="mb-3" method="GET">
      <input type="text" name="search" class="form-control" placeholder="Search by name...">
    </form>

    <table class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>DOB</th>
          <th>Gender</th>
          <th>Class</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $search = $_GET['search'] ?? '';
        $sql = "SELECT p.*, c.Name AS ClassName FROM pupils p
                LEFT JOIN class c ON p.Class_id = c.Class_id
                WHERE p.First_name LIKE '%$search%' OR p.Last_name LIKE '%$search%'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['Pupil_id']}</td>
                  <td>{$row['First_name']} {$row['Last_name']}</td>
                  <td>{$row['Date_of_Birth']}</td>
                  <td>{$row['Gender']}</td>
                  <td>{$row['ClassName']}</td>
                  <td>
                    <a href='edit_pupil.php?id={$row['Pupil_id']}' class='btn btn-sm btn-warning'>Edit</a>
                    <a href='delete_pupil.php?id={$row['Pupil_id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete this pupil?\")'>Delete</a>
                  </td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
