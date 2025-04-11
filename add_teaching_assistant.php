<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add New Teaching Assistant</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>Add New Teaching Assistant</h2>
  <form action="insert_ta.php" method="POST">
    <div class="row">
      <div class="col-md-6 mb-3">
        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
      </div>
      <div class="col-md-6 mb-3">
        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
      </div>
      <div class="col-md-6 mb-3">
        <input type="number" name="class_id" class="form-control" placeholder="Class ID" required>
      </div>
    </div>
    <button type="submit" class="btn btn-success">Add TA</button>
  </form>
</div>
</body>
</html>
