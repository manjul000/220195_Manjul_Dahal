<?php
include("db.php");

// prepare and bind
$stmt = $conn->prepare("INSERT INTO customer (First_Name, Last_Name, Email, Phone_number, Address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $First_Name, $Last_Name, $Email, $Phone_number, $Address);

// set parameters and execute
$First_Name="Anamol";
$Last_Name="Shrestha";
$Email="anamol@gmail.com";
$Phone_number=9841256535;
$Address="Sukedhara";
$stmt->execute();

$First_Name="Nisha";
$Last_Name="Pandey";
$Email="pandey@gmail.com";
$Phone_number=9841256515;
$Address="Tathali";
$stmt->execute();

$First_Name="Chandan";
$Last_Name="Yadav";
$Email="yadnav123@gmail.com";
$Phone_number=9841256544;
$Address="Baneshwor";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>