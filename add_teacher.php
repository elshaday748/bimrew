<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Teacher</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>Add New Teacher</h2>
  <form action="insert_teacher.php" method="POST">
    <div class="row">
      <div class="col-md-6 mb-3"><input type="text" name="first_name" class="form-control" placeholder="First Name" required></div>
      <div class="col-md-6 mb-3"><input type="text" name="last_name" class="form-control" placeholder="Last Name" required></div>
      <div class="col-md-6 mb-3"><input type="date" name="dob" class="form-control" placeholder="Date of Birth" required></div>
      <div class="col-md-6 mb-3">
        <select name="gender" class="form-control" required>
          <option value="">Select Gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="col-md-6 mb-3"><input type="text" name="subjects_taught" class="form-control" placeholder="Subjects Taught" required></div>
      <div class="col-md-6 mb-3"><input type="text" name="address" class="form-control" placeholder="Address" required></div>
      <div class="col-md-6 mb-3"><input type="text" name="phone" class="form-control" placeholder="Phone Number" required></div>
      <div class="col-md-6 mb-3"><input type="number" name="experience" class="form-control" placeholder="Years of Experience" required></div>
      <div class="col-md-6 mb-3"><input type="number" step="0.01" name="salary" class="form-control" placeholder="Annual Salary" required></div>
      <div class="col-md-6 mb-3"><input type="text" name="background" class="form-control" placeholder="Background Check" required></div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
</body>
</html>
