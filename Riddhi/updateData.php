<?php
include 'db.php';
$id =$_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE riddhi SET username='$username', password='$password'  WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
  header("Location:display.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
