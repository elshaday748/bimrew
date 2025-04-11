<?php
include 'db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM teaching_assistant WHERE TA_ID = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Teaching Assistant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Teaching Assistant</h2>
  <form action="update_ta.php" method="post">
    <input type="hidden" name="ta_id" value="<?= $row['TA_ID'] ?>">

    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="first_name" value="<?= $row['First_Name'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="last_name" value="<?= $row['Last_Name'] ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Class ID</label>
      <select name="class_id" class="form-select" required>
        <?php
        $classResult = $conn->query("SELECT * FROM class");
        while ($class = $classResult->fetch_assoc()) {
          $selected = $class['Class_id'] == $row['Class_ID'] ? "selected" : "";
          echo "<option value='{$class['Class_id']}' $selected>{$class['Name']}</option>";
        }
        ?>
      </select>
    </div>

    <button type="submit" class="btn btn-success">Update TA</button>
  </form>
</div>
</body>
</html>
