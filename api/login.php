<?php
include './config/config.php';

$sql = "Select * from users where email = '" . $_POST["email"] ."' and password = '" . $_POST['password'] ."';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_type'] = $row['user_type'];
    }
    header("Location: ./../dashboard.php");
} else {
    header("Location: ./../login.php?status=invalid");
}
$conn->close();
?>