<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bill_id = $_POST['bill_id'];
    $booking_id = $_POST['booking_id'];
    $bill_date = $_POST['bill_date'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO bill_master (bill_id, booking_id, bill_date, status, created_date, created_by)
            VALUES (:bill_id, :booking_id, :bill_date, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':bill_id' => $bill_id,
        ':booking_id' => $booking_id,
        ':bill_date' => $bill_date,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Bill master information added successfully.";
}
?>
