<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ta_id = $_POST['ta_id'];
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $class_id = intval($_POST['class_id']);

    if (!empty($first_name) && !empty($last_name) && $class_id > 0) {
        $sql = "UPDATE teaching_assistant SET First_Name = ?, Last_Name = ?, Class_ID = ? WHERE TA_ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $first_name, $last_name, $class_id, $ta_id);

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
