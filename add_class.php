<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Class</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #e0f7fa; 
    }
    
    .container {
      background-color: #ffffff; 
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #0277bd; 
    }

    .form-control {
      background-color: #f1f8e9; 
    }

    .btn-primary {
      background-color: #0288d1; 
      border-color: #0288d1;
    }

    .btn-primary:hover {
      background-color: #0277bd;
      border-color: #0277bd;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <h2>Add New Class</h2>
    <form action="insert_class.php" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" name="name" class="form-control" placeholder="Class Name" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="number" name="capacity" class="form-control" placeholder="Class Capacity" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="classroom_number" class="form-control" placeholder="Classroom Number" required>
        </div>
        <div class="col-md-6 mb-3">
          <textarea name="class_timetable" class="form-control" placeholder="Class Timetable" required></textarea>
        </div>
        <div class="col-md-6 mb-3">
          <input type="date" name="class_start_date" class="form-control" placeholder="Class Start Date" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="date" name="class_end_date" class="form-control" placeholder="Class End Date" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="subject_offered" class="form-control" placeholder="Subject Offered" required>
        </div>
        <div class="col-md-6 mb-3">
          <select name="teacher_id" class="form-control" required>
            <option value="">Select Teacher</option>
            <?php
            $result = $conn->query("SELECT Teacher_id, First_name, Last_name FROM teacher");
            while ($row = $result->fetch_assoc()) {
              echo "<option value='{$row['Teacher_id']}'>{$row['First_name']} {$row['Last_name']}</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save Class</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
