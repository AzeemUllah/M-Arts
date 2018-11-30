<?php
include './config/config.php';

$sql = "DELETE FROM `members` where id = '". $_POST['id']."';";

if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();
?>