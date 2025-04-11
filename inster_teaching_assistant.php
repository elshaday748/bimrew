<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $class_id = intval($_POST['class_id']);

    if (!empty($first_name) && !empty($last_name) && $class_id > 0) {
        $sql = "INSERT INTO teaching_assistant (First_Name, Last_Name, Class_ID) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $first_name, $last_name, $class_id);

        if ($stmt->execute()) {
            header("Location: view_teaching_assistants.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Please fill in all fields correctly.";
    }
}
?>
