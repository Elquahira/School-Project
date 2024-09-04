<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_id = $_POST['service_id'];
    $service_name = $_POST['service_name'];
    $service_charge = $_POST['service_charge'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO services (service_id, service_name, service_charge, status, created_date, created_by)
            VALUES (:service_id, :service_name, :service_charge, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':service_id' => $service_id,
        ':service_name' => $service_name,
        ':service_charge' => $service_charge,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Service information added successfully.";
}
?>
