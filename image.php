<?php
//HABIYAREMYE DANIEL 222007495
// Check if form is submitted well in.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["imagefile"]) && $_FILES["imagefile"]["error"] == 0) {
        $userId = 1; // Example user ID, you should get this dynamically based on your user authentication

        $targetDir = "C:xampp\htdocs\imageess\images"; // Absolute directory path
        $targetFile = $targetDir . basename($_FILES["imagefile"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Allow certain file formats (adjust as needed)
        $allowedFormats = array("jpg", "jpg", "jpg","jpg","jpg");

        if (in_array($fileType, $allowedFormats)) {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $targetFile)) {
                // Insert Audio details into database
                $type = "image"; // Type of multimedia (image)
                $location = $targetFile; // Path to the uploaded image file
                $upload_date = date("Y-m-d H:i:s"); // Current date and time
//HABIYAREMYE DANIEL on 9th april 2024
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";//this is empty because I din't set any password
                $dbname = "bityeartwo2024";

                // Create database connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check database connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Prepare SQL statement to insert into multimedia table
                $sql = "INSERT INTO multimedia (userid, type, location, uploaddate) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("isss", $userId, $type, $location, $uploaddate);

                // Execute the prepared statement
                if ($stmt->execute()) {
                    echo "image uploaded successfully.";
                } else {
                    echo "Error uploading image: " . $stmt->error;
                }

                // Close the database connection
                $stmt->close();
                $conn->close();
            } else {
                echo "Error uploading image.";
            }
        } else {
            echo "Unsupported image format. Please upload an image file in jpg, jpg, jpg,jpg,jpg format.";
        }
    } else {
        echo "Error uploading image.";
    }
}
?>