<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $advance_id = $_POST['advance_id'];
    $booking_id = $_POST['booking_id'];
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO advance (advance_id, booking_id, amount, payment_date, status, created_date, created_by)
            VALUES (:advance_id, :booking_id, :amount, :payment_date, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':advance_id' => $advance_id,
        ':booking_id' => $booking_id,
        ':amount' => $amount,
        ':payment_date' => $payment_date,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Advance payment information added successfully.";
}
?>
