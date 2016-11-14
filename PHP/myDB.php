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
         accounttype INT(4),
         companyName VARCHAR(30)
         )";
if (mysqli_query($link, $sqlTable)){
    echo "Table worker created successfully. ";
} else {
    echo "ERROR: Could not able to execute $sqlTable. " . mysqli_error($link);
}

mysqli_close($link);
$linkShow = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$showTable = "CREATE TABLE IF NOT EXISTS showName (
         showname VARCHAR(30) NOT NULL,
         startdate VARCHAR(30) NOT NULL, 
         enddate VARCHAR(50), 
         location VARCHAR(50),
         image LONGBLOB NOT NULL
         )";
if (mysqli_query($linkShow, $showTable)){
    echo "Table showName created successfully. ";
} else {
    echo "ERROR: Could not able to execute $showTable. " . mysqli_error($linkShow);
}

// Close connection
mysqli_close($linkShow);
        // personid INT(4)UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
$linkSeasonTicket = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$seasonTicketTable = "CREATE TABLE IF NOT EXISTS seasonTicket (
         firstname VARCHAR(30) NOT NULL, 
         lastname VARCHAR(30) NOT NULL, 
         ticketnumber VARCHAR(50), 
         email VARCHAR(50), 
         phonenumber INT(4),
         seat VARCHAR(30),
         day VARCHAR(30),
         time VARCHAR(30),
         address VARCHAR(50)
         )";
if (mysqli_query($linkSeasonTicket, $seasonTicketTable)){
    echo "Table seasonTicket created successfully. ";
} else {
    echo "ERROR: Could not able to execute $seasonTicketTable. " . mysqli_error($linkSeasonTicket);
}

// Close connection
mysqli_close($linkSeasonTicket);
        // personid INT(4)UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
$linkTest = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$linkTestTable = "CREATE TABLE IF NOT EXISTS tablename (
         item1 VARCHAR(30) NOT NULL, 
         item2 VARCHAR(30) NOT NULL,  
         item3 VARCHAR(50), 
         item4 VARCHAR(50),
         item5 VARCHAR(50)
         )";
if (mysqli_query($linkTest, $linkTestTable)){
    echo "Table testTable created successfully. ";
} else {
    echo "ERROR: Could not able to execute $linkTestTable. " . mysqli_error($linkTest);
}

// Close connection
mysqli_close($linkTest);
        // personid INT(4)UNSIGNED AUTO_INCREMENT PRIMARY KEY, 