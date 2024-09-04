<?php
include 'connect.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $booking_id = $_POST['booking_id'];
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    // Prepare SQL query with placeholders
    $sql = "INSERT INTO advance ( Booking_id, Amount, Payment_date, Created_date, Created_by)
            VALUES (:booking_id, :amount, :payment_date, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);

    // Execute query with bound parameters
    try {
        $stmt->execute([
            ':booking_id' => $booking_id,
            ':amount' => $amount,
            ':payment_date' => $payment_date,
            ':created_date' => $created_date,
            ':created_by' => $created_by
        ]);
        echo "Advance payment information added successfully.";
        echo "<script>window.open('staff dashboard.html','_self')</script>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

