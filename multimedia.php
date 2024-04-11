<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";
$conn = new mysqli($servername, $username, $password, $dbname);


 /* NIYOGITANGAZA YVETTE-222010460 */

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //prere and bind the parameters
    $stmt = $conn->prepare("INSERT INTO multimedia(userid,type,location,upload_date) VALUES (?,?,?,?)");
    
    $stmt ->bind_param("ssss",$userid,$type,$location,$upload_date);
    //Set parameter and execute

    $userid = $_POST['userid'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $upload_date = $_POST['upload_date'];
        // Set parameters and execute
        if ($stmt->execute()) {
            echo "New record has been added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
   } else {
        echo "Error: User ID does not exist";
    }




$conn->close();
?>
