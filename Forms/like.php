<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // DONE BY NIYOGITANGAZA YVETTE-222010460
    $stmt = $conn->prepare("INSERT INTO likes(lid, commentid, userid) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $lid, $commentid, $userid);
    $lid = $_POST['lid'];
    $commentid = $_POST['commentid'];
    $userid = $_POST['userid'];
   
    if ($stmt->execute()) {
        echo "New record has been added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
else {
        echo "Error: User ID does not exist";
    }
$conn->close();
?>

