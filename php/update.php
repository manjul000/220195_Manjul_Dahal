<?php
include("db.php");

$sql = "UPDATE customer SET Last_Name='Pandey' WHERE Customer_ID=2";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>