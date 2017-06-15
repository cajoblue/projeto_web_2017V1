<?php
include 'connect.php';

$hash=$_GET['hash'];

$sql = "DELETE a.*, b.* FROM  message_group a
INNER JOIN messages b ON a.hash = b.group_hash
WHERE a.hash='$hash';";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
