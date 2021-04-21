
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "database123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email']; 
$password = $_POST['password'];
$contact = $_POST['contact'];
$sql = "INSERT INTO details (Name, email, password, contact)
VALUES ('$name' ,  '$email' , '$password' , '$contact')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


