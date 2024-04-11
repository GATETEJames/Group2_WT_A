<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$email = $_POST['email'];
$Phone = $_POST['Pnumber'];
$password = $_POST['password'];

$sql = "INSERT INTO user (firstname, lastname, username, email, telephone, password) VALUES ('$fname','$lname','$username','$email','$Phone','$password')";

if ($conn->query($sql) === TRUE) {
   echo "successfully registered!";
   header("Location: login.html");
   exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
