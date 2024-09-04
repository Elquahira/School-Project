<?php
include 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $job_title = $_POST['job_title'];
    $status = $_POST['status'];
    $created_by = $_POST['created_by'];
    $created_date = $_POST['created_date'];

    // Prepare SQL query
    $sql = "INSERT INTO jobs (job_title, status, created_by, created_date)
            VALUES (:job_title, :status, :created_by, :created_date)";
    $stmt = $pdo->prepare($sql);

    // Execute query with bound parameters
    try {
        $stmt->execute([
            ':job_title' => $job_title,
            ':status' => $status,
            ':created_by' => $created_by,
            ':created_date' => $created_date
        ]);
        echo "Job information added successfully.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
