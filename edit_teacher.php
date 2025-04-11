<?php
include 'db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM teacher WHERE Teacher_id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Teacher</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Teacher</h2>
  <form action="update_teacher.php" method="post">
    <input type="hidden" name="teacher_id" value="<?= $row['Teacher_id'] ?>">

    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?= $row['First_name'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="last_name" value="<?= $row['Last_name'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Date of Birth</label>
      <input type="date" class="form-control" name="dob" value="<?= $row['Date_of_Birth'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Gender</label>
      <select class="form-control" name="gender" required>
        <option value="Male" <?= $row['Gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
        <option value="Female" <?= $row['Gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Subjects Taught</label>
      <input type="text" class="form-control" name="subjects_taught" value="<?= $row['Subjects_Taught'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Address</label>
      <input type="text" class="form-control" name="address" value="<?= $row['Address'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Phone Number</label>
      <input type="text" class="form-control" name="phone_number" value="<?= $row['Phone_number'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Years of Experience</label>
      <input type="number" class="form-control" name="experience" value="<?= $row['Years_of_Experience'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Annual Salary</label>
      <input type="number" class="form-control" step="0.01" name="salary" value="<?= $row['Annual_salary'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Background Check</label>
      <input type="text" class="form-control" name="background_check" value="<?= $row['Background_Check'] ?>">
    </div>

    <button type="submit" class="btn btn-success">Update Teacher</button>
  </form>
</div>
</body>
</html>
