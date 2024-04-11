<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

// habiyaremye daniel 222007495 Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare SQL statement using prepared statement
    $sql = "INSERT INTO user (firstname, lastname, username, email, telephone, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("ssssss", $fname, $lname, $username, $email, $phone, $hashed_password);
        
        // Extract form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        if ($stmt->execute()) {
            // Success message
            echo "<script>alert('Record well recorded!');</script>";
            header("Location: login.html");
            exit;
        } else {
            // Error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        // Close the prepared statement
        $stmt->close();
    } else {
        // Error message if preparation fails
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
