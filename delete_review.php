<?php
include "db.php";

$id = (int)$_GET['id'];

$conn->query("DELETE FROM reviews WHERE id=$id");

echo "deleted";

$conn->close();
?>