<?php
include 'db.php';

$sql = "SELECT Parent_id, First_name, Last_name, Address, Phone_number, Email FROM parents";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Parents</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>All Parents</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Parent ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row['Parent_id']; ?></td>
            <td><?php echo $row['First_name']; ?></td>
            <td><?php echo $row['Last_name']; ?></td>
            <td><?php echo $row['Address']; ?></td>
            <td><?php echo $row['Phone_number']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td>
              <a href="edit_parent.php?id=<?php echo $row['Parent_id']; ?>" class="btn btn-warning">Edit</a>
              <a href="delete_parent.php?id=<?php echo $row['Parent_id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="add_parent.php" class="btn btn-primary">Add New Parent</a>
  </div>
</body>
</html>
