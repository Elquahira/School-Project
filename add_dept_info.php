<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $dept_name = $_POST['dept_name'];
    $dept_desc = $_POST['dept_desc'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO departments(Dept_name, Dept_description, Status, Created_date, Created_by)
            VALUES (:dept_name, :dept_desc, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        
        ':dept_name' => $dept_name,
        ':dept_desc' => $dept_desc,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Department information added successfully.";
    echo "<script>window.open('Admindashboard.php','_self')</script>";
}
?>
