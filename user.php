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

$sql = "SELECT * FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>The Information of User</title>";
    echo "<h1>The Information of User</h1>";
    echo "<table border='1'>
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>username</th>
                <th>email</th>
                <th>telephone</th>
                <th>password</th>
        
            </tr>";

     //Ruth MUHAWENAYO 222007339 april 2024

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telephone"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no information found";
}

//Ruth MUHAWENAYO 222007339 april 2024

$conn->close();
?>
