<!-- UMUTONIWASE Aliane -->
<!-- 222003979 -->

<?php
// Database connection code - adjust according to your database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
if (isset($_FILES["fileUpload"]) && $_FILES["fileUpload"]["error"] == 0) {
    $userid = $_POST["userid"];
    $type = $_POST["types"];
    $location = $_POST["location"];
    $uploaddate = $_POST["upload_date"];
    
    // File properties
    $file_name = $_FILES["fileUpload"]["name"];
    $file_size = $_FILES["fileUpload"]["size"];
    $tmpFileName = $_FILES["fileUpload"]["tmp_name"];
    $file_type = $_FILES["fileUpload"]["type"];
    
    // Read the file content
    $uploaddata = file_get_contents($tmpFileName);
    $uploaddata = mysqli_real_escape_string($conn, $uploaddata);

    // Prepare and bind SQL statement
    $sql = "INSERT INTO multimedia (userid, type, location, uploaddate) 
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $userid, $type, $location, $uploaddate); // Changed "issss" to "isss"

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "audio uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading the audio.";
}

// Close connection
$conn->close();
?>
