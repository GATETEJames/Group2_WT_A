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

$sql = "SELECT * FROM profile";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information about profile of user</title>";
    echo "<h1>The Information about profile of user</h1>";
    echo "<table border='1'>
            <tr>
                <th>pid</th>
                <th>userid</th>
                <th>Campus</th>
                <th>College</th>
                <th>School</th>
                <th>Department</th>
                <th>Level</th>
                <th>Group</th>
                <th>Regnumber</th>
                
            </tr>";

    //Ruth MUHAWENAYO 222007339 april 2024

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["userid"] . "</td>";
        echo "<td>" . $row["Campus"] . "</td>";
        echo "<td>" . $row["College"] . "</td>";
        echo "<td>" . $row["School"] . "</td>";
        echo "<td>" . $row["Department"] . "</td>";
        echo "<td>" . $row["Level"] . "</td>";
        echo "<td>" . $row["Group"] . "</td>";
        echo "<td>" . $row["Regnumber"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo " no information found";
}
//Ruth MUHAWENAYO 222007339 april 2024

$conn->close();
?>
