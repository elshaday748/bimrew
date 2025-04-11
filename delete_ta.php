<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM teaching_assistant WHERE TA_ID = $id");

header("Location: tas.php");
?>
