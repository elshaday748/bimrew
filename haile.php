<?php
// db.php - Database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'SchoolDB';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SchoolDB</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="pupils.php">Pupils</a></li>
          <li class="nav-item"><a class="nav-link" href="add_pupil.php">Add Pupil</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-4">
    <h1>Welcome to School Management System</h1>
  </div>
</body>
</html>

<!-- add_pupil.php -->
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Pupil</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Add New Pupil</h2>
    <form action="insert_pupil.php" method="POST">
      <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" required>
      </div>
      <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" required>
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" name="gender" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="class_id" class="form-label">Class ID</label>
        <input type="number" class="form-control" id="class_id" name="class_id" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Pupil</button>
    </form>
  </div>
</body>
</html>

<!-- insert_pupil.php -->
<?php
include 'db.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$class_id = $_POST['class_id'];

$sql = "INSERT INTO Pupils (First_name, Last_name, Gender, Class_id) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $fname, $lname, $gender, $class_id);

if ($stmt->execute()) {
  echo "<script>alert('Pupil added successfully'); window.location.href='pupils.php';</script>";
} else {
  echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>

<!-- pupils.php -->
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
    <h2>List of Pupils</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Class ID</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM Pupils");
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['Pupil_id']}</td>
                  <td>{$row['First_name']}</td>
                  <td>{$row['Last_name']}</td>
                  <td>{$row['Gender']}</td>
                  <td>{$row['Class_id']}</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
