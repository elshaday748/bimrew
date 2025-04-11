<?php
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM pupils WHERE Pupil_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
  header("Location: pupils.php");
} else {
  echo "Error: " . $stmt->error;
}
$conn->close();
?>
