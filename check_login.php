<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
  if (password_verify($password, $row['password'])) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // Redirect to protected page
  } else {
    echo "❌ Incorrect password.";
  }
} else {
  echo "❌ Username not found.";
}
$conn->close();
?>
