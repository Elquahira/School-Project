<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dept_id = $_POST['dept_id'];
    $dept_name = $_POST['dept_name'];
    $dept_desc = $_POST['dept_desc'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO department_info (dept_id, dept_name, dept_desc, status, created_date, created_by)
            VALUES (:dept_id, :dept_name, :dept_desc, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':dept_id' => $dept_id,
        ':dept_name' => $dept_name,
        ':dept_desc' => $dept_desc,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Department information added successfully.";
}
?>
