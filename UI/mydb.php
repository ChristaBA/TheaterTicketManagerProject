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
  //  echo "Database demo created successfully. ";
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
   // echo "Table worker created successfully. ";
} else {
    echo "ERROR: Could not able to execute $sqlTable. " . mysqli_error($link);
}

mysqli_close($link);
$linkShow = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$showTable = "CREATE TABLE IF NOT EXISTS showName (
         showname VARCHAR(30) NOT NULL,
         date VARCHAR(30) NOT NULL, 
         time VARCHAR(30) NOT NULL, 
         location VARCHAR(50),
         Company VARCHAR(50),
         image LONGBLOB NOT NULL,
         showId VARCHAR(50) NOT NULL,
         showing INT(10), 
         )";
if (mysqli_query($linkShow, $showTable)){
    //echo "Table showName created successfully. ";
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
         phonenumber INT(10),
         seat VARCHAR(30),
         day VARCHAR(30),
         time VARCHAR(30),
         address VARCHAR(50),
         company VARCHAR(50)
         )";
if (mysqli_query($linkSeasonTicket, $seasonTicketTable)){
   // echo "Table seasonTicket created successfully. ";
    
} else {
    echo "ERROR: Could not able to execute $seasonTicketTable. " . mysqli_error($linkSeasonTicket);
}

// Close connection
mysqli_close($linkSeasonTicket); 
$linkTest = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$linkTestTable = "CREATE TABLE IF NOT EXISTS Tickets (
         seatNumber VARCHAR(30) NOT NULL, 
         Price DOUBLE,
         ShowId VARCHAR(50), 
         UniqueId VARCHAR(50),
         Status INT(10),
         Pickup INT(10)
         )";
if (mysqli_query($linkTest, $linkTestTable)){
   // echo "Ticket Table created successfully. ";
} else {
    echo "ERROR: Could not able to execute $linkTestTable. " . mysqli_error($linkTest);
}

// Close connection
mysqli_close($linkTest);
$ticketPrice = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$ticketPriceTable = "CREATE TABLE IF NOT EXISTS TicketPrice (
         company VARCHAR(50) NOT NULL,
         SeatType VARCHAR(50), 
         Price DOUBLE
         )";
if (mysqli_query($ticketPrice, $ticketPriceTable)){
   // echo "TicketPrice Table created successfully. ";
} else {
    echo "ERROR: Could not able to execute $ticketPriceTable. " . mysqli_error($ticketPrice);
}

// Close connection
mysqli_close($ticketPrice);

$Discount = mysqli_connect($servername, $username, $password, $dbname);

 // Attempt create table query execution
$discountTable = "CREATE TABLE IF NOT EXISTS Discount(
         code VARCHAR(50) NOT NULL,
         discount INT(10), 
         Active BIT(1)
         )";
if (mysqli_query($Discount, $discountTable)){
  //  echo "Discount Table created successfully. ";
} else {
    echo "ERROR: Could not able to execute $discountTable. " . mysqli_error($Discount);
}

// Close connection
mysqli_close($Discount);