<?php
//Ruth MUHAWENAYO 222007339 april 2024
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

$sql = "SELECT * FROM multimedia";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about multimedia</title>";
    echo "<h1>The Information about multimedia</h1>";
    echo "<table border='1'>
            <tr>
                <th>mid</th>
                <th>userid</th>
                <th>type</th>
                <th>location</th>
                <th>upload_date</th>
               
            </tr>";

     //Ruth MUHAWENAYO 222007339 april 2024

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["mid"] . "</td>";
        echo "<td>" . $row["userid"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["upload_date"] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no information found";
}

//Ruth MUHAWENAYO 222007339 april 2024

$conn->close();
?>
