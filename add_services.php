<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $service = $_POST['service'];  // Adjusted to match your schema
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    // Adjusted SQL query to reflect the correct table name and column names
    $sql = "INSERT INTO services (Service_name, Service, Status, Created_date, Created_by)
            VALUES (:service_name, :service, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':service_name' => $service_name,
        ':service' => $service,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Service information added successfully.";
    echo "<script>window.open('staff dashboard.html','_self')</script>";
}
?>
