<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";

$link =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$showname = filter_input(INPUT_POST,"ShowName");
$startDate = filter_input(INPUT_POST,"StartDate");
$endDate = filter_input(INPUT_POST,"EndDate");
$location = filter_input(INPUT_POST,"Location");
$PosterUrl  = filter_input(INPUT_POST,"PosterUrl");
$Company = filter_input(INPUT_POST,"Company");
//$Poster_img  = addslashes(file_get_contents($_FILES['Poster']['tmp_name']));
//$imgtype = $Poster_img['mime'];
// Escape user inputs for security
$show_name = mysqli_real_escape_string($link, $showname);
$start_date = mysqli_real_escape_string($link, $startDate);
$end_Date = mysqli_real_escape_string($link, $endDate);
$locationDB = mysqli_real_escape_string($link, $location);
$Poster_Url = mysqli_real_escape_string($link, $PosterUrl );
$Company_Name = mysqli_real_escape_string($link, $Company );

$mysqli_get_users = mysqli_query($link,"SELECT * FROM show where showName= '$show_name' " );
$get_rows = mysqli_affected_rows($link);
if($get_rows >= 1)
{
    echo "user exists: please pick a different username.";
   // header('Location: index.php');
}
else{
$sql = "INSERT INTO showname (showname, startdate, enddate, location, Poster,Company)
VALUES ('$show_name', '$start_date','$end_Date', '$locationDB','$Poster_Url','$Company_Name')";
if ($link->query($sql) === TRUE) {
   echo "Show Created, You are being redirected.";
      header("refresh:3; url = Super.html");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
$link->close();