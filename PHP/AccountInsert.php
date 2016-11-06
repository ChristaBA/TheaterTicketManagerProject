<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
$passwordslogin = filter_input(INPUT_POST,"pass");
$passwordlogin = md5($passwordslogin);
$login = filter_input(INPUT_POST,"log");
$accountType = filter_input(INPUT_POST,"acc");
$companyName = filter_input(INPUT_POST,"companyName");
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $firstname);
$last_name = mysqli_real_escape_string($link, $lastname);
$password_login = mysqli_real_escape_string($link, $passwordlogin);
$login_sql = mysqli_real_escape_string($link, $login);
$accont_Type = mysqli_real_escape_string($link, $accountType);
$company_Name = mysqli_real_escape_string($link, $companyName);
$mysqli_get_users = mysqli_query($link,"SELECT * FROM worker where login= '$login_sql' " );
$get_rows = mysqli_affected_rows($link);
if($get_rows >= 1)
{
    echo "User exists: please pick a different username.";
    echo "You are being redirected.";
    header("refresh:3; url = index.php");
}
else{
$sql = "INSERT INTO worker (firstname, lastname, password, login, accounttype, companyName)
VALUES ('$first_name', '$last_name','$password_login', '$login_sql', '$accont_Type', '$company_Name')";
if ($link->query($sql) === TRUE) {
    echo "Account Created, You are being redirected.";
      header("refresh:3; url = index.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
$link->close();