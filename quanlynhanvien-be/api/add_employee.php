<?php
require "db.php";

$name = $_POST["name"];
$gender = $_POST["gender"];
$position = $_POST["position"];
$phone = $_POST["phone"];
$status = $_POST["status"];

$sql = "INSERT INTO employees (name, gender, position, phone, status)
        VALUES ('$name', '$gender', '$position', '$phone', '$status')";

if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
