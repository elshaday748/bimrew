<?php
include 'db.php';

if (isset($_GET['id'])) {
    $ta_id = $_GET['id'];
    
    // Fetch the TA details
    $query = "SELECT * FROM teaching_assistant WHERE TA_ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $ta_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $ta = $result->fetch_assoc();
    } else {
        echo "TA not found!";
        exit;
    }
} else {
    echo "TA_ID is required!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Teaching Assistant</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>Edit Teaching Assistant</h2>
  <form action="update_ta.php" method="POST">
    <input type="hidden" name="ta_id" value="<?= $ta['TA_ID'] ?>">
    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" value="<?= $ta['First_Name'] ?>" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="<?= $ta['Last_Name'] ?>" required>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Class ID</label>
        <input type="number" name="class_id" class="form-control" value="<?= $ta['Class_ID'] ?>" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Teaching Assistant</button>
  </form>
</div>
</body>
</html>
