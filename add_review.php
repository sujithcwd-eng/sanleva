<?php
include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $conn->real_escape_string($data['name']);
$rating = (int)$data['rating'];
$text = $conn->real_escape_string($data['text']);

$sql = "INSERT INTO reviews (name, rating, text)
        VALUES ('$name', '$rating', '$text')";

if ($conn->query($sql)) {
    echo "success";
} else {
    echo "error";
}

$conn->close();
?>