<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add New Parent</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Add New Parent</h2>
    <form action="insert_parent.php" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="address" class="form-control" placeholder="Address" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="col-md-6 mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save Parent</button>
    </form>
  </div>
</body>
</html>
