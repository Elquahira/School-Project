<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $invoice_id = $_POST['invoice_id'];
    $service_id = $_POST['service_id'];
    $room_id = $_POST['room_id'];
    $sub_total = $_POST['sub_total'];
    $paid = $_POST['paid'];
    $status = $_POST['status'];
    $due_to = $_POST['due_to'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    // SQL statement to insert data into the table
    $sql = "INSERT INTO invoice (invoice_id, service_id, room_id, sub_total, paid, status, due_to, created_date, created_by)
            VALUES (:invoice_id, :service_id, :room_id, :sub_total, :paid, :status, :due_to, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':invoice_id' => $invoice_id,
        ':service_id' => $service_id,
        ':room_id' => $room_id,
        ':sub_total' => $sub_total,
        ':paid' => $paid,
        ':status' => $status,
        ':due_to' => $due_to,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Invoice information added successfully.";
    echo "<script>window.open('staff dashboard.html','_self')</script>";
}
?>
