<?php
include 'db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM parents WHERE Parent_id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Parent</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Parent</h2>
  <form action="update_parent.php" method="post">
    <input type="hidden" name="parent_id" value="<?= $row['Parent_id'] ?>">

    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?= $row['First_name'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="last_name" value="<?= $row['Last_name'] ?>" required>
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
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" value="<?= $row['Email'] ?>">
    </div>

    <button type="submit" class="btn btn-success">Update Parent</button>
  </form>
</div>
</body>
</html>
