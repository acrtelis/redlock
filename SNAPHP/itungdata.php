<?php
$servername = "172.18.0.2";
$username = "root";
$password = "gaby2409";
$dbname = "Redlock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(ID) as itung FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "terdapat data sebanyak ".$row["itung"];
} else {
    echo "0 results";
}

$conn->close();
?>
