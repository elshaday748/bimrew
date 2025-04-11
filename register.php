<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing

    $sql = "INSERT INTO login (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
      echo "✅ User registered successfully! <a href='login.php'>Login</a>";
    } else {
      echo "❌ Error: " . $stmt->error;
    }
    $conn->close();
  } else {
    echo "❗ Both fields are required.";
  }
} else {
  echo "⚠️ Please submit the form.";
}
?>
