<?php
include 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $emp_name = $_POST['emp_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $nationality = $_POST['nationality'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];
    $dept_id = $_POST['dept_id'];
    $job_id = $_POST['job_id'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];

    // Prepare SQL query
    $sql = "INSERT INTO employees (emp_name, last_name, address, status, nationality, created_date, created_by, dept_id, job_id, gender, marital_status)
            VALUES (:emp_name, :last_name, :address, :status, :nationality, :created_date, :created_by, :dept_id, :job_id, :gender, :marital_status)";
    $stmt = $pdo->prepare($sql);

    // Execute query with bound parameters
    try {
        $stmt->execute([
            ':emp_name' => $emp_name,
            ':last_name' => $last_name,
            ':address' => $address,
            ':status' => $status,
            ':nationality' => $nationality,
            ':created_date' => $created_date,
            ':created_by' => $created_by,
            ':dept_id' => $dept_id,
            ':job_id' => $job_id,
            ':gender' => $gender,
            ':marital_status' => $marital_status
        ]);
        echo "Employee information added successfully.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
