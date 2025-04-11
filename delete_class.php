<?php
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM class WHERE Class_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
  header("Location: classes.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
