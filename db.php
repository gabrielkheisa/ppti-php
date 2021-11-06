<?php
$servername = "ec2-35-169-49-157.compute-1.amazonaws.com";
$username = "zyaevdgkdqjonw";
$password = "1dad81da15055e435ebf0d78eb7f105151dfb3258740090eddd93002e1d0e375";
$dbname = "dffgteh9bap75p";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Sensor1 (suhu, kelembapan, waterlevel)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>