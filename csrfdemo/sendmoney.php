<?php 
$user = $_GET['user'];
$amount = $_GET['amount'];

echo '<h2>The money has been transfered successfully</h2>';
echo 'You have sent ' . $user . ' €' . $amount ?>

<?php 
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
$sql = "INSERT INTO transfers (name, amount) VALUES ('$user', '$amount')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/csrfdemo/');
exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>