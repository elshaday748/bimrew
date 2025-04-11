<?php
include 'db.php';

$sql = "UPDATE parents SET 
  First_name = ?, 
  Last_name = ?, 
  Address = ?, 
  Phone_number = ?, 
  Email = ?
  WHERE Parent_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi",
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['address'],
  $_POST['phone_number'],
  $_POST['email'],
  $_POST['parent_id']
);

if ($stmt->execute()) {
  header("Location: parents.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
