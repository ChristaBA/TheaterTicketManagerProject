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
$firstname = filter_input(INPUT_POST,"firstname");
$lastname = filter_input(INPUT_POST,"lastname");
$passwordlogin = filter_input(INPUT_POST,"pass");
$login = filter_input(INPUT_POST,"log");
$accountType = filter_input(INPUT_POST,"acc");
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $firstname);
$last_name = mysqli_real_escape_string($link, $lastname);
$password_login = mysqli_real_escape_string($link, $passwordlogin);
$login_sql = mysqli_real_escape_string($link, $login);
$accont_Type = mysqli_real_escape_string($link, $accountType);

$sql = "INSERT INTO worker (firstname, lastname, password, login, accounttype)
VALUES ('$first_name', '$last_name','$password_login', '$login_sql', $accont_Type)";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();