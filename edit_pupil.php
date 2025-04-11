<?php
include 'db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM pupils WHERE Pupil_id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Pupil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Pupil</h2>
  <form action="update_pupil.php" method="post">
    <input type="hidden" name="pupil_id" value="<?= $row['Pupil_id'] ?>">

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
      <label class="form-label">Address</label>
      <input type="text" class="form-control" name="address" value="<?= $row['Address'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Medical History</label>
      <textarea class="form-control" name="medical_history"><?= $row['Medical_History'] ?></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Admission Date</label>
      <input type="date" class="form-control" name="admission_date" value="<?= $row['Admission_Date'] ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Class ID</label>
      <input type="number" class="form-control" name="class_id" value="<?= $row['Class_id'] ?>">
    </div>

    <button type="submit" class="btn btn-success">Update Pupil</button>
  </form>
</div>
</body>
</html>
