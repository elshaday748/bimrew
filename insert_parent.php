<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $sql = "INSERT INTO parents (First_name, Last_name, Address, Phone_number, Email) 
          VALUES (?, ?, ?, ?, ?)";

  if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("sssss", $first_name, $last_name, $address, $phone, $email);

    if ($stmt->execute()) {
      header("Location: parents.php"); // Redirect to a page that shows all parents
    } else {
      echo "Error: " . $stmt->error;
    }
    $stmt->close();
  } else {
    echo "Error preparing statement: " . $conn->error;
  }

  $conn->close();
}
?>
