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
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required>
        </div>
        <div class="col-md-6 mb-3">
          <select name="gender" class="form-control" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div class="col-md-12 mb-3">
          <input type="text" name="address" class="form-control" placeholder="Address" required>
        </div>
        <div class="col-md-12 mb-3">
          <textarea name="medical_history" class="form-control" placeholder="Medical History"></textarea>
        </div>
        <div class="col-md-6 mb-3">
          <select name="class_id" class="form-control" required>
            <option value="">Select Class</option>
            <?php
            $classes = $conn->query("SELECT Class_id, Name FROM class");
            while ($c = $classes->fetch_assoc()) {
              echo "<option value='{$c['Class_id']}'>{$c['Name']}</option>";
            }
            ?>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <input type="date" name="admission_date" class="form-control" placeholder="Admission Date" required>
        </div>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save Pupil</button>
      </div>
    </form>
  </div>
</body>
</html>
