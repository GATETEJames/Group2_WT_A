<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* NIYOGITANGAZA YVETTE-222010460 */

    $stmt = $conn->prepare("INSERT INTO article(userid,title,contents,dateofcreation) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $userid, $title, $contents, $dateofcreation);
    // Set parameters and execute
    $userid = $_POST['userid'];
    $title = $_POST['title'];
    $contents = $_POST['content'];
    $dateofcreation = $_POST['doc'];
    if ($stmt->execute() == TRUE) {
        echo "New record has been added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>