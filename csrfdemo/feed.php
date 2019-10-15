<?php 
$title = $_POST['title'];
$body = $_POST['body'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO posts (title, body) VALUES ('$title', '$body')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/csrfdemo/');
exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>