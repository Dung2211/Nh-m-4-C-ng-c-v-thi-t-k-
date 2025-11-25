<?php
require "db.php";

$name = $_POST["name"];
$gender = $_POST["gender"];
$position = $_POST["position"];
$phone = $_POST["phone"];
$status = $_POST["status"];

// KIỂM TRA SỐ ĐIỆN THOẠI TỒN TẠI
$phone = $_POST['phone'];

$check = $conn->query("SELECT id FROM employees WHERE phone = '$phone'");
if ($check->num_rows > 0) {
    echo json_encode(["status" => "exist"]);
    exit;
}


$sql = "INSERT INTO employees (name, gender, position, phone, status)
        VALUES ('$name', '$gender', '$position', '$phone', '$status')";

if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}

?>
