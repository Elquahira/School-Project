<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_type_id = $_POST['room_type_id'];
    $no_of_bed = $_POST['no_of_bed'];
    $type_name = $_POST['type_name'];
    $status = $_POST['status'];
    $created_date = $_POST['created_date'];
    $created_by = $_POST['created_by'];

    $sql = "INSERT INTO room_type_info (room_type_id, no_of_bed, type_name, status, created_date, created_by)
            VALUES (:room_type_id, :no_of_bed, :type_name, :status, :created_date, :created_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':room_type_id' => $room_type_id,
        ':no_of_bed' => $no_of_bed,
        ':type_name' => $type_name,
        ':status' => $status,
        ':created_date' => $created_date,
        ':created_by' => $created_by
    ]);

    echo "Room type information added successfully.";
}
?>
