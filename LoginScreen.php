
<html>
 <head>
  <title>Login Screen</title>
 </head>
 <body>
<?php

echo "Welcome to the employee login screen <br>"; 

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = 'Vatsal';
$lastName = 'Patel';
$email = 'vbp0001@uah';
$number = 256714;
$sql = "INSERT INTO Main (firstname, lastname, email, telephone)
VALUES ('$name', '$lastName','$email', $number)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>