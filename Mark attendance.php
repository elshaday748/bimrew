<?php
require_once "school.php"; // Ensure this file has $conn = new mysqli(...)

// Fetch pupils and classes
$pupils_result = mysqli_query($conn, "SELECT Pupil_ID, First_Name, Last_Name FROM PUPILS");
$attendance_result = mysqli_query($conn, "SELECT * FROM ATTENDANCES");

// Form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pupil_id = $_POST["pupil_id"];
    $class_id = $_POST["class_id"];
    $date = $_POST["date"];
    $status = $_POST["status"];
    $remarks = $_POST["remarks"] ?? null;

    $stmt = $conn->prepare("INSERT INTO ATTENDANCES (Pupil_ID, Class_ID, Date, Status, Remarks) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisss", $pupil_id, $class_id, $date, $status, $remarks);

    if ($stmt->execute()) {
        $message = "✅ Attendance recorded successfully.";
    } else {
        $message = "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch pupils for dropdown in attendance form
$pupils_for_select = mysqli_query($conn, "SELECT * FROM PUPILS");
$classes_for_select = mysqli_query($conn, "SELECT * FROM CLASSES");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        label { display: block; margin-top: 15px; font-weight: bold; }
        select, input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            margin-top: 25px;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        .msg {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .success { background-color: #e6ffed; color: #1d643b; }
        .error { background-color: #ffe6e6; color: #a00; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .actions a {
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Record Attendance</h2>

        <?php if (!empty($message)): ?>
            <div class="msg <?= strpos($message, '✅') !== false ? 'success' : 'error' ?>">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="pupil_id">Pupil</label>
            <select name="pupil_id" required>
                <option value="">-- Select Pupil --</option>
                <?php while ($pupil = mysqli_fetch_assoc($pupils_for_select)): ?>
                    <option value="<?= $pupil['Pupil_ID'] ?>">
                        <?= $pupil['First_Name'] . " " . $pupil['Last_Name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <label for="class_id">Class</label>
            <select name="class_id" required>
                <option value="">-- Select Class --</option>
                <?php while ($class = mysqli_fetch_assoc($classes_for_select)): ?>
                    <option value="<?= $class['Class_ID'] ?>"><?= $class['Name'] ?></option>
                <?php endwhile; ?>
            </select>

            <label for="date">Date</label>
            <input type="date" name="date" required>

            <label for="status">Status</label>
            <select name="status" required>
                <option value="">-- Select Status --</option>
                <option value="Present">Present</option>
                <option value="Illness">Illness</option>
                <option value="Medical Appointment">Medical Appointment</option>
                <option value="Authorised Absence">Authorised Absence</option>
                <option value="Unauthorised Absence">Unauthorised Absence</option>
                <option value="Late">Late</option>
            </select>

            <label for="remarks">Remarks (optional)</label>
            <textarea name="remarks" rows="3" placeholder="Enter remarks if applicable"></textarea>

            <button type="submit">Submit Attendance</button>
        </form>

        <h3>Attendance Records</h3>
        <table>
            <thead>
                <tr>
                    <th>Attendance ID</th>
                    <th>Pupil ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($attendance = mysqli_fetch_assoc($attendance_result)): ?>
                    <tr>
                        <td><?= $attendance['Attendance_ID'] ?></td>
                        <td><?= $attendance['Pupil_ID'] ?></td>
                        <td><?= $attendance['Date'] ?></td>
                        <td><?= $attendance['Status'] ?></td>
                        <td><?= $attendance['Remarks'] ?: 'No remarks' ?></td>
                        <td class="actions">
                            <a href="edit_attendance.php?id=<?= $attendance['Attendance_ID'] ?>">Edit</a>
                            <a href="delete_attendance.php?id=<?= $attendance['Attendance_ID'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
