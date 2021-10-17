<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO riddhi (username, password)
VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: display.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>