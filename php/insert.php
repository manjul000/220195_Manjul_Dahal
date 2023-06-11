<?php

include ("db.php");

$sql = "INSERT INTO customer (First_Name, Last_Name, Email, Phone_Number, Address )
VALUES ('Narendra', 'Maharjan ', 'narendar@gmail.com','984125632', 'Thapathali')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>