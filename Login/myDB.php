<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 $test = mysqli_connect($servername, $username, $password);
// Check connection
if($test === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($test, $sql)){
    echo "Database demo created successfully. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($test);
}
$link = mysqli_connect($servername, $username, $password, $dbname);
 // Attempt create table query execution
$sqlTable = "CREATE TABLE IF NOT EXISTS worker (
         firstname VARCHAR(30) NOT NULL, 
         lastname VARCHAR(30) NOT NULL, 
         password VARCHAR(50), 
         login VARCHAR(50), 
         accounttype INT(4)
         )";
if (mysqli_query($link, $sqlTable)){
    echo "Table worker created successfully. ";
} else {
    echo "ERROR: Could not able to execute $sqlTable. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
        // personid INT(4)UNSIGNED AUTO_INCREMENT PRIMARY KEY, 