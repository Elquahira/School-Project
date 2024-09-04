<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $job_id = $_POST['job_id'];
    $job_title = $_POST['job_title'];
    $status = $_POST['status'];
    $created_by = $_POST['created_by'];
    $created_date = $_POST['created_date'];

    $sql = "INSERT INTO job_info (job_id, job_title, status, created_by, created_date)
            VALUES (:job_id, :job_title, :status, :created_by, :created_date)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':job_id' => $job_id,
        ':job_title' => $job_title,
        ':status' => $status,
        ':created_by' => $created_by,
        ':created_date' => $created_date
    ]);

    echo "Job information added successfully.";
}
?>