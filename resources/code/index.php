<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker</title>
</head>
<body>
    <h1>It Works</h1>
    <?php
        $servername = "database";
        $username = "root";
        $password = "dimas";
        $dbname = "mydb";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id, username, email FROM user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $d = new DateTime('2011-01-01T15:03:01.012345Z');

        // Output the microseconds.
        echo $d->format('u');
        $conn->close();
        phpinfo();
    ?>
</body>
</html>