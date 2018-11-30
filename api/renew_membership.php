<?php
include './config/config.php';

$sql = "UPDATE `members` SET `feko` = NOW(), `renewal_date` = DATE_ADD(NOW(), INTERVAL 1 YEAR), `next_membership` = DATE_ADD(NOW(), INTERVAL 1 YEAR) WHERE `members`.`id` = ".$_POST['id'].";";
if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();
?>