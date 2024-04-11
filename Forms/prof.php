<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024"; 
$conn = new mysqli($servername, $username, $password, $dbname);
//DONE BY NIYOGITANGAZA YVETTE-222010460
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$campus = $_POST['Campus'];
$college = $_POST['College'];
$school = $_POST['School'];
$department = $_POST['department'];
$level = $_POST['Level'];
$group = $_POST['GroupName'];
$regnumber = $_POST['Regnumber'];
$message = $_POST['message'];

$sql = "INSERT INTO profile (Campus, College, School, Department, Level, GroupName, Regnumber)
        VALUES ('$campus', '$college', '$school', '$department', '$level', '$group', '$regnumber')";

if ($conn->query($sql) === TRUE) {
    echo "Data recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
