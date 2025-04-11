<?php
include 'db.php';

if (isset($_GET['id'])) {
  $parent_id = $_GET['id'];

  $sql = "DELETE FROM parents WHERE Parent_id = ?";
  if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $parent_id);
    
    if ($stmt->execute()) {
      header("Location: parents.php");
    } else {
      echo "Error: " . $stmt->error;
    }
    $stmt->close();
  } else {
    echo "Error preparing statement: " . $conn->error;
  }

  $conn->close();
} else {
  echo "No ID provided.";
}
?>
