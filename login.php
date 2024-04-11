<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";
//DONE BY NIYOGITANGAZA YVETTE-222010460
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$uname = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT *FROM user WHERE username='$uname' AND password='$password'";
$result =$conn->query($sql);
if ($result->num_rows >0) {
  // 
  header("Location:index.php");
      exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
