<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* NIYOGITANGAZA YVETTE-222010460 */


    $stmt = $conn->prepare("INSERT INTO comment(contentid,userid) VALUES ( ?, ?)");
    $stmt->bind_param("ss", $contentid, $userid);
 
    $contentid = $_POST['contentid'];
    $userid = $_POST['userid'];
   
    if ($stmt->execute() == TRUE) {
        echo "New record has been added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
