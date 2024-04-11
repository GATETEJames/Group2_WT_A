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

$sql = "SELECT * FROM article";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about role of user</title>";
    echo "<h1>The Information about role of user</h1>";
    echo "<table border='1'>
            <tr>
                <th>artid</th>
                <th>userid</th>
                <th>title</th>
                <th>contents</th>
                <th>dateofcreation</th>
               
               
            </tr>";

     //Ruth MUHAWENAYO 222007339 april 2024

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["artid"] . "</td>";
        echo "<td>" . $row["userid"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["contents"] . "</td>";
        echo "<td>" . $row["dateofcreation"] . "</td>";
       
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no information found";
}

//Ruth MUHAWENAYO 222007339 april 2024

$conn->close();
?>
