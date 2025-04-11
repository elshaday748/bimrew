<?php
session_start();

$host = "localhost"; 
$username = "pupils_id";
$password = "loging";  
$dbname = "school_db"; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user; 
        header("Location: index.php");  
        exit();
    } else {
        echo "<script>alert('Invalid username or password.'); window.location.href = 'login.php';</script>";
    }
}

$conn->close();
?>
