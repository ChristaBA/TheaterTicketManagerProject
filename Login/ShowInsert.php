<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";
// Create connection
$link =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$showname = filter_input(INPUT_POST,"showname");
$tmpName = $_FILES['showImage']['tmp_name'];
$startDate = filter_input(INPUT_POST,"startDate");
$endDate = filter_input(INPUT_POST,"endDate");
$location = filter_input(INPUT_POST,"location");
// Escape user inputs for security
$show_name = mysqli_real_escape_string($link, $showname);
$start_date = mysqli_real_escape_string($link, $startDate);
$end_Date = mysqli_real_escape_string($link, $endDate);
$locationDB = mysqli_real_escape_string($link, $location);
$mysqli_get_users = mysqli_query($link,"SELECT * FROM show where showName= '$show_name' " );
$get_rows = mysqli_affected_rows($link);
if($get_rows >= 1)
{
    echo "user exists: please pick a different username.";
   // header('Location: index.php');
}
else{
$sql = "INSERT INTO showName (showname, startdate, enddate, location)
VALUES ('$show_name', '$start_date','$end_Date', '$locationDB')";
if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
$link->close();