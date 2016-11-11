<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

$servername = "localhost";
$username = "jakubvalenta";
$password = "";
$dbname = "c9";


echo 'Hello world from Cloud9!<br/>';



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br/>";

$sql = "select * from test1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "key: " . $row["key"]. " - Value: " . $row["value"]. "<br>";
    }
} else {
    echo "0 results<br/>";
}

$conn->close();



?>
</body>
</html>