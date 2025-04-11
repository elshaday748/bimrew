<?php
include 'db.php';

// Get the TA_ID from the URL
$ta_id = $_GET['id'] ?? null;

if (!$ta_id) {
    echo "TA_ID is required!";
    exit;
}

// Prepare SQL query to delete the TA from the database
$sql = "DELETE FROM teaching_assistant WHERE TA_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $ta_id);

if ($stmt->execute()) {
    header("Location: view_teaching_assistants.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>
