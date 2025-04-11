<?php
include 'db.php';
$id = $_GET['id']; // Retrieve the ID of the teacher to delete

// Prepare SQL query to delete the teacher
$sql = "DELETE FROM teacher WHERE Teacher_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id); // Bind the ID parameter

// Execute the query and check if it was successful
if ($stmt->execute()) {
    header("Location: teachers.php"); // Redirect to the teacher list page after successful deletion
} else {
    echo "Error: " . $stmt->error; // Display an error message if the query fails
}

$conn->close(); // Close the database connection
?>
