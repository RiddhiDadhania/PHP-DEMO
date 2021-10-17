<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM riddhi WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location:display.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
    
  }
  
  mysqli_close($conn);
