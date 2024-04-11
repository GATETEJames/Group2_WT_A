<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* NIYOGITANGAZA YVETTE-222010460 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
    $stmt = $conn->prepare("INSERT INTO role(rid, userid, rolename) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $rid, $userid, $rolename);
    // Set parameters and execute
    $rid = $_POST['rid'];
    $userid = $_POST['userid'];
    $rolename = $_POST['rolename'];
   
    if ($stmt->execute() == TRUE) {
        echo "New record has been added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
